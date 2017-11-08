package com.syj.java.base.service.impl;

import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.nio.charset.Charset;
import java.util.Date;
import java.util.UUID;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Service;
import org.springframework.util.StreamUtils;

import com.syj.java.base.domain.VerifyCodeVO;
import com.syj.java.base.service.IVerifyCodeService;
import com.syj.java.base.utils.BidConst;
import com.syj.java.base.utils.DateUtil;
import com.syj.java.base.utils.UserContext;

/**
 * 验证码相关
 * 
 * @author Administrator
 * 
 */
@Service
public class VerifyCodeServiceImpl implements IVerifyCodeService {
	@Value("${SMS.url}")
	private String url;
	@Value("${SMS.username}")
	private String username;
	@Value("${SMS.password}")
	private String password;
	@Value("${SMS.apikey}")
	private String apikey;

	public void sendVerifyCode(String phoneNumber) {
		// 判断是否可以发送验证码
		VerifyCodeVO vc = UserContext.getCurrentVerifyCode();
		Date nowTime = new Date();
		if (vc == null
				|| DateUtil.getSecondsBetweenDates(nowTime,
						vc.getLastSendTime()) > 90) {
			// 生成验证码
			String verifyCode = UUID.randomUUID().toString().substring(0, 4);
			// 发送短信
			try {
				// 创建一个url对象
				URL url = new URL(this.url);
				// 通过url得到一个httpurlconnection对象
				HttpURLConnection connection = (HttpURLConnection) url
						.openConnection();
				// 拼接POST请求的内容
				StringBuilder content = new StringBuilder(100)
						.append("username=").append(username)
						.append("&password=").append(password)
						.append("&apikey=").append(apikey)
						.append("&phoneNumber=").append(phoneNumber)
						.append("&content=").append("您的验证码是:")
						.append(verifyCode).append("请在五分钟内使用.");
				// 发送POST请求,注意大写
				connection.setRequestMethod("POST");
				// 设置POST请求是有请求体的
				connection.setDoOutput(true);
				// 写入POST请求体
				connection.getOutputStream().write(
						content.toString().getBytes());
				// 得到响应流(其实就已经发送了)
				String response = StreamUtils.copyToString(
						connection.getInputStream(), Charset.forName("UTF-8"));
				if(response.startsWith("success:")){
					//发送成功
					System.out.println("发送短信到" + phoneNumber + ",验证码是" + verifyCode);
					// 把相关信息封装到VO中,并将VO放到session中
					vc = new VerifyCodeVO();
					vc.setPhoneNumber(phoneNumber);
					vc.setVerifyCode(verifyCode);
					vc.setLastSendTime(nowTime);
					UserContext.putCurrentVerifyCode(vc);
				}else{
					//发送失败
					throw new RuntimeException();
				}
			} catch (Exception e) {
				e.printStackTrace();
				throw new RuntimeException("短信发送失败");
			}

		} else {
			throw new RuntimeException("操作过于频繁,请稍候再试");
		}
	}

	public boolean verifyCode(String phoneNumber, String verifyCode) {
		VerifyCodeVO vc = UserContext.getCurrentVerifyCode();
		if (vc != null
				&& vc.getPhoneNumber().equals(phoneNumber)
				&& vc.getVerifyCode().equalsIgnoreCase(verifyCode)
				&& DateUtil.getSecondsBetweenDates(new Date(),
						vc.getLastSendTime()) < BidConst.VERIFYCODE_VALID_TIME) {
			return true;
		}
		return false;
	}

}

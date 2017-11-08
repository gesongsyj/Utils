package com.syj.java.base.domain;

import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.HashMap;
import java.util.Map;

import lombok.Getter;
import lombok.Setter;

import org.springframework.format.annotation.DateTimeFormat;
import org.springframework.util.StringUtils;

import com.alibaba.fastjson.JSONObject;
@Getter@Setter
public class RealAuth extends AuditBaseDomain{
	public static final int SEX_MALE=1;
	public static final int SEX_FAMALE=0;
	
	private String realName;//真实姓名
	private int sex;//性别
	private String idNumber;//证件号码
	@DateTimeFormat(pattern="yyyy-MM-dd")
	private Date birthDate;//出生日期
	private String idAdress;//证件地址
	private String image1;//身份证正面图片地址
	private String image2;//身份证反面图片地址
	
	public String getSexDisplay(){
		return sex==SEX_MALE?"男":"女";
	}
	
	public String getJsonString(){
		Map<String,Object> jsonMap=new HashMap<String, Object>();
		jsonMap.put("id", id);
		jsonMap.put("username", applier.getUsername());
		jsonMap.put("realName", realName);
		jsonMap.put("sex", getSexDisplay());
		jsonMap.put("idNumber", idNumber);
		jsonMap.put("birthDate", new SimpleDateFormat("yyyy-MM-dd").format(birthDate));
		jsonMap.put("idAdress", idAdress);
		jsonMap.put("image1", image1);
		jsonMap.put("image2", image2);
		String jsonString = JSONObject.toJSONString(jsonMap);
		return jsonString;
	}
	/**
	 * 获取用户真实名字的隐藏字符串，只显示姓氏
	 *
	 * @param realName
	 *            真实名字
	 * @return
	 */
	public String getAnonymousRealName() {
		if (StringUtils.hasLength(realName)) {
			int len = realName.length();
			String replace = "";
			replace += realName.charAt(0);
			for (int i = 1; i < len; i++) {
				replace += "*";
			}
			return replace;
		}
		return realName;
	}

	/**
	 * 获取用户身份号码的隐藏字符串
	 *
	 * @param idNumber
	 * @return
	 */
	public String getAnonymousIdNumber() {
		if (StringUtils.hasLength(idNumber)) {
			int len = idNumber.length();
			String replace = "";
			for (int i = 0; i < len; i++) {
				if ((i > 5 && i < 10) || (i > len - 5)) {
					replace += "*";
				} else {
					replace += idNumber.charAt(i);
				}
			}
			return replace;
		}
		return idNumber;
	}

	/**
	 * 获取用户住址的隐藏字符串
	 *
	 * @param currentAddress
	 *            用户住址
	 * @return
	 */
	public String getAnonymousAddress() {
		if (StringUtils.hasLength(idAdress) && idAdress.length() > 4) {
			String last = idAdress.substring(idAdress.length() - 4,
					idAdress.length());
			String stars = "";
			for (int i = 0; i < idAdress.length() - 4; i++) {
				stars += "*";
			}
			return stars + last;
		}
		return idAdress;
	}
}

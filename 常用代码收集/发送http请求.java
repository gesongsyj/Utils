package com.hotel.system.web;

import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.File;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLDecoder;
import java.net.URLEncoder;
import java.text.SimpleDateFormat;
import java.util.Date;

import com.alibaba.fastjson.JSONObject;
import com.hotel.common.utils.MD5;

public class checkImg {
//	private static String urlPath ="http://124.192.161.110:2025/face/verify/p1/check";//测试环境url
	private static String urlPath = "http://face.id5.cn:2025/face/verify/p1/check";//正式环境url
	private static String accessId = "jsjy1206";
	private static String accessPwd = "27F851LX213";

	public static void main(String[] args) throws UnsupportedEncodingException {
		// 图片处理为base64字符串,Base64.NO_WRAP:忽略换行
//		String faceImg = ImageUtils
//				.encodeImgageToBase64(new File("F:/MavenApps/rzbd_bak/src/main/webapp/image/face.jpg"));
//		Date date1 = new Date();
//		String result = checkImg("340827199210260058","宋焰君",faceImg);
//		Date date2 = new Date();
//		long time = date2.getTime() - date1.getTime();
//		System.out.println(result);
//		System.out.println("用时:" + time);
	}

	/**
	 * 
	 * @param userId
	 *            身份证号码
	 * @param userName
	 *            姓名
	 * @param faceImg
	 *            现场照的base64,无换行
	 * @return
	 * @throws UnsupportedEncodingException
	 */
	public static String check(String userId, String userName, String faceImg) throws UnsupportedEncodingException {
		String timeStamp = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss.SSS").format(new Date());
		String accessKey = MD5.encode(accessId + accessPwd + timeStamp).toLowerCase();
		// 内容包含中文时,使用UTF-8编码
		userName = URLEncoder.encode(userName, "UTF-8");
		// 以下是可选参数
		// int faceImgType = 3;
		// String trueNegativeRate = "99.9";
		// String sign = "syj";
		StringBuffer sb = new StringBuffer("");
		try {
			// 创建连接
			URL url = new URL(urlPath);
			HttpURLConnection connection = (HttpURLConnection) url.openConnection();
			connection.setDoOutput(true);
			connection.setDoInput(true);
			connection.setRequestMethod("POST");
			connection.setUseCaches(false);
			connection.setInstanceFollowRedirects(true);
			// connection.setRequestProperty("Content-Type","application/x-www-form-urlencoded");
			connection.setRequestProperty("Content-Type", "application/json; charset=UTF-8");

			connection.connect();

			// POST请求
			DataOutputStream out = new DataOutputStream(connection.getOutputStream());
			JSONObject obj = new JSONObject();

			obj.put("accessId", accessId);
			obj.put("accessKey", accessKey);
			obj.put("timeStamp", timeStamp);
			obj.put("userId", userId);
			obj.put("userName", userName);
			obj.put("faceImg", faceImg);
			// obj.put("faceImgType", faceImgType);
			// obj.put("trueNegativeRate", trueNegativeRate);
			// obj.put("sign", sign);

			// System.out.println(obj.toString());
			// out.writeBytes(obj.toString());//这个中文会乱码
			out.write(obj.toString().getBytes("UTF-8"));// 这样可以处理中文乱码问题
			out.flush();
			out.close();

			// 读取响应
			BufferedReader reader = new BufferedReader(new InputStreamReader(connection.getInputStream()));
			String lines;
			while ((lines = reader.readLine()) != null) {
				lines = new String(lines.getBytes(), "utf-8");
				sb.append(lines);
			}
			reader.close();
			// 断开连接
			connection.disconnect();
		} catch (MalformedURLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (UnsupportedEncodingException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return URLDecoder.decode(sb.toString(), "utf-8");

	}
}

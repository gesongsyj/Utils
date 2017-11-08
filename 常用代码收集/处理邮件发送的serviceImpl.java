package com.syj.java.base.service.impl;

import java.util.Properties;

import javax.mail.internet.MimeMessage;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.mail.javamail.JavaMailSenderImpl;
import org.springframework.mail.javamail.MimeMessageHelper;
import org.springframework.stereotype.Component;
import org.springframework.stereotype.Service;

import com.syj.java.base.service.IEmailService;
@Service
public class EmailServiceImpl implements IEmailService {
	@Value("${email.host}")
	private String host;
	@Value("${email.port}")
	private int port;
	@Value("${email.username}")
	private String username;
	@Value("${email.password}")
	private String password;
	public void sendEmail(String from,String to, String title, String content) {
		try {
			JavaMailSenderImpl senderImpl = new JavaMailSenderImpl();
			//设置默认的编码格式
			senderImpl.setDefaultEncoding("UTF-8");
			//设置邮件服务器
			senderImpl.setHost(host);
//			senderImpl.setPort(port);
			//创建邮件对象
			MimeMessage message=senderImpl.createMimeMessage();
			//创建邮件助手
			MimeMessageHelper messageHelper = new MimeMessageHelper(message);
			//设置收件人,寄件人,标题
			messageHelper.setTo(to);
			messageHelper.setFrom(from);
			messageHelper.setSubject(title);
			//设置内容并以HTML格式启动
			messageHelper.setText(content, true);
			//设置用户名和密码
			senderImpl.setUsername(username);
			senderImpl.setPassword(password);
			Properties prop = new Properties();
			prop.put("mail.smtp.auth", "true");//这个参数设置为true,表示需要服务器认证用户名和密码是否正确
			prop.put("mail.smtp.timeout", "25000");
			senderImpl.setJavaMailProperties(prop);
			//发送邮件
			senderImpl.send(message);
		} catch (Exception e) {
			e.printStackTrace();
			throw new RuntimeException("邮件发送失败");
		}
	}

}

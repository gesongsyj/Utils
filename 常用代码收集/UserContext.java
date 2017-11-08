package com.syj.java.base.utils;

import javax.servlet.http.HttpSession;

import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;

import com.syj.java.base.domain.LoginInfo;
import com.syj.java.base.domain.VerifyCodeVO;

public class UserContext {
	public static final String USER_IN_SESSION = "loginInfo";
	public static final String VERIFYCODE_IN_SESSION = "verifyCode";

	private static HttpSession getSession() {
		return ((ServletRequestAttributes) RequestContextHolder
				.getRequestAttributes()).getRequest().getSession();
	}
	//把当前登录用户放到session中
	public static void putCurrent(LoginInfo current){
		getSession().setAttribute(USER_IN_SESSION, current);
	}
	//从session中取出当前用户
	public static LoginInfo getCurrent(){
		return (LoginInfo) getSession().getAttribute(USER_IN_SESSION);
	}
	//把当前验证码放入session中
	public static  void putCurrentVerifyCode(VerifyCodeVO vc){
		getSession().setAttribute(UserContext.VERIFYCODE_IN_SESSION, vc);
	}
	//从session中取出当前验证码
	public static VerifyCodeVO getCurrentVerifyCode(){
		return (VerifyCodeVO) getSession().getAttribute(VERIFYCODE_IN_SESSION);
	}
	
}

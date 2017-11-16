package com.xmg.pps.utils;

import javax.servlet.http.HttpSession;

import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;

import com.xmg.pps.domain.Employee;

public class UserContext {
	public static final String USER_IN_SESSION = "userInSession";

	private static HttpSession getSession() {
		return ((ServletRequestAttributes) RequestContextHolder
				.getRequestAttributes()).getRequest().getSession();
	}

	// 把当前登录用户放到session中,如果传入null,则移除,用于注销登录
	public static void putCurrent(Employee current) {
		if (current != null) {
			getSession().setAttribute(USER_IN_SESSION, current);
		} else {
			getSession().removeAttribute(USER_IN_SESSION);
		}
	}

	// 从session中取出当前用户
	public static Employee getCurrent() {
		return (Employee) getSession().getAttribute(USER_IN_SESSION);
	}

}

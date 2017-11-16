package com.xmg.pps.utils;

import com.opensymphony.xwork2.ActionContext;
import com.xmg.pps.domain.Employee;

public class UserContext {
	public static final String USER_IN_SESSION = "userInSession";

	// 把当前登录用户放到session中,如果传入null,则移除,用于注销登录
	public static void putCurrent(Employee current) {
		if (current != null) {
			ActionContext.getContext().getSession().put(USER_IN_SESSION, current);
		} else {
			ActionContext.getContext().getSession().remove(USER_IN_SESSION);
		}
	}

	// 从session中取出当前用户
	public static Employee getCurrent() {
		return (Employee) ActionContext.getContext().getSession().get(USER_IN_SESSION);
	}

}

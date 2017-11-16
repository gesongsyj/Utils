package com.xmg.pps.web.interceptor;

import com.opensymphony.xwork2.Action;
import com.opensymphony.xwork2.ActionInvocation;
import com.opensymphony.xwork2.interceptor.AbstractInterceptor;
import com.xmg.pps.domain.Employee;
import com.xmg.pps.utils.UserContext;

public class CheckLoginInterceptor extends AbstractInterceptor {

	public String intercept(ActionInvocation invocation) throws Exception {
		Employee user = UserContext.getCurrent();
		if(user==null){
			return Action.LOGIN;
		}
		return invocation.invoke();
	}

}

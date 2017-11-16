package com.xmg.pps.web.interceptor;

import java.lang.reflect.Method;
import java.util.HashSet;
import java.util.List;
import java.util.Map;
import java.util.Set;

import com.opensymphony.xwork2.ActionContext;
import com.opensymphony.xwork2.ActionInvocation;
import com.opensymphony.xwork2.interceptor.AbstractInterceptor;
import com.xmg.pps.domain.Employee;
import com.xmg.pps.domain.Permission;
import com.xmg.pps.domain.Role;
import com.xmg.pps.utils.PermissionUtil;
import com.xmg.pps.utils.RequirePermission;
import com.xmg.pps.utils.UserContext;

@SuppressWarnings("all")
public class CheckPermissionInterceptor extends AbstractInterceptor{

	public String intercept(ActionInvocation invocation) throws Exception {
		Employee current = UserContext.getCurrent();
		//如果当前用户是超级管理员,放行
		if(current.isAdmin()){
			return invocation.invoke();
		}
		String methodName = invocation.getProxy().getMethod();
		Method method = invocation.getAction().getClass().getDeclaredMethod(methodName);
		RequirePermission rp = method.getAnnotation(RequirePermission.class);
		//如果当前操作不需要权限,放行
		if(rp==null){
			return invocation.invoke();
		}
		//获取当前请求方法的表达式
		String expression = PermissionUtil.buildExpression(method);
		List<String> ps = UserContext.getPermissions();
		//判断用户是否有该权限
		if(ps.contains(expression)){
			return invocation.invoke();
		}
		return "nopermission";
	}

}

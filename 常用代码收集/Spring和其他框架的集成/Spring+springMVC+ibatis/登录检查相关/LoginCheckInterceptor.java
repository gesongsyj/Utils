package com.xmg.web.utils.interceptor;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.springframework.web.method.HandlerMethod;
import org.springframework.web.servlet.HandlerInterceptor;
import org.springframework.web.servlet.ModelAndView;
import org.springframework.web.servlet.handler.HandlerInterceptorAdapter;

import com.syj.java.base.utils.UserContext;
import com.xmg.web.utils.annotation.ReqireLogin;

/**
 * 专门用于登录检查的拦截器
 * @author Administrator
 *
 */
public class LoginCheckInterceptor extends HandlerInterceptorAdapter {

	@Override
	public boolean preHandle(HttpServletRequest request,
			HttpServletResponse response, Object handler) throws Exception {
		if(handler instanceof HandlerMethod){
			HandlerMethod hm=(HandlerMethod) handler;
			ReqireLogin rl = hm.getMethodAnnotation(ReqireLogin.class);
			if(rl!=null && UserContext.getCurrent()==null){
				response.sendRedirect("/login.html");
				return false;
			}
		}
		return super.preHandle(request, response, handler);
	}
}

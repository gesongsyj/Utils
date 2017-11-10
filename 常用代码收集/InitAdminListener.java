package com.xmg.mgr.listener;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.ApplicationListener;
import org.springframework.context.event.ContextRefreshedEvent;
import org.springframework.stereotype.Component;

import com.syj.java.base.service.ILoginInfoService;
/**
 * 初始化超级管理员的监听器
 * 在Spring中,实现了ApplicationListener接口的类就可以作为Spring的监听器来监听Spring中特殊的事件
 * 在Spring中,ApplicationEvent这个类相当于所有的事件,如果我们的监听器继承ApplicationListener<ApplicationEvent>
 * 相当于我们这个监听器监听的是Spring里面所有的事件
 * @author Administrator
 *
 */
@Component
public class InitAdminListener implements ApplicationListener<ContextRefreshedEvent> {
	@Autowired
	ILoginInfoService loginInfoService;
	public void onApplicationEvent(ContextRefreshedEvent event) {
		loginInfoService.initAdmin();
	}

}

package com.xmg.pps.web.action;

import com.opensymphony.xwork2.ActionContext;
import com.opensymphony.xwork2.ActionSupport;
import com.opensymphony.xwork2.Preparable;

public class BaseAction extends ActionSupport implements Preparable{
	
	//在所有action方法之前执行
	public void prepare() throws Exception {
	}
	//把数据存放到context区域
	public void putContext(String name,Object value){
		ActionContext.getContext().put(name, value);
	}
}

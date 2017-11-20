package com.xmg.pps.web.action;

import org.apache.struts2.ServletActionContext;

import com.alibaba.fastjson.JSON;
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
	
	/**
	 * 给客户端响应html格式数据
	 * @throws IOException 
	 */
	protected void putResponseText(String data) throws Exception{
		ServletActionContext.getResponse().setContentType("text/html;charset=utf-8");
		ServletActionContext.getResponse().getWriter().print(data);
	}
	/**
	 * 给客户端响应json格式数据
	 * @throws IOException 
	 */
	protected void putResponseJson(Object obj) throws Exception{
		String jsonString = JSON.toJSONString(obj);
		ServletActionContext.getResponse().setContentType("text/html;charset=utf-8");
		ServletActionContext.getResponse().getWriter().print(jsonString);
	}
}

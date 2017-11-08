package com.xmg.wms.domain;

import java.io.IOException;

import javax.servlet.ServletContext;

import org.apache.struts2.ServletActionContext;

import com.alibaba.fastjson.JSON;
import com.opensymphony.xwork2.ActionContext;
import com.opensymphony.xwork2.ActionSupport;
import com.opensymphony.xwork2.Preparable;

//所有Action的基类,存放共同的代码
public class BaseAction extends ActionSupport implements Preparable{
	/**
	 *在所有的Action方法之前都会执行
	 */
	public void prepare() throws Exception {
	}
	/**
	 *把数据存放在context区域
	 * @param name
	 * @param value
	 */
	protected void putContext(String name,Object value){
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

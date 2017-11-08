package com.syj.java.base.utils;

import lombok.Getter;
import lombok.Setter;

@Getter@Setter
public class JsonResult {
	private boolean success;
	private String msg;
	
	public JsonResult(Boolean success, String msg) {
		super();
		this.success = success;
		this.msg = msg;
	}
	public JsonResult(String msg) {
		super();
		this.msg = msg;
	}
	public JsonResult() {
		super();
	}
	
}

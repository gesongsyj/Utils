package com.syj.java.base.domain;

import java.util.HashMap;
import java.util.Map;

import lombok.Getter;
import lombok.Setter;

import com.alibaba.fastjson.JSONObject;
/**
 * 数据字典分类
 * @author Administrator
 *
 */
@Getter@Setter
public class SystemDictionary extends Basedomain{
	private String sn;
	private String title;
	public String getJsonString(){
		Map<String,Object> jsonMap=new HashMap<String, Object>();
		jsonMap.put("id", id);
		jsonMap.put("sn", sn);
		jsonMap.put("title", title);
		String jsonString = JSONObject.toJSONString(jsonMap);
		return jsonString;
	}
}

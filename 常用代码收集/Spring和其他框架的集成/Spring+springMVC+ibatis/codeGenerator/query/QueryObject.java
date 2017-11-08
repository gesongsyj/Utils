package com.syj.java.base.query;

import lombok.Getter;
import lombok.Setter;

@Getter@Setter
abstract public class QueryObject {
	private Integer currentPage=1;
	private Integer pageSize=5;
	
	public Integer getStart(){
		return (currentPage-1)*pageSize;
	}
}

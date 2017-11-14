package com.xmg.pps.query;
import java.util.Collections;
import java.util.List;

import lombok.Getter;
import lombok.Setter;

@Getter@Setter
public class PageResult {
	private List listData;//当前页的结果集数据;查询得到
	private Integer totalCount;//总数据条数;查询得到
	
	private Integer currentPage=1;
	private Integer pageSize=5;
	
	private Integer prevPage;//上一页
	private Integer nextPage;//下一页
	private Integer totalPage;//总页数
	//如果总数为0,返回一个空集
	public static PageResult emmty(Integer pageSize){
		return new PageResult(Collections.EMPTY_LIST, 0, 1, pageSize);
	}
	public Integer getTotalPage(){
		return totalPage==0?1:totalPage;
	}
	public PageResult(List listData, Integer totalCount, Integer currentPage,
			Integer pageSize) {
		this.listData = listData;
		this.totalCount = totalCount;
		this.currentPage = currentPage;
		this.pageSize = pageSize;
		//以上数据通过传入得到,下面的数据通过计算得到
		this.totalPage=totalCount%pageSize==0?totalCount/pageSize:totalCount/pageSize+1;
		this.prevPage=currentPage-1>0?currentPage-1:1;
		this.nextPage=currentPage+1<=totalPage?currentPage+1:totalPage;
	}
}

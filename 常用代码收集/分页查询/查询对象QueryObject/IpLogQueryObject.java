package com.syj.java.base.query;

import java.util.Date;

import lombok.Getter;
import lombok.Setter;

import org.springframework.format.annotation.DateTimeFormat;
import org.springframework.util.StringUtils;

import com.syj.java.base.utils.DateUtil;

/**
 * 登录日志查询对象
 * @author Administrator
 *
 */
@Setter@Getter
public class IpLogQueryObject extends QueryObject {
	private Date beginDate;
	private Date endDate;
	private int state=-1;
	private String userName;
	private int userType=-1;
	//对时间的处理
	@DateTimeFormat(pattern="yyyy-MM-dd")
	public void setBeginDate(Date beginDate){
		this.beginDate=beginDate;
	}
	@DateTimeFormat(pattern="yyyy-MM-dd")
	public void setEndDate(Date endDate){
		this.endDate=endDate;
	}
	//结束时间应该是该日期的最后一秒钟
	public Date getEndDate(){
		return endDate==null?null:DateUtil.endOfDay(endDate);
	}
	//对字符串的处理,前台如果传过来的是空字符串,需要处理为null
	public String getUserName(){
		return StringUtils.hasLength(userName)?userName:null;
	}
}

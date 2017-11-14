package com.syj.java.base.service;

import com.syj.java.base.query.IpLogQueryObject;
import com.syj.java.base.query.PageResult;

public interface IIpLogService {
	/**
	 * 高级查询加分页
	 * @param qo
	 * @return
	 */
	PageResult query(IpLogQueryObject qo);
}

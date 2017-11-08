package com.syj.java.base.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.syj.java.base.mapper.IpLogMapper;
import com.syj.java.base.query.IpLogQueryObject;
import com.syj.java.base.query.PageResult;
import com.syj.java.base.service.IIpLogService;
@Service
public class IpLogServiceImpl implements IIpLogService {

	@Autowired
	private IpLogMapper ipLogMapper;
	public PageResult query(IpLogQueryObject qo) {
		int count=ipLogMapper.queryForCount(qo);
		if(count>0){
			List listData=ipLogMapper.query(qo);
			return new PageResult(listData, count, qo.getCurrentPage(), qo.getPageSize());
		}
		return PageResult.emmty(qo.getPageSize());
	}

}

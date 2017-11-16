package com.syj.java.base.service.impl;

import java.util.Date;
import java.util.HashMap;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.syj.java.base.domain.Account;
import com.syj.java.base.domain.IpLog;
import com.syj.java.base.domain.LoginInfo;
import com.syj.java.base.domain.UserInfo;
import com.syj.java.base.mapper.IpLogMapper;
import com.syj.java.base.mapper.LoginInfoMapper;
import com.syj.java.base.service.IAccountService;
import com.syj.java.base.service.ILoginInfoService;
import com.syj.java.base.service.IUserInfoService;
import com.syj.java.base.utils.BidConst;
import com.syj.java.base.utils.MD5;
import com.syj.java.base.utils.UserContext;
@Service
public class LoginInfoServiceImpl implements ILoginInfoService {
	@Autowired
	private LoginInfoMapper loginInfoMapper;
	@Autowired
	private IAccountService accountService;
	@Autowired
	private IUserInfoService userInfoService;
	@Autowired
	private IpLogMapper ipLogMapper;
	
	public void register(String name, String password,Boolean userType) {
		//判断用户名是否存在
		int count = loginInfoMapper.queryCountByname(name);
		//如果不存在,设置并保存这个对象
		if(count<=0){
			LoginInfo li=new LoginInfo();
			li.setUsername(name);
			li.setPassword(MD5.encode(password));
			li.setState(LoginInfo.STATE_NORMAL);
			li.setUserType(userType);
			//用户名可用,注册用户
			loginInfoMapper.insert(li);
			
			//创建用户信息对象和账户信息对象
			Account account = new Account();
			account.setId(li.getId());
			accountService.add(account);
			UserInfo userInfo=new UserInfo();
			userInfo.setId(li.getId());
			userInfoService.add(userInfo);
		}else{
			//如果存在,直接抛错
			throw new RuntimeException("用户名已经存在!");
		}
	}
	//检查用户名是否 存在,存在返回true
	public boolean checkName(String username) {
		return loginInfoMapper.queryCountByname(username)>0?true:false;
	}
	//登录
	public LoginInfo login(String username, String password,String ip,Boolean userType) {
		LoginInfo current=loginInfoMapper.login(username,MD5.encode(password),userType);
		//不管登录成功与否,都要记录
		IpLog ipLog = new IpLog();
		ipLog.setIp(ip);
		ipLog.setUserName(username);
		ipLog.setLoginTime(new Date());
		ipLog.setUserType(userType);
		if(current!=null){
			ipLog.setState(IpLog.STATE_SUCCESS);
			UserContext.putCurrent(current);
		}else{
			ipLog.setState(IpLog.STATE_FAILED);
		}
		ipLogMapper.insert(ipLog);
		return current;
	}
	public void initAdmin() {
		//1:先查询是否有管理员
		int count = loginInfoMapper.selectCountByUserType(LoginInfo.USER_MANAGER);
		if(count==0){
			//没有就创建一个默认的管路员
			LoginInfo admin=new LoginInfo();
			admin.setUsername(BidConst.DEFAULT_ADMIN_NAME);
			admin.setPassword(MD5.encode(BidConst.DEFAULT_ADMIN_PASSWORD));
			admin.setState(LoginInfo.STATE_NORMAL);
			admin.setUserType(LoginInfo.USER_MANAGER);
			loginInfoMapper.insert(admin);
		}
	}
	public List<HashMap<Long, String>> autocomplate(String keyword) {
		return loginInfoMapper.autocomplate(keyword);
	}

}

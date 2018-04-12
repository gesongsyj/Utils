package com.syj.java.base.service.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.syj.java.base.domain.Account;
import com.syj.java.base.mapper.AccountMapper;
import com.syj.java.base.service.IAccountService;
import com.syj.java.base.utils.UserContext;
@Service
public class AccountServiceImpl implements IAccountService {
	@Autowired
	AccountMapper accountMapper;

	public void update(Account account) {
		int ret=accountMapper.updateByPrimaryKey(account);
		if(ret==0){
			throw new RuntimeException("乐观锁失败,Account:"+account.getId());
		}
	}

}

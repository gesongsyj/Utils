package com.xmg.pps.dao.impl;

import static org.junit.Assert.*;

import org.junit.Test;
import org.junit.runner.RunWith;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.test.context.ContextConfiguration;
import org.springframework.test.context.junit4.SpringJUnit4ClassRunner;

import com.alibaba.druid.filter.config.ConfigTools;
@RunWith(SpringJUnit4ClassRunner.class)
@ContextConfiguration("classpath:applicationContext.xml")
public class EmployeeDAOImplTest {
	@Test
	public void testDruidDecode() throws Exception {
		String string = ConfigTools.encrypt("admin");
		System.out.println(string);
	}

}

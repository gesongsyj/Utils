package com.syj.java.base.utils;

import java.math.BigDecimal;

/**
 * 系统中的常量
 * @author Administrator
 *
 */
public class BidConst {
	/**
	 * 定义存储精度
	 */
	public static final int STORE_SCALE=4;
	/**
	 * 定义运算精度
	 */
	public static final int CAL_SCALE=8;//一般取存储精度的两倍
	/**
	 * 定义显示精度
	 */
	public static final int DISPLAY_SCALE=2;
	/**
	 * 定义系统级别的0
	 */
	public static final BigDecimal ZERO=new BigDecimal("0.0000");
	/**
	 * 定义初始授信额度
	 */
	public static final BigDecimal INIT_BORROW_LIMIT=new BigDecimal("5000.0000");
	/**
	 * 默认管理员的用户名和密码
	 */
	public static final String DEFAULT_ADMIN_NAME="admin";
	public static final String DEFAULT_ADMIN_PASSWORD="1111";
	/**
	 * 验证码的有效时间,单位:秒
	 */
	public static final Long VERIFYCODE_VALID_TIME=300L;
	/**
	 * 邮箱验证链接的有效期,单位:天
	 */
	public static final Long VERIFYEMAIL_VALID_TIME=5l;
	/**
	 * 最低风控认证分数
	 */
	public static final int BASE_AOTH_SCORE=30;
}

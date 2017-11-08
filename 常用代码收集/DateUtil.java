package com.syj.java.base.utils;

import java.util.Calendar;
import java.util.Date;

import org.apache.commons.lang.time.DateUtils;

public class DateUtil {
	//得到一天的最后一秒
	public static Date endOfDay(Date d) {
		return DateUtils.addSeconds(
				DateUtils.addDays(DateUtils.truncate(d, Calendar.DATE), 1), -1);
	}

	public static long getSecondsBetweenDates(Date d1, Date d2) {
		return Math.abs((d1.getTime() - d2.getTime()) / 1000);
	}
}

package com.xmg.wms.test;

import java.io.InputStream;
import java.util.Enumeration;
import java.util.HashMap;
import java.util.Map;
import java.util.Properties;

public class Utils {
	public static Map<String, String> getProperties(String fileName){
	       Properties props = new Properties();
	       Map<String, String> map=new HashMap<String, String>();
	       try {
	    	   ClassLoader loader = Thread.currentThread().getContextClassLoader();
	    	   InputStream in = loader.getResourceAsStream(fileName);
	    	   props.load(in);
	    	   Enumeration en=props.propertyNames();
	    	   while (en.hasMoreElements()) {
		            String key=(String) en.nextElement();
		            String property=props.getProperty(key);
		            map.put(key, property);
	        }
	    } catch (Exception e) {
	    	e.printStackTrace();
	    }
	       return map;
	   }
}

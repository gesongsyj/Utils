package com.xmg.wms.test;

import java.io.File;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;

import org.w3c.dom.Document;
import org.w3c.dom.NodeList;

import com.xmg.wms.domain.DemoInterface;
import com.xmg.wms.domain.Employee;

public class demo {
	public static void main(String[] args) throws Exception {
		DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
		DocumentBuilder builder = factory.newDocumentBuilder();
		File  f=new File("F:/JAVA/MavenApps/wms/src/main/resources/data.xml");
		Document doc = builder.parse(f);
		NodeList list = doc.getElementsByTagName("T_STAFF");
		for (int i = 0; i < list.getLength(); i++) {
				System.out.println(doc.getElementsByTagName("S_STAFF_NAME").item(i).getTextContent());
				System.out.println(doc.getElementsByTagName("S_DEPT_NAME").item(i).getTextContent());
				System.out.println(doc.getElementsByTagName("S_SEX").item(i).getTextContent());
				System.out.println(doc.getElementsByTagName("I_AGE").item(i).getTextContent());
				System.out.println(doc.getElementsByTagName("S_ADDRESS").item(i).getTextContent());
				System.out.println(doc.getElementsByTagName("I_TEL").item(i).getTextContent());
		}
		
	}
}
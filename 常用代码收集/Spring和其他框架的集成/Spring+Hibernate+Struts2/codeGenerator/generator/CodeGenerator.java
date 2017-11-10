package com.xmg.pps.utils.generator;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.StringWriter;
import java.text.MessageFormat;

import com.xmg.pps.domain.Department;
import com.xmg.pps.domain.Employee;


import freemarker.template.Configuration;
import freemarker.template.Template;

public class CodeGenerator {
	private static Configuration configuration;
	static {
		try {
			configuration = new Configuration(Configuration.VERSION_2_3_23);
			configuration.setDirectoryForTemplateLoading(new File("templates"));
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	public static void main(String[] args) throws Exception {
		//generatorCode();
	}

	/**
	 * 生成代码
	 * 
	 * @throws Exception
	 */
	public static void generatorCode() throws Exception {
		ClassInfo classInfo = new ClassInfo(Employee.class);
		// 生成DAO
		createFile(classInfo, "IDAO.java",
				"src/main/java/{0}/dao/I{1}DAO.java");
		// 生成DAOImpl
		createFile(classInfo, "DAOImpl.java",
				"src/main/java/{0}/dao/impl/{1}DAOImpl.java");
		/*		// 生成Service
		createFile(classInfo, "IService.java",
				"src/main/java/{0}/service/I{1}Service.java");
		// 生成ServiceImpl
		createFile(classInfo, "ServiceImpl.java",
				"src/main/java/{0}/service/impl/{1}ServiceImpl.java");
		// 生成Action
		createFile(classInfo, "Action.java",
				"src/main/java/{0}/web/action/{1}Action.java");
		// 生成对应的QueryObject对象
		createFile(classInfo, "ObjQueryObject.java",
				"src/main/java/{0}/query/{1}QueryObject.java");
		// 生成domain对应的hbm.xml文件
		createFile(classInfo, "obj.hbm.xml",
				"src/main/java/{0}/domain/{2}.hbm.xml");
		// 添加dao的bean
		appendFile(classInfo, "application-dao.xml",
				"src/main/resources/applicationContext-daos.xml");
		// 添加service的bean
		appendFile(classInfo, "application-service.xml",
				"src/main/resources/applicationContext-services.xml");
		// 添加action的bean
		appendFile(classInfo, "application-action.xml",
				"src/main/resources/applicationContext-actions.xml");*/
		System.out.println("生成完毕");
	}

	/**
	 * 往现有文件中添加内容
	 * 
	 * @param classInfo
	 * @param templateName
	 * @param targetFile
	 * @throws Exception
	 */
	public static void appendFile(ClassInfo classInfo, String templateName,
			String targetFile) throws Exception {
		Template template = configuration.getTemplate(templateName);
		StringWriter out = new StringWriter();
		template.process(classInfo, out);
		String appendingXml = out.toString();
		XmlUtil.mergeXML(new File(targetFile), appendingXml);
	}

	/**
	 * 生成文件
	 * 
	 * @param classInfo
	 *            要生成代码的domain对象的class
	 * @param templateName
	 *            使用的模板名称
	 * @param fileName
	 *            生成文件的全路径名
	 * @throws Exception
	 */
	public static void createFile(ClassInfo classInfo, String templateName,
			String fileName) throws Exception {
		// 获取模板对象
		Template template = configuration.getTemplate(templateName);
		// 设置{0},{1},{2}的值
		fileName = MessageFormat.format(fileName, classInfo.getBasePkg()
				.replace(".", "/"), classInfo.getClassName(),classInfo.getObjName());
		File file = new File(fileName);
		if (!file.getParentFile().exists()) {
			file.getParentFile().mkdirs();
		}
		// 合并模板和数据
		template.process(classInfo, new FileWriter(file));
	}

}

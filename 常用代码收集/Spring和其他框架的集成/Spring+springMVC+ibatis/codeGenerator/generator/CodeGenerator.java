package com.syj.java.base.utils.generator;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.StringWriter;
import java.text.MessageFormat;

import com.syj.java.base.domain.Account;
import com.syj.java.base.domain.UserFile;
import com.syj.java.base.domain.VideoAuth;

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
	 * @throws Exception
	 */
	public static void generatorCode() throws Exception {
		ClassInfo classInfo = new ClassInfo(UserFile.class);
		//生成Service
		createFile(classInfo, "IService.java",
				"src/main/java/{0}/service/I{1}Service.java");
		//生成ServiceImpl
		createFile(classInfo, "ServiceImpl.java",
				"src/main/java/{0}/service/impl/{1}ServiceImpl.java");
		//生成对应的QueryObject对象
		createFile(classInfo, "ObjQueryObject.java",
				"src/main/java/{0}/query/{1}QueryObject.java");
		//appendFile(classInfo, "application-dao.xml","src/main/java/{0}/mapper/application.xml");
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
	public static void appendFile(ClassInfo classInfo, String templateName,String targetFile) throws Exception {
		Template template = configuration.getTemplate(templateName);
		// 设置{0}和{1}的值
		targetFile = MessageFormat.format(targetFile, classInfo.getBasePkg()
				.replace(".", "/"), classInfo.getClassName());
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
	public static void createFile(ClassInfo classInfo, String templateName,String fileName) throws Exception {
		//获取模板对象
		Template template = configuration.getTemplate(templateName);
		// 设置{0}和{1}的值
		fileName = MessageFormat.format(fileName, classInfo.getBasePkg()
				.replace(".", "/"), classInfo.getClassName());
		File file = new File(fileName);
		if (!file.getParentFile().exists()) {
			file.getParentFile().mkdirs();
		}
		//合并模板和数据
		template.process(classInfo, new FileWriter(file));
	}

}

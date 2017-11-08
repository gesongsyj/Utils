package com.xmg.web.base.controller;

import javax.servlet.ServletContext;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.multipart.MultipartFile;

import com.syj.java.base.domain.LoginInfo;
import com.syj.java.base.domain.RealAuth;
import com.syj.java.base.domain.UserInfo;
import com.syj.java.base.service.IRealAuthService;
import com.syj.java.base.service.IUserInfoService;
import com.syj.java.base.utils.JsonResult;
import com.syj.java.base.utils.UploadUtil;
import com.syj.java.base.utils.UserContext;
import com.xmg.web.utils.annotation.ReqireLogin;

/**
 * 实名认证控制
 * @author Administrator
 *
 */
@Controller
public class RealAuthController {
	@Autowired
	private ServletContext servletContext;
	

	@RequestMapping("realAuthUpload")
	@ResponseBody
	public String uploadIDCard(MultipartFile file,Model model){
		String basePath = servletContext.getRealPath("/upload");
		String fileName = UploadUtil.upload(file, basePath);
		return "http://localhost:8080/upload/"+fileName;
	}
}

package ${basePkg}.web.action;

import java.util.List;

import lombok.Setter;


import com.opensymphony.xwork2.ActionSupport;
import ${basePkg}.service.I${className}Service;
public class ${className}Action extends ActionSupport{
	@Setter
	private I${className}Service ${objName}Service;

	public String excute(){
		return null;
	}
	
}
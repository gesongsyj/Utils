package ${basePkg}.web.action;


import com.xmg.pps.domain.${className};
import com.xmg.pps.query.${className}QueryObject;

import lombok.Getter;
import lombok.Setter;

import ${basePkg}.service.I${className}Service;

public class ${className}Action extends BaseAction{
	@Setter
	private I${className}Service ${objName}Service;
	@Getter
	private ${className} ${objName}=new ${className}();
	@Getter
	private ${className}QueryObject qo=new ${className}QueryObject();
	
	public String excute(){
		return null;
	}
	//只会在saveOrUpdate之前执行
	public void prepareSaveOrUpdate() throws Exception {
		if(${objName}.getId()!=null){
			${objName}=${objName}Service.get(${objName}.getId());
			//${objName}.setDept(null);如果有关联关系的对象,需要设置为null打破关系
		}
	}

}
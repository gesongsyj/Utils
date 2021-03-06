package ${basePkg}.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import ${basePkg}.mapper.${className}Mapper;
import ${basePkg}.query.${className}QueryObject;
import ${basePkg}.query.PageResult;
import ${basePkg}.service.I${className}Service;
@Service
public class ${className}ServiceImpl implements I${className}Service {

	@Autowired
	private ${className}Mapper ${objName}Mapper;
	public PageResult query(${className}QueryObject qo) {
		int count=${objName}Mapper.queryForCount(qo);
		if(count>0){
			List listData=${objName}Mapper.query(qo);
			return new PageResult(listData, count, qo.getCurrentPage(), qo.getPageSize());
		}
		return PageResult.emmty(qo.getPageSize());
	}

}

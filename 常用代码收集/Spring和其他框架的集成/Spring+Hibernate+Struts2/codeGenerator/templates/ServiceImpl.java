package ${basePkg}.service.impl;

import java.util.List;

import lombok.Setter;

import ${basePkg}.dao.I${className}DAO;
import ${basePkg}.domain.${className};
import ${basePkg}.query.${className}QueryObject;
import ${basePkg}.query.PageResult;
import ${basePkg}.service.I${className}Service;
public class ${className}ServiceImpl implements I${className}Service {

	@Setter
	private I${className}DAO ${objName}DAO;
	
	public void save(${className} ${objName}) {
		${objName}DAO.save(${objName});
	}
	public void update(${className} ${objName}) {
		${objName}DAO.update(${objName});
	}
	public void delete(Long id) {
		${objName}DAO.delete(id);
	}
	public ${className} get(Long id) {
		return ${objName}DAO.get(id);
	}
	public List listAll() {
		return ${objName}DAO.listAll();
	}
	
	public PageResult query(${className}QueryObject qo) {
		int count=${objName}DAO.queryForCount(qo);
		if(count>0){
			List listData=${objName}DAO.query(qo);
			return new PageResult(listData, count, qo.getCurrentPage(), qo.getPageSize());
		}
		return PageResult.emmty(qo.getPageSize());
	}

}

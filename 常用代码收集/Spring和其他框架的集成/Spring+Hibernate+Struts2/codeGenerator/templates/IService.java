package ${basePkg}.service;

import java.util.List;

import ${basePkg}.domain.${className};
import ${basePkg}.query.${className}QueryObject;
import ${basePkg}.query.PageResult;

public interface I${className}Service {
	void save(${className} ${objName});
	void update(${className} ${objName});
	void delete(Long id);
	${className} get(Long id);
	List listAll();
	
	/**
	 * 高级查询加分页
	 * @param qo
	 * @return
	 */
	PageResult query(${className}QueryObject qo);

}

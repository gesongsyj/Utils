package ${basePkg}.service;

import ${basePkg}.query.${className}QueryObject;
import ${basePkg}.query.PageResult;

public interface I${className}Service {
	/**
	 * 高级查询加分页
	 * @param qo
	 * @return
	 */
	PageResult query(${className}QueryObject qo);
}

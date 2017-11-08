package ${basePkg}.dao;

import java.util.List;

import ${basePkg}.query.${className}QueryObject;

public interface I${className}DAO {

	int queryForCount(${className}QueryObject qo);

	List query(${className}QueryObject qo);

}

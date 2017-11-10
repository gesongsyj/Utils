package ${basePkg}.dao;

import java.util.List;

import com.xmg.pps.domain.${className};

import ${basePkg}.query.${className}QueryObject;

public interface I${className}DAO {
	void save(${className} ${objName});
	void update(${className} ${objName});
	void delete(${className} ${objName});
	${className} get(Long id);
	List<${className}> listAll();
	
	int queryForCount(${className}QueryObject qo);

	List query(${className}QueryObject qo);

}

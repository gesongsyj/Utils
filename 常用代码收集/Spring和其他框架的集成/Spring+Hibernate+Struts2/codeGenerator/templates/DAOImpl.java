package ${basePkg}.dao.impl;

import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;

import ${basePkg}.dao.I${className}DAO;
import ${basePkg}.query.${className}QueryObject;

public class ${className}DAOImpl implements I${className}DAO {
	@Autowired
	private SessionFactory sessionFactory;
	
	public int queryForCount(${className}QueryObject qo) {
		return 0;
	}

	public List query(${className}QueryObject qo) {
		return null;
	}

}

package ${basePkg}.dao.impl;

import java.util.List;

import lombok.Setter;

import org.hibernate.Session;
import org.hibernate.SessionFactory;

import ${basePkg}.dao.I${className}DAO;
import ${basePkg}.domain.${className};
import ${basePkg}.query.${className}QueryObject;
public class ${className}DAOImpl implements I${className}DAO {

	@Setter
	private SessionFactory sessionFactory;
	
	public void save(${className} ${objName}) {
		Session session=sessionFactory.getCurrentSession();
		session.save(${objName});
	}
	
	public void update(${className} ${objName}) {
		Session session=sessionFactory.getCurrentSession();
		session.update(${objName});
	}
	
	public void delete(${className} ${objName}) {
		Session session=sessionFactory.getCurrentSession();
		session.delete(${objName});
	}
	
	public ${className} get(Long id) {
		Session session=sessionFactory.getCurrentSession();
		return (${className}) session.get(${className}.class, id);
	}
	
	public List<${className}> listAll() {
		Session session=sessionFactory.getCurrentSession();
		String hql="select ${firstChar} from ${className} ${firstChar}";
		return session.createQuery(hql).list();
	}
	public int queryForCount(${className}QueryObject qo) {
		return 0;
	}

	public List query(${className}QueryObject qo) {
		return null;
	}


}

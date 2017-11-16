package com.xmg.pps.dao.impl;

import java.lang.reflect.ParameterizedType;
import java.util.List;

import lombok.Setter;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;

import com.xmg.pps.dao.IGenericDAO;
import com.xmg.pps.query.QueryObject;

public class GenericDAOImpl<T> implements IGenericDAO<T> {
	@Setter
	protected SessionFactory sessionFactory;
	private Class<T> targetType;

	public GenericDAOImpl() {
		// 得到带泛型父类类型
		ParameterizedType pType = (ParameterizedType) this.getClass()
				.getGenericSuperclass();
		// 得到泛型参数类型
		targetType = (Class<T>) pType.getActualTypeArguments()[0];
	}

	public void save(T obj) {
		Session session = sessionFactory.getCurrentSession();
		session.save(obj);
	}

	public void update(T obj) {
		Session session = sessionFactory.getCurrentSession();
		session.update(obj);
	}

	public void delete(Long id) {
		Session session = sessionFactory.getCurrentSession();
		Object obj = session.get(targetType, id);
		session.delete(obj);
	}

	public T get(Long id) {
		Session session = sessionFactory.getCurrentSession();
		return (T) session.get(targetType, id);
	}

	public List<T> listAll() {
		Session session = sessionFactory.getCurrentSession();
		return session.createCriteria(targetType).list();
	}

	public int queryForCount(QueryObject qo) {
		Session session = sessionFactory.getCurrentSession();
		// 查询结果总数
		StringBuilder sb = new StringBuilder(80);
		sb.append("select count(obj) from ").append(targetType.getSimpleName())
				.append(" obj").append(qo.getQuery());
		Query query = session.createQuery(sb.toString());
		// 设置占位符参数
		setParams(qo, query);
		int totalCount = ((Long) query.uniqueResult()).intValue();
		return totalCount;
	}

	public List<T> query(QueryObject qo) {
		Session session = sessionFactory.getCurrentSession();
		// 查询结果集
		StringBuilder sb = new StringBuilder(80);
		sb.append("select obj from ").append(targetType.getSimpleName())
				.append(" obj").append(qo.getQuery());
		Query query = session.createQuery(sb.toString());
		// 设置占位符参数
		setParams(qo, query);
		// 分页
		if (qo.getCurrentPage() > 0 && qo.getPageSize() > 0) {
			query.setFirstResult(qo.getStart());
			query.setMaxResults(qo.getPageSize());
		}
		List<T> listData = query.list();
		return listData;
	}

	// 直接传入查询条件
	public List<T> queryForList(int currentPage, int pageSize,
			String condition, Object... params) {
		Session session = sessionFactory.getCurrentSession();
		StringBuilder hql = new StringBuilder(80);
		hql.append("select obj from ").append(targetType.getSimpleName())
				.append(" obj");
		if (params.length > 0) {
			hql.append(" where ").append(condition);
		}
		Query query = session.createQuery(hql.toString());
		// 设置占位符参数
		for (int i = 0; i < params.length; i++) {
			query.setParameter(i, params[i]);
		}
		// 设置分页
		if (currentPage > 0 && pageSize > 0) {
			query.setFirstResult((currentPage - 1) * pageSize);
			query.setMaxResults(pageSize);
		}
		return query.list();
	}

	// 重载方法,不需要分页
	public List<T> queryForList(String condition, Object... params) {
		return queryForList(-1, -1, condition, params);
	}
	//直接传条件,查询单个对象
	public T queryForObjest(String condition,Object...params){
		List<T> list=queryForList(condition,params);
		return list.size()==1?list.get(0):null;
	}
	// 设置占位符参数
	public void setParams(QueryObject qo, Query query) {
		// 设置占位符参数
		for (int i = 0; i < qo.getParams().size(); i++) {
			query.setParameter(i, qo.getParams().get(i));
		}
	}

}

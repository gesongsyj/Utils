package com.xmg.pps.dao;

import java.util.List;

import com.xmg.pps.query.QueryObject;


public interface IGenericDAO<T> {
	void save(T obj);
	void update(T obj);
	void delete(Long id);
	T get(Long id);
	List<T> listAll();
	
	/**
	 * 高级查询加分页
	 * @param qo
	 * @return
	 */
	int queryForCount(QueryObject qo);
	List<T> query(QueryObject qo);
	/**
	 * 批量删除
	 * @param ids
	 */
	void batchDelete(List<Long> ids);
}

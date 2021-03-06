package com.advertisement.system.model.base;

import java.util.List;

import com.advertisement.system.model.District;
import com.jfinal.plugin.activerecord.IBean;

/**
 * Generated by JFinal, do not modify this file.
 */
@SuppressWarnings({"serial", "unchecked"})
public abstract class BaseAdvertisements<T extends BaseAdvertisements> extends SuperModel<T> implements IBean {

	/**
	 * 乐观锁
	 * 复写save方法,设置初始版本号为0
	 */
	@Override
	public boolean save() {
		this.set("version", 0);
		return super.save();
	}

	/**
	 * 乐观锁
	 * 复写update方法,将表单和数据库中的version作比较,如果不一致,抛出异常,如果一致,版本号+1,更新数据
	 */
	@Override
	public boolean update() {
		BaseAdvertisements<T> m = this.findFirst("select * from advertisements where id = ?", this.getId());
		if(m.getVersion()!=this.getVersion()){
			throw new RuntimeException("数据库数据已修改,请重新编辑!");
		}
		this.setVersion(m.getVersion()+1);
		return super.update();
	}
	
	public T setId(java.lang.Integer id) {
		set("id", id);
		return (T)this;
	}
	
	public java.lang.Integer getId() {
		return getInt("id");
	}

	public T setName(java.lang.String name) {
		set("name", name);
		return (T)this;
	}
	
	public java.lang.String getName() {
		return getStr("name");
	}

	public T setStartDate(java.util.Date startDate) {
		set("startDate", startDate);
		return (T)this;
	}
	
	public java.util.Date getStartDate() {
		return get("startDate");
	}

	public T setEndDate(java.util.Date endDate) {
		set("endDate", endDate);
		return (T)this;
	}
	
	public java.util.Date getEndDate() {
		return get("endDate");
	}

	public T setUrl(java.lang.String url) {
		set("url", url);
		return (T)this;
	}
	
	public java.lang.String getUrl() {
		return getStr("url");
	}

	public T setRemarks(java.lang.String remarks) {
		set("remarks", remarks);
		return (T)this;
	}
	
	public java.lang.String getRemarks() {
		return getStr("remarks");
	}

	public T setTime(java.lang.String time) {
		set("time", time);
		return (T)this;
	}
	
	public java.lang.String getTime() {
		return getStr("time");
	}

	public T setFlag(java.lang.String flag) {
		set("flag", flag);
		return (T)this;
	}
	
	public java.lang.String getFlag() {
		return getStr("flag");
	}

	public T setType(java.lang.String type) {
		set("type", type);
		return (T)this;
	}
	
	public java.lang.String getType() {
		return getStr("type");
	}

	public T setPlayBitState(java.lang.Integer playBitState) {
		set("playBitState", playBitState);
		return (T)this;
	}
	
	public java.lang.Integer getPlayBitState() {
		return getInt("playBitState");
	}

	public T setCode(java.lang.String code) {
		set("code", code);
		return (T)this;
	}
	
	public java.lang.String getCode() {
		return getStr("code");
	}

	public T setAdvertiserId(java.lang.Integer advertiserId) {
		set("advertiserId", advertiserId);
		return (T)this;
	}
	
	public java.lang.Integer getAdvertiserId() {
		return getInt("advertiserId");
	}

	public T setUploadTime(java.util.Date uploadTime) {
		set("uploadTime", uploadTime);
		return (T)this;
	}
	
	public java.util.Date getUploadTime() {
		return get("uploadTime");
	}

	public T setAuthTime(java.util.Date authTime) {
		set("authTime", authTime);
		return (T)this;
	}
	
	public java.util.Date getAuthTime() {
		return get("authTime");
	}

	public T setAuthorId(java.lang.Integer authorId) {
		set("authorId", authorId);
		return (T)this;
	}
	
	public java.lang.Integer getAuthorId() {
		return getInt("authorId");
	}
	
	public T setVersion(java.lang.Integer version) {
		set("version", version);
		return (T)this;
	}
	
	public java.lang.Integer getVersion() {
		return getInt("version");
	}

	public List<District> getDistricts(){
		List<District> districts = District.dao.getByAdId(getId());
		return districts;
	}
}

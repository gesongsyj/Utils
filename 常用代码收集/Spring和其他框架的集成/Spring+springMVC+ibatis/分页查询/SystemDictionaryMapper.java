package com.syj.java.base.mapper;

import com.syj.java.base.domain.SystemDictionary;
import com.syj.java.base.query.SystemDictionaryQueryObject;

import java.util.List;

public interface SystemDictionaryMapper {

    /**
     * 高级查询加分页操作
     */
    int queryForCount(XxxQueryObject qo);
    List query(XxxQueryObject qo);
}
package ${basePkg}.query;

import lombok.Getter;
import lombok.Setter;

public class ${className}QueryObject extends QueryObject {
	@Setter
	@Getter
	private String keyword;//查询名称或者邮箱关键字
	@Setter
	@Getter
	private Long deptId = -1L;//查询所在部门的id
	//定制查询条件
	public void customizedQuery() {
		if (hasLength(keyword)) {
			String key = "%" + keyword + "%";
			addQuery("(obj.name like ? or obj.email like ?)",key,key);
		}
		if (deptId > 0) {
			addQuery("obj.dept.id=?",deptId);
		}
	}
}

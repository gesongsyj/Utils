package ${basePkg}.query;

import java.util.Date;

import org.springframework.format.annotation.DateTimeFormat;
import org.springframework.util.StringUtils;

import ${basePkg}.utils.generator.DateUtil;

import lombok.Getter;
import lombok.Setter;

@Setter@Getter
public class ${className}QueryObject extends QueryObject{
	private String keyword;
	
	public static final int STATE_APPLYING = 0;
	public static final int STATE_AUDIT = 1;
	public static final int STATE_REJECT = 2;

	private int state = -1;
	private Date beginDate;
	private Date endDate;
	// 对时间的处理
	@DateTimeFormat(pattern = "yyyy-MM-dd")
	public void setBeginDate(Date beginDate) {
		this.beginDate = beginDate;
	}
	@DateTimeFormat(pattern = "yyyy-MM-dd")
	public void setEndDate(Date endDate) {
		this.endDate = endDate;
	}
	// 结束时间应该是该日期的最后一秒钟
	public Date getEndDate() {
		return endDate == null ? null : DateUtil.endOfDay(endDate);
	}
	//对前台传过来的字符串做处理,如果是空字符串,设置为null
	public String getKeyword(){
		return StringUtils.hasLength(keyword)?keyword:null;
	}
}

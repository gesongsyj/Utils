<form method="post">
	<table class="dv-table" style="width:100%;border:1px solid #ccc;padding:5px;margin-top:5px;">
		<tr>
			<td>First Name</td>
			<td><input name="firstname" class="easyui-validatebox" required="true"></input></td>
			<td>Last Name</td>
			<td><input name="lastname" class="easyui-validatebox" required="true"></input></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input name="phone"></input></td>
			<td>Email</td>
			<td><input name="email" class="easyui-validatebox" validType="email"></input></td>
		</tr>
	</table>
	<div style="padding:5px 0;text-align:right;padding-right:30px">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="saveItem(7)">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="cancelItem(7)">Cancel</a>
	</div>
</form>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Build CRUD Application with jQuery EasyUI - jQuery EasyUI</title>
        <link rel="stylesheet" href="/css/main.css" type="text/css" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<div id="header">
						<div id="header-inner">
				<table cellpadding="0" cellspacing="0" style="width:100%;">
					<tr>
						<td rowspan="2" style="width:20px;">
						</td>
						<td style="height:52px;">
							<div style="color:#fff;font-size:22px;font-weight:bold;">
								<a href="/index.php" style="color:#fff;font-size:22px;font-weight:bold;text-decoration:none">jQuery EasyUI</a>
							</div>
							<div style="color:#fff">
								<a href="/index.php" style="color:#fff;text-decoration:none">easyui helps you build your web pages easily!</a>
							</div>
						</td>
						<td style="padding-right:5px;text-align:right;vertical-align:bottom;">
							<div id="topmenu">
								<a href="/index.php">Home</a>
								<a href="/demo/main/index.php">Demo</a>
								<a href="/tutorial/index.php">Tutorial</a>
								<a href="/documentation/index.php">Documentation</a>
								<a href="/download/index.php">Download</a>
								<a href="/extension/index.php">Extension</a>
								<a href="/contact.php">Contact</a>
								<a href="/forum/index.php">Forum</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
			
		</div>
		<div id="mainwrap">
			<div id="content">

<h3>Build CRUD Application with jQuery EasyUI</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Build CRUD Application with jQuery EasyUI
</p>

<p>
It has become a common necessily for web application to collect data and manage it properly.
CRUD allows us to generate pages to list and edit database records.
This tutorial will show you how to implement a CRUD DataGrid using jQuery EasyUI framework.
</p>
<p>We will use following plugins:</p>
<ul>
	<li>datagrid: show the user list data.</li>
	<li>dialog: create or edit a single user information.</li>
	<li>form: used to submit form data.</li>
	<li>messager: to show some operation messages.</li>
</ul>

<h4>Step 1: Prepare database</h4>
<p>We will use MySql database to store user information. Create database and 'users' table.</p>
<img src="crud/images/db.png"/>

<h4>Step 2: Create DataGrid to display user information</h4>
<p>Create the DataGrid with no javascript code.</p>
<textarea name="code" class="html">
<table id="dg" title="My Users" class="easyui-datagrid" style="width:550px;height:250px"
		url="get_users.php"
		toolbar="#toolbar"
		rownumbers="true" fitColumns="true" singleSelect="true">
	<thead>
		<tr>
			<th field="firstname" width="50">First Name</th>
			<th field="lastname" width="50">Last Name</th>
			<th field="phone" width="50">Phone</th>
			<th field="email" width="50">Email</th>
		</tr>
	</thead>
</table>
<div id="toolbar">
	<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
</div>
</textarea>
<p>We don't need to write any javascript code and we can show the user list as following image:</p>
<img src="crud/images/list.png"/>

<p>The DataGrid use the 'url' property that is assigned to 'get_users.php' to retrieve data from server.</p>
<p>Code of get_users.php file</p>
<textarea name="code" class="html">
$rs = mysql_query('select * from users');
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);
</textarea>

<h4>Step 3: Create form dialog</h4>
<p>To create or edit a user, we use the same dialog.</p>
<textarea name="code" class="html">
<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
		closed="true" buttons="#dlg-buttons">
	<div class="ftitle">User Information</div>
	<form id="fm" method="post">
		<div class="fitem">
			<label>First Name:</label>
			<input name="firstname" class="easyui-validatebox" required="true">
		</div>
		<div class="fitem">
			<label>Last Name:</label>
			<input name="lastname" class="easyui-validatebox" required="true">
		</div>
		<div class="fitem">
			<label>Phone:</label>
			<input name="phone">
		</div>
		<div class="fitem">
			<label>Email:</label>
			<input name="email" class="easyui-validatebox" validType="email">
		</div>
	</form>
</div>
<div id="dlg-buttons">
	<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Save</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
</div>
</textarea>
<p>The dialog is created with no javascript code also.</p>
<img src="crud/images/dialog.png"/>

<h4>Step 4: Implement creating and editing a user</h4>
<p>When create a user, we open the dialog and clear form data.</p>
<textarea name="code" class="js">
function newUser(){
	$('#dlg').dialog('open').dialog('setTitle','New User');
	$('#fm').form('clear');
	url = 'save_user.php';
}
</textarea>

<p>When edit a user, we open the dialog and load form data from the selected datagrid row.</p>
<textarea name="code" class="js">
var row = $('#dg').datagrid('getSelected');
if (row){
	$('#dlg').dialog('open').dialog('setTitle','Edit User');
	$('#fm').form('load',row);
	url = 'update_user.php?id='+row.id;
}
</textarea>

<p>The 'url' stores the URL address where the form will post to when save the user data.</p>

<h4>Step 5: Save the user data</h4>
<p>To save the user data we use the following code:</p>
<textarea name="code" class="js">
function saveUser(){
	$('#fm').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},
		success: function(result){
			var result = eval('('+result+')');
			if (result.errorMsg){
				$.messager.show({
					title: 'Error',
					msg: result.errorMsg
				});
			} else {
				$('#dlg').dialog('close');		// close the dialog
				$('#dg').datagrid('reload');	// reload the user data
			}
		}
	});
}
</textarea>
<p>
Before submit the form, the 'onSubmit' function will be called, in which we can validate the form field value.
When the form field values are submited successfully, close the dialog and reload the datagrid data.
</p>

<h4>Step 6: Remove a user</h4>
<p>To remove a user, we use the following code:</p>
<textarea name="code" class="js">
function destroyUser(){
	var row = $('#dg').datagrid('getSelected');
	if (row){
		$.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
			if (r){
				$.post('destroy_user.php',{id:row.id},function(result){
					if (result.success){
						$('#dg').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}
</textarea>
<img src="crud/images/confirm.png"/>
<p>
Before remove a row, we will display a confirm dialog to let user to determine whether to really remove the row data.
When remove data successfully, call 'reload' method to refresh the datagrid data.
</p>

<h4>Step 7: Run the Code</h4>
<p>Run the code in your browser with MySQL started.</p>
<p>So, you now know the basics of CRUD in jQuery EasyUI framework. Press below link to start the demo application.</p>
<div>
	<a href="crud/index.html" target="_blank">View Demo</a>
</div>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="crud/downloads/easyui-crud-demo.zip">easyui-crud-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
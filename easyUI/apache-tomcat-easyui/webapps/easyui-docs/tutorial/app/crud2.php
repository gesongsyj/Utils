<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Build CRUD DataGrid with jQuery EasyUI - jQuery EasyUI</title>
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

<h3>Build CRUD DataGrid with jQuery EasyUI</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Build CRUD DataGrid with jQuery EasyUI
</p>

<p>
In the previous <a href="crud.php">tutorial</a> we create a crud application that using dialog component to create or edit user information.
This tutorial will show you how to create a crud datagrid. 
We will use <a href="../../extension/edatagrid.php">the editable datagrid plugin</a> to make these crud actions work.
</p>

<img src="crud2/images/crud.png"/>
<div>
	<a href="crud2/index.html" target="_blank">View Demo</a>
</div>

<h4>Step 1: Define DataGrid in HTML tag</h4>
<textarea name="code" class="html">
<table id="dg" title="My Users" style="width:550px;height:250px"
		toolbar="#toolbar" idField="id"
		rownumbers="true" fitColumns="true" singleSelect="true">
	<thead>
		<tr>
			<th field="firstname" width="50" editor="{type:'validatebox',options:{required:true}}">First Name</th>
			<th field="lastname" width="50" editor="{type:'validatebox',options:{required:true}}">Last Name</th>
			<th field="phone" width="50" editor="text">Phone</th>
			<th field="email" width="50" editor="{type:'validatebox',options:{validType:'email'}}">Email</th>
		</tr>
	</thead>
</table>
<div id="toolbar">
	<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
</div>
</textarea>

<h4>Step 2: Make an editable DataGrid</h4>
<textarea name="code" class="js">
$('#dg').edatagrid({
	url: 'get_users.php',
	saveUrl: 'save_user.php',
	updateUrl: 'update_user.php',
	destroyUrl: 'destroy_user.php'
});
</textarea>

<p>
We should provide the 'url','saveUrl','updateUrl' and 'destroyUrl' properties for editable datagrid:
</p>
<ul>
	<li>url: to retrieve user data from server.</li>
	<li>saveUrl: to save a new user data.</li>
	<li>updateUrl: to update an exists user data.</li>
	<li>destroyUrl: to destroy an exists user data.</li>
</ul>

<h4>Step 3: Write server processing code</h4>
<p>Save a new user(save_user.php):</p>
<textarea name="code" class="js">
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql = "insert into users(firstname,lastname,phone,email) values('$firstname','$lastname','$phone','$email')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
	'firstname' => $firstname,
	'lastname' => $lastname,
	'phone' => $phone,
	'email' => $email
));
</textarea>

<p>Update an exists user(update_user.php):</p>
<textarea name="code" class="js">
$id = intval($_REQUEST['id']);
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql="update users set firstname='$firstname',lastname='$lastname',phone='$phone',email='$email' where id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
	'firstname' => $firstname,
	'lastname' => $lastname,
	'phone' => $phone,
	'email' => $email
));
</textarea>

<p>Destroy an exists user(destroy_user.php):</p>
<textarea name="code" class="js">
$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from users where id=$id";
@mysql_query($sql);
echo json_encode(array('success'=>true));
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="crud2/downloads/easyui-crud-demo.zip">easyui-crud-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
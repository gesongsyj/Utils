<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Build CRUD Application with edit form in expanded row details - jQuery EasyUI</title>
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

<h3>Build CRUD Application with edit form in expanded row details</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Build CRUD Application with edit form in expanded row details
</p>

<p>
When switch the datagrid view to 'detailview', users can expand a row to show any details below that row.
This feature allows you to provide any possible layout for its edit form that placed in detail row panel.
In this tutorial, we are using datagrid component to reduce the space occupied by the edit form.
</p>
<img src="crud3/images/crud.png"/>
<div>
	<a href="crud3/index.html" target="_blank">View Demo</a>
</div>

<h4>Step 1: Create DataGrid in HTML tag</h4>
<textarea name="code" class="html">
<table id="dg" title="My Users" style="width:550px;height:250px"
		url="get_users.php"
		toolbar="#toolbar"
		fitColumns="true" singleSelect="true">
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
	<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newItem()">New</a>
	<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyItem()">Destroy</a>
</div>
</textarea>

<h4>Step 2: Apply Detail View for DataGrid</h4>
<textarea name="code" class="js">
$('#dg').datagrid({
	view: detailview,
	detailFormatter:function(index,row){
		return '<div class="ddv"></div>';
	},
	onExpandRow: function(index,row){
		var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
		ddv.panel({
			border:false,
			cache:true,
			href:'show_form.php?index='+index,
			onLoad:function(){
				$('#dg').datagrid('fixDetailRowHeight',index);
				$('#dg').datagrid('selectRow',index);
				$('#dg').datagrid('getRowDetail',index).find('form').form('load',row);
			}
		});
		$('#dg').datagrid('fixDetailRowHeight',index);
	}
});
</textarea>

<p>
To use the detail view for datagrid, include the 'datagrid-detailview.js' file to your page header.
</p>
<p>
We use the 'detailFormatter' function to generate the row detail content. 
In this case, we return the empty &lt;div&gt; that the edit form will be placed in.
When users click the row expand button('+'), the 'onExpandRow' event will be triggered and we can load the edit form via ajax.
Call 'getRowDetail' method to get the row detail container, so we can find the row detail panel.
Create the panel in row details and load the edit form that returned from 'show_form.php'.
</p>

<h4>Step 3: Create Edit Form</h4>
<p>The edit form is loaded from server.</p>
<div>show_form.php</div>
<textarea name="code" class="html">
<form method="post">
	<table class="dv-table" style="width:100%;background:#fafafa;padding:5px;margin-top:5px;">
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
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="saveItem(&lt;?php echo $_REQUEST['index'];?&gt;)">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="cancelItem(&lt;?php echo $_REQUEST['index'];?&gt;)">Cancel</a>
	</div>
</form>
</textarea>

<h4>Step 4: Save or Cancel editing</h4>
<p>
Call the 'saveItem' function to save a user or 'cancelItem' function to cancel the editing.
</p>
<textarea name="code" class="js">
function saveItem(index){
	var row = $('#dg').datagrid('getRows')[index];
	var url = row.isNewRecord ? 'save_user.php' : 'update_user.php?id='+row.id;
	$('#dg').datagrid('getRowDetail',index).find('form').form('submit',{
		url: url,
		onSubmit: function(){
			return $(this).form('validate');
		},
		success: function(data){
			data = eval('('+data+')');
			data.isNewRecord = false;
			$('#dg').datagrid('collapseRow',index);
			$('#dg').datagrid('updateRow',{
				index: index,
				row: data
			});
		}
	});
}
</textarea>
<p>
Determine what is the URL to post to first and then find form object and call 'submit' method to post the form data.
Collapse and update the row data while saving data successfully.
</p>
<textarea name="code" class="js">
function cancelItem(index){
	var row = $('#dg').datagrid('getRows')[index];
	if (row.isNewRecord){
		$('#dg').datagrid('deleteRow',index);
	} else {
		$('#dg').datagrid('collapseRow',index);
	}
}
</textarea>
<p>
When cancel the editing action, if the row is new and not save yet, delete the row directly, otherwise collapse the row.
</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="crud3/downloads/easyui-crud-demo.zip">easyui-crud-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
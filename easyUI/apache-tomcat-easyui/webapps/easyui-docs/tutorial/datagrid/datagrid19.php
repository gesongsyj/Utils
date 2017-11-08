<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create Complex Toolbar for DataGrid - jQuery EasyUI</title>
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

<h3>Create Complex Toolbar for DataGrid </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create Complex Toolbar for DataGrid 
</p>

<p>
The toolbar of datagrid can contains not only buttons but any other components. 
You can define the toolbar layout easily via an exists DIV tag that will become the datagrid toolbar content. 
This tutorial will show you how to create complex toolbar for datagrid component.
</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid19_1.png" />
<div>
	<a href="datagrid19_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create Toolbar</h4>
<textarea name="code" class="html">
	<div id="tb" style="padding:5px;height:auto">
		<div style="margin-bottom:5px">
			<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true"></a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true"></a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true"></a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-cut" plain="true"></a>
			<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true"></a>
		</div>
		<div>
			Date From: <input class="easyui-datebox" style="width:80px">
			To: <input class="easyui-datebox" style="width:80px">
			Language: 
			<input class="easyui-combobox" style="width:100px"
					url="data/combobox_data.json"
					valueField="id" textField="text">
			<a href="#" class="easyui-linkbutton" iconCls="icon-search">Search</a>
		</div>
	</div>
</textarea>

<h4>Create DataGrid</h4>
<textarea name="code" class="html">
	<table class="easyui-datagrid" style="width:600px;height:250px"
			url="data/datagrid_data.json" 
			title="DataGrid - Complex Toolbar" toolbar="#tb"
			singleSelect="true" fitColumns="true">
		<thead>
			<tr>
				<th field="itemid" width="60">Item ID</th>
				<th field="productid" width="80">Product ID</th>
				<th field="listprice" align="right" width="70">List Price</th>
				<th field="unitcost" align="right" width="70">Unit Cost</th>
				<th field="attr1" width="200">Address</th>
				<th field="status" width="50">Status</th>
			</tr>
		</thead>
	</table>
</textarea>

<p>As you can see, the toolbar of datagrid is similar to dialog. We don't need to write any javascript code and can create a datagrid with complex toolbar.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid19-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
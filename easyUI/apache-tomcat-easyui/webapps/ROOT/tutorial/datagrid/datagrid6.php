<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Dynamic change DataGrid columns - jQuery EasyUI</title>
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

<h3>Dynamic change DataGrid columns </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Dynamic change DataGrid columns 
</p>

<p>
The DataGrid columns can be defined using 'columns' property easily. 
If you want to dynamically change the columns, that's no problem at all. 
To change columns you can recall the datagrid method and pass a new columns property.
</p>

<h4>Create DataGrid</h4>
<textarea name="code" class="html">
	<table id="tt" title="Frozen Columns" class="easyui-datagrid" style="width:550px;height:250px"
			url="data/datagrid_data.json"
			singleSelect="true" iconCls="icon-save">
	</table>
</textarea>
<textarea name="code" class="js">
	$('#tt').datagrid({
		columns:[[
			{field:'itemid',title:'Item ID',width:80},
			{field:'productid',title:'Product ID',width:80},
			{field:'attr1',title:'Attribute',width:200},
			{field:'status',title:'Status',width:80}
		]]
	});
</textarea>
<p>Run the web page and you will see:</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid6_1.png" />
<div>
	<a href="datagrid6_demo.html" target="_blank">View Demo</a>
</div>

<p>Sometimes you want to change the columns, so you can write some code:</p>
<textarea name="code" class="js">
	$('#tt').datagrid({
		columns:[[
			{field:'itemid',title:'Item ID',width:80},
			{field:'productid',title:'Product ID',width:80},
			{field:'listprice',title:'List Price',width:80,align:'right'},
			{field:'unitcost',title:'Unit Cost',width:80,align:'right'},
			{field:'attr1',title:'Attribute',width:100},
			{field:'status',title:'Status',width:60}
		]]
	});
</textarea>
<p>Remember we have defined other properties such as url,width,height,etc. We don't need to defines them again, we define what we want to change.</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid6_2.png" />

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid6-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
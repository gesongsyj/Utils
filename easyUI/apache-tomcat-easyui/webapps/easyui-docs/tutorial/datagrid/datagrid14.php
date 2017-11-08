<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Custom sorting in DataGrid - jQuery EasyUI</title>
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

<h3>Custom sorting in DataGrid </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Custom sorting in DataGrid 
</p>

<p>If the default sort behavior is not adequate for your requirements, you can customize the datagrid's sorting behavior.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid14_1.png"/>

<p>Basically the user could define a sort function named sorter on column, the function will receive two values and the return value will be as follows:</p>
<p>valueA > valueB => return 1</p>
<p>valueA < valueB => return -1</p>

<h4>The Custom Sorting Code</h4>
<textarea name="code" class="html">
	<table id="tt"></table>
</textarea>
<textarea name="code" class="js">
	$('#tt').datagrid({
		title:'Custom Sort',
		iconCls:'icon-ok',
		width:520,
		height:250,
		singleSelect:true,
		remoteSort:false,
		columns:[[
			{field:'itemid',title:'Item ID',width:60,sortable:true},
			{field:'listprice',title:'List Price',width:70,align:'right',sortable:true},
			{field:'unitcost',title:'Unit Cost',width:70,align:'right',sortable:true},
			{field:'attr1',title:'Attribute',width:120,sortable:true},
			{field:'date',title:'Date',width:80,sortable:true,align:'center',
				sorter:function(a,b){
					a = a.split('/');
					b = b.split('/');
					if (a[2] == b[2]){
						if (a[0] == b[0]){
							return (a[1]>b[1]?1:-1);
						} else {
							return (a[0]>b[0]?1:-1);
						}
					} else {
						return (a[2]>b[2]?1:-1);
					}
				}
			},
			{field:'status',title:'Status',width:40,align:'center'}
		]]
	}).datagrid('loadData', data);
</textarea>

<p>As you can see from this code, we create a custom sorter for date column. The date format is 'dd/mm/yyyy' and can be easily sorted in year, month, day order.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/easyui-datagrid-demo14.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
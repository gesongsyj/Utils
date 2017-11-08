<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>DataGrid View - Extension - jQuery EasyUI</title>
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

<h3>DataGrid View </h3>
<p>
	<a href="/extension/index.php">Extension</a> » DataGrid View 
</p>

<h3>DataGrid DetailView</h3>
<img src="images/datagrid_detailview.png"/>

<h4>Step 1: Create an HTML Page</h4>
<textarea name="code" class="html">
	<head>
		<script type="text/javascript" src="datagrid-detailview.js"></script>
	</head>
	<body>
		<table id="tt"></table>
	</body>
</textarea>

<h4>Step 2: Create the DataGrid</h4>
<textarea name="code" class="js">
	$('#tt').datagrid({
		title:'DataGrid - DetailView',
		width:500,
		height:250,
		remoteSort:false,
		singleSelect:true,
		nowrap:false,
		fitColumns:true,
		url:'datagrid_data.json',
		columns:[[
			{field:'itemid',title:'Item ID',width:80},
			{field:'productid',title:'Product ID',width:100,sortable:true},
			{field:'listprice',title:'List Price',width:80,align:'right',sortable:true},
			{field:'unitcost',title:'Unit Cost',width:80,align:'right',sortable:true},
			{field:'attr1',title:'Attribute',width:150,sortable:true},
			{field:'status',title:'Status',width:60,align:'center'}
		]],
		view: detailview,
		detailFormatter: function(rowIndex, rowData){
			return '<table><tr>' +
					'<td rowspan=2 style="border:0"><img src="images/' + rowData.itemid + '.png" style="height:50px;"></td>' +
					'<td style="border:0">' +
					'<p>Attribute: ' + rowData.attr1 + '</p>' +
					'<p>Status: ' + rowData.status + '</p>' +
					'</td>' +
					'</tr></table>';
		}
	});
</textarea>

<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>detailFormatter</td>
<td>function(index,row)</td>
<td>The formatter function to return row detail content.</td>
<td></td>
</tr>
</table>

<h4>Events</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onExpandRow</td>
<td>index,row</td>
<td>Fires when expand a row.</td>
</tr>
<tr>
<td>onCollapseRow</td>
<td>index,row</td>
<td>Fires when collapse a row.</td>
</tr>
</table>

<h4>Methods</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>fixDetailRowHeight</td>
<td>index</td>
<td>Fix the detail row height.</td>
</tr>
<tr>
<td>getExpander</td>
<td>index</td>
<td>Get row expander object.</td>
</tr>
<tr>
<td>getRowDetail</td>
<td>index</td>
<td>Get row detail container.</td>
</tr>
<tr>
<td>expandRow</td>
<td>index</td>
<td>Expand a row.</td>
</tr>
<tr>
<td>collapseRow</td>
<td>index</td>
<td>Collapse a row.</td>
</tr>
</table>

<h3>DataGrid GroupView</h3>
<img src="images/datagrid_groupview.png"/>

<h4>Step 1: Create an HTML Page</h4>
<textarea name="code" class="html">
	<head>
		<script type="text/javascript" src="datagrid-groupview.js"></script>
	</head>
	<body>
		<table id="tt"></table>
	</body>
</textarea>

<h4>Step 2: Create the DataGrid</h4>
<textarea name="code" class="js">
	$('#tt').datagrid({
		title:'DataGrid - GroupView',
		width:500,
		height:250,
		rownumbers:true,
		remoteSort:false,
		nowrap:false,
		fitColumns:true,
		url:'datagrid_data.json',
		columns:[[
			{field:'productid',title:'Product ID',width:100,sortable:true},
			{field:'listprice',title:'List Price',width:80,align:'right',sortable:true},
			{field:'unitcost',title:'Unit Cost',width:80,align:'right',sortable:true},
			{field:'attr1',title:'Attribute',width:150,sortable:true},
			{field:'status',title:'Status',width:60,align:'center'}
		]],
		groupField:'productid',
		view: groupview,
		groupFormatter:function(value, rows){
			return value + ' - ' + rows.length + ' Item(s)';
		}
	});
</textarea>

<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>groupField</td>
<td>string</td>
<td>Indicate what field to be grouped.</td>
<td></td>
</tr>
<tr>
<td>groupFormatter</td>
<td>function(value,rows)</td>
<td>
The formatter function to return the group content.
The value parameter indicate the group value defined by 'groupField' property.
The rows parameter indicate the data rows according to the specified group value.
</td>
<td></td>
</tr>
</table>

<h4>Methods</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>expandGroup</td>
<td>groupIndex</td>
<td>Expand a group.</td>
</tr>
<tr>
<td>collapseGroup</td>
<td>groupIndex</td>
<td>Collapse a group.</td>
</tr>
</table>

<h3>DataGrid BufferView</h3>
<img src="images/datagrid-bufferview.png" />
<h4>Step 1: Include bufferview javascript file</h4>
<textarea name="code" class="html">
	<head>
		<script type="text/javascript" src="datagrid-bufferview.js"></script>
	</head>
</textarea>
<h4>Step 2: Create DataGrid</h4>
<textarea name="code" class="html">
	<table id="tt" class="easyui-datagrid" style="width:700px;height:250px"
			title="DataGrid - BufferView" 
			data-options="url:'get_data.php',view:bufferview,rownumbers:true,singleSelect:true,autoRowHeight:false,pageSize:50">
		<thead>
			<tr>
				<th field="inv" width="80">Inv No</th>
				<th field="date" width="100">Date</th>
				<th field="name" width="80">Name</th>
				<th field="amount" width="80" align="right">Amount</th>
				<th field="price" width="80" align="right">Price</th>
				<th field="cost" width="100" align="right">Cost</th>
				<th field="note" width="110">Note</th>
			</tr>
		</thead>
	</table>
</textarea>

<h3>DataGrid VirtualScrollView</h4>
<img src="images/datagrid-scrollview.png" />
<h4>Step 1: Include scrollview javascript file</h4>
<textarea name="code" class="html">
	<head>
		<script type="text/javascript" src="datagrid-scrollview.js"></script>
	</head>
</textarea>
<h4>Create DataGrid with Virtual Scroll View</h4>
<textarea name="code" class="html">
	<table id="tt" class="easyui-datagrid" style="width:700px;height:250px"
			title="DataGrid - VirtualScrollView"
			data-options="url:'get_data.php',view:scrollview,rownumbers:true,singleSelect:true,autoRowHeight:false,pageSize:50">
		<thead>
			<tr>
				<th field="inv" width="80">Inv No</th>
				<th field="date" width="100">Date</th>
				<th field="name" width="80">Name</th>
				<th field="amount" width="80" align="right">Amount</th>
				<th field="price" width="80" align="right">Price</th>
				<th field="cost" width="100" align="right">Cost</th>
				<th field="note" width="110">Note</th>
			</tr>
		</thead>
	</table>
</textarea>


<h4>Download the EasyUI Extension:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/jquery-easyui-datagridview.zip">jquery-easyui-datagridview.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
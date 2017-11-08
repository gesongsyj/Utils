<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create subgrid with master datagrid - jQuery EasyUI</title>
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

<h3>Create subgrid with master datagrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create subgrid with master datagrid
</p>

<p>
Use the detail view of datagrid, users can expand a row to show additional details.
As any content can be loaded as the row details, the subgrid can be dynamically loaded also.
This tutorial will show you how to create a subgrid with master datagrid.
</p>
<img src="images/datagrid22.png"/>
<div>
	<a href="datagrid22_demo.html" target="_blank">View Demo</a>
</div>

<h4>Step 1: Create Master DataGrid</h4>
<textarea name="code" class="html">
<table id="dg" style="width:700px;height:250px"
		url="datagrid22_getdata.php" 
		title="DataGrid - SubGrid"
		singleSelect="true" fitColumns="true">
	<thead>
		<tr>
			<th field="itemid" width="80">Item ID</th>
			<th field="productid" width="100">Product ID</th>
			<th field="listprice" align="right" width="80">List Price</th>
			<th field="unitcost" align="right" width="80">Unit Cost</th>
			<th field="attr1" width="220">Attribute</th>
			<th field="status" width="60" align="center">Status</th>
		</tr>
	</thead>
</table>
</textarea>

<h4>Step 2: Set Detail View to show subgrid</h4>
<p>To use the detail view, remember to include the view script file to your page header.</p>
<textarea name="code" class="html">
<script type="text/javascript" src="http://www.jeasyui.com/easyui/datagrid-detailview.js"></script>
</textarea>
<textarea name="code" class="js">
$('#dg').datagrid({
	view: detailview,
	detailFormatter:function(index,row){
		return '<div style="padding:2px"><table class="ddv"></table></div>';
	},
	onExpandRow: function(index,row){
		var ddv = $(this).datagrid('getRowDetail',index).find('table.ddv');
		ddv.datagrid({
			url:'datagrid22_getdetail.php?itemid='+row.itemid,
			fitColumns:true,
			singleSelect:true,
			rownumbers:true,
			loadMsg:'',
			height:'auto',
			columns:[[
				{field:'orderid',title:'Order ID',width:100},
				{field:'quantity',title:'Quantity',width:100},
				{field:'unitprice',title:'Unit Price',width:100}
			]],
			onResize:function(){
				$('#dg').datagrid('fixDetailRowHeight',index);
			},
			onLoadSuccess:function(){
				setTimeout(function(){
					$('#dg').datagrid('fixDetailRowHeight',index);
				},0);
			}
		});
		$('#dg').datagrid('fixDetailRowHeight',index);
	}
});
</textarea>
<p>
When users click expand button('+'), the 'onExpandRow' event will be triggered.
We create a new subgrid with tree columns.
Remember to call 'fixDetailRowHeight' method for master datagrid when subgrid load data successfully or resize.
</p>

<h4>Step 3: The Server Code</h4>
<div>datagrid22_getdata.php</div>
<textarea name="code" class="html">
$result = array();

include 'conn.php';

$rs = mysql_query("select * from item where itemid in (select itemid from lineitem)");

$items = array();
while($row = mysql_fetch_object($rs)){
	array_push($items, $row);
}

echo json_encode($items);
</textarea>
<div>datagrid22_getdetail.php</div>
<textarea name="code" class="html">
include 'conn.php';

$itemid = mysql_real_escape_string($_REQUEST['itemid']);

$rs = mysql_query("select * from lineitem where itemid='$itemid'");
$items = array();
while($row = mysql_fetch_object($rs)){
	array_push($items, $row);
}
echo json_encode($items);
</textarea>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid22-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
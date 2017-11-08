<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Add sorting to DataGrid - jQuery EasyUI</title>
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

<h3>Add sorting to DataGrid </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Add sorting to DataGrid 
</p>

<p>This example demostrates how to sort the DataGrid by clicking on header of a column.</p>

<img src="images/datagrid8.png"/>
<div>
	<a href="datagrid8_demo.html" target="_blank">View Demo</a>
</div>

<p>All columns in DataGrid can be sorted by clicking on header of column. You can define which column can be sorted. By default the column cannot be sorted unless you set the sortable property to true.</p>

<h4>Create DataGrid</h4>
<textarea name="code" class="html">
	<table id="tt" class="easyui-datagrid" style="width:600px;height:250px"
			url="datagrid8_getdata.php"
			title="Load Data" iconCls="icon-save"
			rownumbers="true" pagination="true">
		<thead>
			<tr>
				<th field="itemid" width="80" sortable="true">Item ID</th>
				<th field="productid" width="80" sortable="true">Product ID</th>
				<th field="listprice" width="80" align="right" sortable="true">List Price</th>
				<th field="unitcost" width="80" align="right" sortable="true">Unit Cost</th>
				<th field="attr1" width="150">Attribute</th>
				<th field="status" width="60" align="center">Stauts</th>
			</tr>
		</thead>
	</table>
</textarea>

<p>We defines some sortable columns including itemid,productid,listprice,unitcost etc. The 'attr1' column and 'status' column cannot be sorted.</p>
<p>When sorting the DataGrid will send two parameters to server:</p>
<ul>
	<li>sort: The sort column field name.</li>
	<li>order: The sort order, can be 'asc' or 'desc', default is 'asc'.</li>
</ul>

<h4>The Server Code</h4>
<textarea name="code" class="html">
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'itemid';
	$order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	include 'conn.php';
	
	$rs = mysql_query("select count(*) from item");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysql_query("select * from item order by $sort $order limit $offset,$rows");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	
	echo json_encode($result);
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid8-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
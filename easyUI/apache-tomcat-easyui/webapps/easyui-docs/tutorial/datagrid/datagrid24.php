<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Add search functionality in DataGrid - jQuery EasyUI</title>
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

<h3>Add search functionality in DataGrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Add search functionality in DataGrid 
</p>

<p>
In this tutorial we will show you how to get data from database and display them to datagrid.
And then demonstrate how to search through the results according the search terms the user enters.
</p>

<img src="images/datagrid24.png"/>
<div>
	<a href="datagrid24_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create DataGrid</h4>
<p>
Create the datagrid with paging feature and then add a toolbar to it.
</p>
<textarea name="code" class="html">
	<table id="tt" class="easyui-datagrid" style="width:600px;height:250px"
			url="datagrid24_getdata.php" toolbar="#tb"
			title="Load Data" iconCls="icon-save"
			rownumbers="true" pagination="true">
		<thead>
			<tr>
				<th field="itemid" width="80">Item ID</th>
				<th field="productid" width="80">Product ID</th>
				<th field="listprice" width="80" align="right">List Price</th>
				<th field="unitcost" width="80" align="right">Unit Cost</th>
				<th field="attr1" width="150">Attribute</th>
				<th field="status" width="60" align="center">Stauts</th>
			</tr>
		</thead>
	</table>
</textarea>
<p>The toolbar is defined as:</p>
<textarea name="code" class="html">
	<div id="tb" style="padding:3px">
		<span>Item ID:</span>
		<input id="itemid" style="line-height:26px;border:1px solid #ccc">
		<span>Product ID:</span>
		<input id="productid" style="line-height:26px;border:1px solid #ccc">
		<a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()">Search</a>
	</div>
</textarea>

<p>
When user enters search values and press search button, the 'doSearch' function will be called:
</p>
<textarea name="code" class="js">
	function doSearch(){
		$('#tt').datagrid('load',{
			itemid: $('#itemid').val(),
			productid: $('#productid').val()
		});
	}
</textarea>
<p>
The code above we call 'load' method to load new datagrid data.
We need to pass 'itemid' and 'productid' parameters to server.
</p>

<h4>The Server Code</h4>
<textarea name="code" class="js">
	include 'conn.php';
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$itemid = isset($_POST['itemid']) ? mysql_real_escape_string($_POST['itemid']) : '';
	$productid = isset($_POST['productid']) ? mysql_real_escape_string($_POST['productid']) : '';
	
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	$where = "itemid like '$itemid%' and productid like '$productid%'";
	$rs = mysql_query("select count(*) from item where " . $where);
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	
	$rs = mysql_query("select * from item where " . $where . " limit $offset,$rows");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	
	echo json_encode($result);
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid24-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
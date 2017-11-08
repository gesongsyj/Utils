<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Dynamic Loading in TreeGrid - jQuery EasyUI</title>
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

<h3>Dynamic Loading in TreeGrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Dynamic Loading in TreeGrid 
</p>
<p>
Dynamic loading in TreeGrid helps to load rows from server in parts and avoid long waits to load huge data.
This tutorial will show you how to create TreeGrid with dynamic loading feature.
</p>

<img src="images/treegrid3.png"/>
<div>
	<a href="treegrid3_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create TreeGrid</h4>
<textarea name="code" class="html">
	<table title="Products" class="easyui-treegrid" style="width:700px;height:300px"
			url="treegrid3_getdata.php"
			rownumbers="true"
			idField="id" treeField="name">
		<thead>
			<tr>
				<th field="name" width="250">Name</th>
				<th field="quantity" width="100" align="right">Quantity</th>
				<th field="price" width="150" align="right" formatter="formatDollar">Price</th>
				<th field="total" width="150" align="right" formatter="formatDollar">Total</th>
			</tr>
		</thead>
	</table>
</textarea>

<h4>The Server Code</h4>
<p>treegrid3_getdata.php</p>
<textarea name="code" class="html">
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

include 'conn.php';
$result = array();
$rs = mysql_query("select * from products where parentId=$id");
while($row = mysql_fetch_array($rs)){
	$row['state'] = has_child($row['id']) ? 'closed' : 'open';
	$row['total'] = $row['price']*$row['quantity'];
	array_push($result, $row);
}

echo json_encode($result);

function has_child($id){
	$rs = mysql_query("select count(*) from products where parentId=$id");
	$row = mysql_fetch_array($rs);
	return $row[0] > 0 ? true : false;
}
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="download/easyui-treegrid3-demo.zip">easyui-treegrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
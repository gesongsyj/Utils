<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Get selected row from DataGrid - jQuery EasyUI</title>
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

<h3>Get selected row from DataGrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Get selected row from DataGrid
</p>

<p>This example show how to get the selected row data.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid3_1.png" />
<div>
	<a href="datagrid3_demo.html" target="_blank">View Demo</a>
</div>

<p>The datagrid component contains two methods to retrieve selected row data:</p>
<ul>
	<li>getSelected: Get the first selected row data, if no row selected return null else return the record.</li>
	<li>getSelections: Get all selected row data, return array data which element is the record.</li>
</ul>

<h4>Create DataGrid</h4>
<textarea name="code" class="html">
	<table id="tt" class="easyui-datagrid" style="width:600px;height:250px"
			url="data/datagrid_data.json"
			title="Load Data" iconCls="icon-save">
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

<h4>Usage demos</h4>
<p>To get the selected row data:</p>
<textarea name="code" class="js">
	var row = $('#tt').datagrid('getSelected');
	if (row){
		alert('Item ID:'+row.itemid+"\nPrice:"+row.listprice);
	}
</textarea>

<p>To get all selected itemid:</p>
<textarea name="code" class="js">
	var ids = [];
	var rows = $('#tt').datagrid('getSelections');
	for(var i=0; i<rows.length; i++){
		ids.push(rows[i].itemid);
	}
	alert(ids.join('\n'));
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid3-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Merge DataGrid Cells - jQuery EasyUI</title>
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

<h3>Merge DataGrid Cells </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Merge DataGrid Cells 
</p>

<p>Merging serveral cells of datagrid is frequently necessary. This tutorial will show you how to merge cells in datagrid.</p>
<p>To merge your datagrid cells, simply call the 'mergeCells' method and pass merge information parameter that tells datagrid how to merge your cells. Everything in the merging cells, except for the first cell, will be hidden when the cells are merged.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid13_2.png"/>
<div>
	<a href="datagrid13_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create DataGrid</h4>
<textarea name="code" class="html">
	<table id="tt" title="Merge Cells" style="width:550px;height:250px"
			url="data/datagrid_data.json"
			singleSelect="true" iconCls="icon-save" rownumbers="true"
			idField="itemid" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="productid" width="80" formatter="formatProduct">Product ID</th>
				<th field="itemid" width="100">Item ID</th>
			</tr>
		</thead>
		<thead>
			<tr>
				<th colspan="2">Price</th>
				<th rowspan="2" field="attr1" width="150">Attribute</th>
				<th rowspan="2" field="status" width="60" align="center">Stauts</th>
			</tr>
			<tr>
				<th field="listprice" width="80" align="right">List Price</th>
				<th field="unitcost" width="80" align="right">Unit Cost</th>
			</tr>
		</thead>
	</table>
</textarea>

<h4>Merge Cells</h4>
<p>When data loaded, we merge some cells in datagrid, so put the following code in onLoadSuccess callback function.</p>
<textarea name="code" class="js">
	$('#tt').datagrid({
		onLoadSuccess:function(){
			var merges = [{
				index:2,
				rowspan:2
			},{
				index:5,
				rowspan:2
			},{
				index:7,
				rowspan:2
			}];
			for(var i=0; i<merges.length; i++)
				$('#tt').datagrid('mergeCells',{
					index:merges[i].index,
					field:'productid',
					rowspan:merges[i].rowspan
				});
		}
	});
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid13-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
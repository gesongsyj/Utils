<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Drag and Drop Rows in DataGrid - Extension - jQuery EasyUI</title>
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

<h3>Drag and Drop Rows in DataGrid</h3>
<p>
	<a href="/extension/index.php">Extension</a> » Drag and Drop Rows in DataGrid
</p>

<img src="images/datagrid_dnd.png"/>

<h4>Include 'datagrid-dnd.js' file</h4>
<textarea name="code" class="js">
<script type="text/javascript" src="datagrid-dnd.js"></script>
</textarea>

<h4>Enable Drag and Drop</h4>
<textarea name="code" class="js">
	<table class="easyui-datagrid" title="DataGrid" style="width:700px;height:250px" data-options="
				singleSelect:true,
				data:data,
				onLoadSuccess:function(){
					$(this).datagrid('enableDnd');
				}
			">
		<thead>
			<tr>
				<th data-options="field:'itemid',width:80">Item ID</th>
				<th data-options="field:'productid',width:100">Product</th>
				<th data-options="field:'listprice',width:80,align:'right'">List Price</th>
				<th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>
				<th data-options="field:'attr1',width:250">Attribute</th>
				<th data-options="field:'status',width:60,align:'center'">Status</th>
			</tr>
		</thead>
	</table>
</textarea>

<h4>Events</h4>
<p>The events extend from datagrid, below is the added events for datagrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onBeforeDrag</td>
<td>row</td>
<td>
Fires when a row's dragging starts, return false to deny drag.
</td>
</tr>
<tr>
<td>onStartDrag</td>
<td>row</td>
<td>Fires when start dragging a row.</td>
</tr>
<tr>
<td>onStopDrag</td>
<td>row</td>
<td>Fires after stop dragging a row.</td>
</tr>
<tr>
<td>onDragEnter</td>
<td>targetRow, sourceRow</td>
<td>
Fires when a row is dragged enter some target row that can be dropped to,
return false to deny drop.
</td>
</tr>
<tr>
<td>onDragOver</td>
<td>targetRow, sourceRow</td>
<td>
Fires when a row is dragged over some target row that can be dropped to,
return false to deny drop.
</td>
</tr>
<tr>
<td>onDragLeave</td>
<td>targetRow, sourceRow</td>
<td>
Fires when a row is dragged leave some target row that can be dropped to.
</td>
</tr>
<tr>
<td>onBeforeDrop</td>
<td>targetRow,sourceRow,point</td>
<td>
Fires before a row is dropped, return false to deny drop.<br />
targetRow: The row being targeted for the drop.<br />
sourceRow: the source row.<br />
point: indicate the drop operation, posible values are: 'top' or 'bottom'.
</td>
</tr>
<tr>
<td>onDrop</td>
<td>targetRow,sourceRow,point</td>
<td>
Fires when a row is dropped.<br />
targetRow: the row being targeted for the drop.<br />
sourceRow: the source row.<br />
point: indicate the drop operation, posible values are: 'top' or 'bottom'.
</td>
</tr>
</table>

<h4>Methods</h4>
<p>
The methods below extend from datagrid.
</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>enableDnd</td>
<td>index</td>
<td>
Enable dragging and dropping rows.
The 'index' parameter indicates what row to be dragged and dropped.
If this parameter is not specified, enable dragging and dropping all rows.
<p>Code example:</p>
<pre>
$('#dg').datagrid('enableDnd', 1);	// enable dragging on second row
$('#dg').datagrid('enableDnd');	// enable dragging all rows
</pre>
</td>
</tr>
</table>


<h4>Download the EasyUI Extension:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/datagrid-dnd.zip">datagrid-dnd.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
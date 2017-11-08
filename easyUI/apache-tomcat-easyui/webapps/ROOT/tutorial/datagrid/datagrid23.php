<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Enable DataGrid Inline Editing - jQuery EasyUI</title>
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

<h3>Extend editors for DataGrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Extend editors for DataGrid 
</p>

<p>
Some common editors are added into datagrid to allow users to edit data.
All the editor are defined in $.fn.datagrid.defaults.editors object that can be extended to support new editor.
This tutorial will show you how to add a new numberspinner editor into the datagrid.
</p>

<img src="images/datagrid23.png"/>
<div>
	<a href="datagrid23_demo.html" target="_blank">View Demo</a>
</div>

<h4>Extend the numberspinner editor</h4>
<textarea name="code" class="js">
	$.extend($.fn.datagrid.defaults.editors, {
		numberspinner: {
			init: function(container, options){
				var input = $('<input type="text">').appendTo(container);
				return input.numberspinner(options);
			},
			destroy: function(target){
				$(target).numberspinner('destroy');
			},
			getValue: function(target){
				return $(target).numberspinner('getValue');
			},
			setValue: function(target, value){
				$(target).numberspinner('setValue',value);
			},
			resize: function(target, width){
				$(target).numberspinner('resize',width);
			}
		}
	});
</textarea>

<h4>Create DataGrid in html markup</h4>
<textarea name="code" class="js">
	<table id="tt" style="width:600px;height:250px"
			url="data/datagrid_data.json" title="Editable DataGrid" iconCls="icon-edit"
			singleSelect="true" idField="itemid" fitColumns="true">
		<thead>
			<tr>
				<th field="itemid" width="60">Item ID</th>
				<th field="listprice" width="80" align="right" editor="{type:'numberbox',options:{precision:1}}">List Price</th>
				<th field="unitcost" width="80" align="right" editor="numberspinner">Unit Cost</th>
				<th field="attr1" width="180" editor="text">Attribute</th>
				<th field="status" width="60" align="center" editor="{type:'checkbox',options:{on:'P',off:''}}">Status</th>
				<th field="action" width="80" align="center" formatter="formatAction">Action</th>
			</tr>
		</thead>
	</table>
</textarea>

<p>
We assign the numberspinner editor to 'unit cost' field. 
When start editing a row, users can edit data with numberspinner editor component.
</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid23-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
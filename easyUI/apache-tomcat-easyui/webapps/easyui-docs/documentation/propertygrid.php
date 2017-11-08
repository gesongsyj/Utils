<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>propertygrid - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-propertygrid"]').each(function(){
					var data = $(this).val();
					data = data.replace(/(\r\n|\r|\n)/g, '\n');
					if (data.indexOf('\t') == 0){
						data = data.replace(/^\t/, '');
						data = data.replace(/\n\t/g, '\n');
					}
					data = data.replace(/\t/g, '    ');
					var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);
					pre.text(data);
					$(this).remove();
				});
				prettyPrint();
			});
		</script>
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
			

<div style="padding:10px">

<h3>PropertyGrid</h3>
<p>Extend from $.fn.datagrid.defaults. Override defaults with $.fn.propertygrid.defaults.</p>
<p>
The propertygrid provides users an interface for browsing and editing the properties of an object.
The property grid is an inline editing datagrid. It is fairly easy to use.
Users can easily create a hierarchical list of editable properties and represent any data type of item.
The property grid comes with a built-in sorting and grouping features.
</p>
<img src="images/propertygrid.png"/>

<h4>Dependencies</h4>
<ul>
	<li>datagrid</li>
</ul>

<h4>Usage</h4>
<p>
Create a propertygrid in markup.
Notice that the columns have been built-in and don't need to declare them again.
</p>
<textarea name="code-propertygrid" class="html">
<table id="pg" class="easyui-propertygrid" style="width:300px"
		data-options="url:'get_data.php',showGroup:true,scrollbarSize:0"></table>
</textarea>

<p>Create a propertygrid using javascript.</p>
<textarea name="code-propertygrid" class="html">
<table id="pg" style="width:300px"></table>
</textarea>
<textarea name="code-propertygrid" class="js">
$('#pg').propertygrid({
	url: 'get_data.php',
	showGroup: true,
	scrollbarSize: 0
});
</textarea>

<p>Append a new row to propertygrid.</p>
<textarea name="code-propertygrid" class="js">
var row = {
  name:'AddName',
  value:'',
  group:'Marketing Settings',
  editor:'text'
};
$('#pg').propertygrid('appendRow',row);
</textarea>

<h4>Row Data</h4>
<p>
The propertygrid extend from datagrid. 
It's row data format is same as datagrid.
As a property row, the following fields are required:<br/>
name: the field name.<br/>
value: the field value to be edited.<br/>
group: the group field value.<br/>
editor: the editor while editing property value.
</p>
<p>Row data example:</p>
<textarea name="code-propertygrid" class="js">
{"total":4,"rows":[
	{"name":"Name","value":"Bill Smith","group":"ID Settings","editor":"text"},
	{"name":"Address","value":"","group":"ID Settings","editor":"text"},
	{"name":"SSN","value":"123-456-7890","group":"ID Settings","editor":"text"},
	{"name":"Email","value":"bill@gmail.com","group":"Marketing Settings","editor":{
		"type":"validatebox",
		"options":{
			"validType":"email"
		}
	}}
]}
</textarea>

<h4>Properties</h4>
<p>The properties extend from datagrid, below is the added properties for propertygrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>showGroup</td>

<td>boolean</td>
<td>Defines if to show property group.</td>
<td>false</td>
</tr>
<tr>
<td>groupField</td>
<td>string</td>
<td>Defines the group field name.</td>
<td>group</td>
</tr>

<tr>
<td>groupFormatter</td>
<td>function(group,rows)</td>
<td>
Defines how to format the group value. This function takes following parameters:<br/>
group: the group field value.<br/>
rows: the rows belong to its group.
</td>
<td></td>
</tr>
</table>

<h4>Methods</h4>
<p>The methods extend from datagrid, below is the added methods for propertygrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>expandGroup</td>
<td>groupIndex</td>
<td>
Expand specified group.
If the 'groupIndex' parameter is not assigned, expand all group.
</td>
</tr>
<tr>
<td>collapseGroup</td>
<td>groupIndex</td>
<td>
Collapse specified group.
If the 'groupIndex' parameter is not assigned, collapse all group.
</td>
</tr>
</table>
</div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Editable DataGrid - Extension - jQuery EasyUI</title>
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

<h3>Editable DataGrid </h3>
<p>
	<a href="/extension/index.php">Extension</a> » Editable DataGrid 
</p>

<img src="images/datagrid_editable.png"/>

<h4>Usage Example</h4>
<h5>Create datagrid in html tag</h5>
<textarea name="code" class="html">
	<table id="tt" style="width:600px;height:200px"
			title="Editable DataGrid"
			singleSelect="true">
		<thead>
			<tr>
				<th field="itemid" width="100" editor="{type:'validatebox',options:{required:true}}">Item ID</th>
				<th field="productid" width="100" editor="text">Product ID</th>
				<th field="listprice" width="100" align="right" editor="{type:'numberbox',options:{precision:1}}">List Price</th>
				<th field="unitcost" width="100" align="right" editor="numberbox">Unit Cost</th>
				<th field="attr1" width="150" editor="text">Attribute</th>
			</tr>
		</thead>
	</table>
</textarea>

<h5>Make it editable</h5>
<textarea name="code" class="js">
	$('#tt').edatagrid({
		url: 'datagrid_data.json',
		saveUrl: ...,
		updateUrl: ...,
		destroyUrl: ...
	});
</textarea>

<p>Now you can double click the datagrid row to begin edit operation. You can also set the saveUrl,updateUrl,destroyUrl properties to automatic synchronization data from client to server.</p>

<h4>Properties</h4>
<p>The properties extend from datagrid, below is the added properties for edatagrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>destroyMsg</td>
<td>object</td>
<td>The confirm dialog message to display while destroying a row.</td>
<td>
<pre>
destroyMsg:{
	norecord:{	// when no record is selected
		title:'Warning',
		msg:'No record is selected.'
	},
	confirm:{	// when select a row
		title:'Confirm',
		msg:'Are you sure you want to delete?'
	}
}
</pre>
</td>
</tr>
<tr>
<td>url</td>
<td>string</td>
<td>A URL to retrieve data from server.</td>
<td>null</td>
</tr>
<tr>
<td>saveUrl</td>
<td>string</td>
<td>A URL to save data to server and return the added row.</td>
<td>null</td>
</tr>
<tr>
<td>updateUrl</td>
<td>string</td>
<td>A URL to update data to server and return the updated row.</td>
<td>null</td>
</tr>
<tr>
<td>destroyUrl</td>
<td>string</td>
<td>A URL to post 'id' parameter to server to destroy that row.</td>
<td>null</td>
</tr>
<tr>
<td>tree</td>
<td>selector</td>
<td>The tree selector to show the corresponding tree component.</td>
<td>null</td>
</tr>
<tr>
<td>treeUrl</td>
<td>string</td>
<td>A URL to retrieve the tree data.</td>
<td>null</td>
</tr>
<tr>
<td>treeDndUrl</td>
<td>string</td>
<td>A URL to process the drag and drop operation.</td>
<td>null</td>
</tr>
<tr>
<td>treeTextField</td>
<td>string</td>
<td>Defines the tree text field name.</td>
<td>name</td>
</tr>
<tr>
<td>treeParentField</td>
<td>string</td>
<td>Defines the tree parent node field name.</td>
<td>parentId</td>
</tr>
</table>

<h4>Events</h4>
<p>The events extend from datagrid, below is the added events for edatagrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onAdd</td>
<td>index,row</td>
<td>Fires when a new row is added.</td>
</tr>
<tr>
<td>onEdit</td>
<td>index,row</td>
<td>Fires when a row is editing.</td>
</tr>
<tr>
<td>onBeforeSave</td>
<td>index</td>
<td>Fires before a row to be saved, return false to cancel this save action.</td>
</tr>
<tr>
<td>onSave</td>
<td>index,row</td>
<td>Fires when a row is saved.</td>
</tr>
<tr>
<td>onDestroy</td>
<td>index,row</td>
<td>Fires when a row is destroy.</td>
</tr>
</table>

<h4>Methods</h4>
<p>The methods extend from datagrid, below is the added or overridden methods for edatagrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>options</td>
<td>none</td>
<td>Return the options object.</td>
</tr>
<tr>
<td>enableEditing</td>
<td>none</td>
<td>Enable the datagrid editing.</td>
</tr>
<tr>
<td>disableEditing</td>
<td>none</td>
<td>Disable the datagrid editing.</td>
</tr>
<tr>
<td>editRow</td>
<td>index</td>
<td>Edit the specified row.</td>
</tr>
<tr>
<td>addRow</td>
<td>index</td>
<td>
Add a new row to the specified row index.
If the index parameter is not specified, append the new row to the last position.
<p>Code examples:</p>
<pre>
// append an empty row
$('#dg').edatagrid('addRow');

// append an empty row as first row
$('#dg').edatagrid('addRow',0);

// insert a row with default values
$('#dg').edatagrid('addRow',{
	index: 2,
	row:{
		name:'name1',
		addr:'addr1'
	}
});
</pre>
</td>
</tr>
<tr>
<td>saveRow</td>
<td>none</td>
<td>Save the editing row that will be posted to server.</td>
</tr>
<tr>
<td>cancelRow</td>
<td>none</td>
<td>Cancel the editing row.</td>
</tr>
<tr>
<td>destroyRow</td>
<td>none</td>
<td>Destroy the current selected row.</td>
</tr>
</table>

<h4>Download the EasyUI Extension:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/jquery-easyui-edatagrid.zip">jquery-easyui-edatagrid.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
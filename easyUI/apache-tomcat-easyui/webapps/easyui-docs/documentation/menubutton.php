<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>menubutton - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-menubutton"]').each(function(){
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

<h3>MenuButton</h3>
<p>Extend from $.fn.linkbutton.defaults. Override defaults with $.fn.menubutton.defaults.</p>
<p>
The menubutton is the part of drop-down menu. It is associated with a linkbutton and menu.
The linkbutton is displayed while the menu is hidden.
When users click or move the mouse over the linkbutton, the menu will show to allow to click on it.
</p>
<img src="images/menubutton.png"/>

<h4>Dependencies</h4>
<ul>
	<li>menu</li>
	<li>linkbutton</li>
</ul>

<h4>Usage</h4>
<p>
Usually the menubutton is created declaratively from markup.
</p>
<textarea name="code-menubutton" class="html">
<a href="javascript:void(0)" id="mb" class="easyui-menubutton" 
		data-options="menu:'#mm',iconCls:'icon-edit'">Edit</a>
<div id="mm" style="width:150px;">
	<div data-options="iconCls:'icon-undo'">Undo</div>
	<div data-options="iconCls:'icon-redo'">Redo</div>
	<div class="menu-sep"></div>
	<div>Cut</div>
	<div>Copy</div>
	<div>Paste</div>
	<div class="menu-sep"></div>
	<div data-options="iconCls:'icon-remove'">Delete</div>
	<div>Select All</div>
</div>
</textarea>
<p>Create menubutton using javascript.</p>
<textarea name="code-menubutton" class="html">
<a href="javascript:void(0)" id="mb">Edit</a>
<div id="mm" style="width:150px">
...
</div>
</textarea>
<textarea name="code-menubutton" class="js">
$('#mb').menubutton({
	iconCls: 'icon-edit',
	menu: '#mm'
});
</textarea>

<h4>Properties</h4>
<p>The properties extend from linkbutton, below is the added properties for menubutton.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>

<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>plain</td>
<td>boolean</td>
<td>True to show plain effect.</td>
<td>true</td>
</tr>

<tr>
<td>menu</td>
<td>string</td>
<td>A selector to create a corresponding menu.</td>
<td>null</td>
</tr>
<tr>
<td>duration</td>
<td>number</td>

<td>Defines duration time in milliseconds to show menu when hovering the button.</td>
<td>100</td>
</tr>
</table>

<h4>Methods</h4>
<p>
The methods extend from linkbutton, below is the added or overridden methods for splitbutton.
</p>
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
<td>disable</td>
<td>none</td>

<td>Disable the menubutton.</td>
</tr>
<tr>
<td>enable</td>
<td>none</td>
<td>Enable the menubutton.</td>
</tr>
<tr>
<td>destroy</td>
<td>none</td>
<td>Destroy the menubutton.</td>
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
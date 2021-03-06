<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>dialog - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-dialog"]').each(function(){
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

<h3>Dialog</h3>
<p>Extend from $.fn.window.defaults. Override defaults with $.fn.dialog.defaults.</p>
<p>
The dialog is a special type of window, which can has a toolbar on top and a button bar on bottom.
The dialog has only one close tool display on top right of header by default.
Users can configure dialog behaviors to display other tools such as collapsible, minimizable, maximizable tool, etc.
</p>
<img src="images/dialog.png"/>

<h4>Dependencies</h4>
<ul>
	<li>window</li>
	<li>linkbutton</li>
</ul>

<h4>Usage</h4>
<p>
Create dialog via markup from an existing DOM node.
The example below shows a modal dialog with resizable feature.
</p>
<textarea name="code-dialog" class="html">
<div id="dd" class="easyui-dialog" title="My Dialog" style="width:400px;height:200px;"
		data-options="iconCls:'icon-save',resizable:true,modal:true">
	Dialog Content.
</div>
</textarea>
<p>
Creating dialog using javascript is also allowed.
Now let's create a modal dialog and then call 'refresh' method to load its content via ajax.
</p>
<textarea name="code-dialog" class="html">
<div id="dd">Dialog Content.</div>
</textarea>
<textarea name="code-dialog" class="js">
$('#dd').dialog({
	title: 'My Dialog',
	width: 400,
	height: 200,
	closed: false,
	cache: false,
	href: 'get_content.php',
	modal: true
});
$('#dd').dialog('refresh', 'new_content.php');
</textarea>

<h4>Properties</h4>
<p>The properties extend from window, below is the overridden properties for dialog.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>

<td>title</td>
<td>string</td>
<td>The dialog title text.</td>
<td>New Dialog</td>
</tr>
<tr>
<td>collapsible</td>
<td>boolean</td>
<td>Defines if to show collapsible button.</td>
<td>false</td>

</tr>
<tr>
<td>minimizable</td>
<td>boolean</td>
<td>Defines if to show minimizable button.</td>
<td>false</td>
</tr>
<tr>
<td>maximizable</td>
<td>boolean</td>
<td>Defines if to show maximizable button.</td>

<td>false</td>
</tr>
<tr>
<td>resizable</td>
<td>boolean</td>
<td>Defined if the dialog can be resized.</td>
<td>false</td>
</tr>
<tr>
<td>toolbar</td>
<td>array,selector</td>

<td>
The top toolbar of dialog, possible values:<br/>
1) an array, each tool options are same as linkbutton.<br/>
2) a selector that indicating the toolbar.
<p>The dialog toolbar can be declared within a &lt;div&gt; tag:</p>
<pre>
&lt;div class="easyui-dialog" style="width:600px;height:300px"
		data-options="title:'My Dialog',toolbar:'#tb',modal:true"&gt;
	Dialog Content.
&lt;/div&gt;
&lt;div id="tb"&gt;
&lt;a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-edit',plain:true"/a&gt;
&lt;a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-help',plain:true"/a&gt;
&lt;/div&gt;
</pre>
<p>The dialog toolbar can also be defined via array:</p>
<pre>
&lt;div class="easyui-dialog" style="width:600px;height:300px"
		data-options="title:'My Dialog',modal:true,
			toolbar:[{
				text:'Edit',
				iconCls:'icon-edit',
				handler:function(){alert('edit')}
			},{
				text:'Help',
				iconCls:'icon-help',
				handler:function(){alert('help')}
			}]"&gt;
	Dialog Content.
&lt;/div&gt;
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>buttons</td>
<td>array,selector</td>
<td>
The bottom buttons of dialog, possible values:<br/>
1) an array, each button options is same as linkbutton.<br/>
2) a selector that indicating the button bar.
<p>The buttons can be declared within a &lt;div&gt; tag:</p>
<pre>
&lt;div class="easyui-dialog" style="width:600px;height:300px"
		data-options="title:'My Dialog',buttons:'#bb',modal:true"&gt;
	Dialog Content.
&lt;/div&gt;
&lt;div id="bb"&gt;
	&lt;a href="#" class="easyui-linkbutton"&gt;Save&lt;/a&gt;
	&lt;a href="#" class="easyui-linkbutton"&gt;Close&lt;/a&gt;
&lt;/div&gt;
</pre>
<p>The buttons can also be defined via array:</p>
<pre>
&lt;div class="easyui-dialog" style="width:600px;height:300px"
		data-options="title:'My Dialog',modal:true,
			buttons:[{
				text:'Save',
				handler:function(){...}
			},{
				text:'Close',
				handler:function(){...}
			}]"&gt;
	Dialog Content.
&lt;/div&gt;
</pre>
</td>
<td>null</td>
</tr>
</table>

<h4>Events</h4>
<p>The events extend from window.</p>

<h4>Methods</h4>
<p>The methods extend from window, below is the added methods for dialog.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>

<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>dialog</td>
<td>none</td>
<td>Return the outer dialog object.</td>
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
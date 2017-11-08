<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>window - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-window"]').each(function(){
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

<h3>Window</h3>
<p>Extend from $.fn.panel.defaults. Override defaults with $.fn.window.defaults.</p>
<p>
The window is a floated and draggable panel that can be used as an application window.
By default a window can be moved, resized and closed.
Its content can also be defined with either as static html or loaded dynamically via ajax.
</p>
<img src="images/window.png"/>

<h4>Dependencies</h4>
<ul>
	<li>draggable</li>
	<li>resizable</li>
	<li>panel</li>
</ul>

<h4>Usage Example</h4>
<h5>Create Window</h5>
<p>1. Create window from markup.</p>
<textarea name="code-window" class="html">
<div id="win" class="easyui-window" title="My Window" style="width:600px;height:400px"
		data-options="iconCls:'icon-save',modal:true">
	Window Content
</div>
</textarea>
<p>2. Create window using javascript.</p>
<textarea name="code-window" class="html">
<div id="win"></div>
</textarea>
<textarea name="code-window" class="js">
$('#win').window({
	width:600,
	height:400,
	modal:true
});
</textarea>
<p>3. Create window with complext layout.</p>
<p>
As usual you can define the window layout. The example below shows how to split window area into two parts: the north and center.
</p>
<textarea name="code-window" class="html">
<div id="win" class="easyui-window" title="My Window" style="width:600px;height:400px"
		data-options="iconCls:'icon-save',modal:true">
	<div class="easyui-layout" data-options="fit:true">
		<div data-options="region:'north',split:true" style="height:100px"></div>
		<div data-options="region:'center'">
			The Content.
		</div>
	</div>
</div>
</textarea>
<h5>Some actions with window</h5>
<p>Open and close window.</p>
<textarea name="code-window" class="js">
$('#win').window('open');  // open a window
$('#win').window('close');  // close a window
</textarea>
<p>Load window content via ajax.</p>
<textarea name="code-window" class="js">
$('#win').window('refresh', 'get_content.php');
</textarea>

<h4>Properties</h4>
<p>The properties extend from panel, below is the overridden and added properties for window.</p>
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
<td>The window title text.</td>

<td>New Window</td>
</tr>
<tr>
<td>collapsible</td>
<td>boolean</td>
<td>Defines if to show collapsible button.</td>
<td>true</td>
</tr>
<tr>
<td>minimizable</td>
<td>boolean</td>

<td>Defines if to show minimizable button.</td>
<td>true</td>
</tr>
<tr>
<td>maximizable</td>
<td>boolean</td>
<td>Defines if to show maximizable button.</td>
<td>true</td>
</tr>
<tr>
<td>closable</td>

<td>boolean</td>
<td>Defines if to show closable button.</td>
<td>true</td>
</tr>
<tr>
<td>closed</td>
<td>boolean</td>
<td>Defined if to close the window.</td>
<td>false</td>
</tr>
<tr>
<td>zIndex</td>
<td>number</td>
<td>Window z-index,increase from it.</td>
<td>9000</td>
</tr>
<tr>
<td>draggable</td>
<td>boolean</td>
<td>Defines if window can be dragged.</td>

<td>true</td>
</tr>
<tr>
<td>resizable</td>
<td>boolean</td>
<td>Defines if window can be resized.</td>
<td>true</td>
</tr>
<tr>
<td>shadow</td>
<td>boolean</td>

<td>If set to true,when window show the shadow will show also.</td>
<td>true</td>
</tr>
<tr>
<td>inline</td>
<td>boolean</td>
<td>Defines how to stay the window, true to stay inside its parent, false to go on top of all elements.</td>
<td>false</td>
</tr>
<tr>
<td>modal</td>

<td>boolean</td>
<td>Defines if window is a modal window.</td>
<td>true</td>
</tr>
</table>

<h4>Events</h4>
<p>The events extend from panel.</p>

<h4>Methods</h4>
<p>The methods extend from panel, below is the added methods for window.</p>
<table class="doc-table">
<tr>

<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>window</td>
<td>none</td>
<td>Return the outer window object.</td>
</tr>
<tr>
<td>hcenter</td>
<td>none</td>
<td>Center the window only horizontally. This method is available since version 1.3.1.</td>
</tr>
<tr>
<td>vcenter</td>
<td>none</td>
<td>Center the window only vertically. This method is available since version 1.3.1.</td>
</tr>
<tr>
<td>center</td>
<td>none</td>
<td>Center the window on screen. This method is available since version 1.3.1.</td>
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
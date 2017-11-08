<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>draggable - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-draggable"]').each(function(){
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

<h3>Draggable</h3>
<p>Override defaults with $.fn.draggable.defaults.</p>

<h4>Usage Example</h4>
<p>Create a draggable element from markup.</p>
<textarea name="code-draggable" class="html">
<div id="dd" class="easyui-draggable" data-options="handle:'#title'" style="width:100px;height:100px;">
    <div id="title" style="background:#ccc;">title</div>
</div>
</textarea>
<p>Create a draggable element using javascript.</p>
<textarea name="code-draggable" class="html">
<div id="dd" style="width:100px;height:100px;">
    <div id="title" style="background:#ccc;">title</div>
</div>
</textarea>
<textarea name="code-draggable" class="js">
$('#dd').draggable({
    handle:'#title'
});
</textarea>

<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>

<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>proxy</td>
<td>string,function</td>
<td>
A proxy element to be used when dragging, when set to 'clone', a clone element is used as proxy. If a function is specified, it must return a jQuery object.
<p>The example below shows how to create a simple proxy object.</p>
<pre>
$('.dragitem').draggable({
	proxy: function(source){
		var p = $('&lt;div style="border:1px solid #ccc;width:80px"&gt;&lt;/div&gt;');
		p.html($(source).html()).appendTo('body');
		return p;
	}
});
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>revert</td>

<td>boolean</td>
<td>If set to true, the element will return to its start position when dragging stops.</td>
<td>false</td>
</tr>
<tr>
<td>cursor</td>
<td>string</td>
<td>The css cursor when dragging.</td>
<td>move</td>
</tr>

<tr>
<td>deltaX</td>
<td>number</td>
<td>The dragged element position x corresponding to current cursor</td>
<td>null</td>
</tr>
<tr>
<td>deltaY</td>
<td>number</td>
<td>The dragged element position y corresponding to current cursor</td>

<td>null</td>
</tr>
<tr>
<td>handle</td>
<td>selector</td>
<td>The handle that start the draggable.</td>
<td>null</td>
</tr>
<tr>
<td>disabled</td>
<td>boolean</td>

<td>True to stop draggable.</td>
<td>false</td>
</tr>
<tr>
<td>edge</td>
<td>number</td>
<td>The drag width in which can start draggable.</td>
<td>0</td>
</tr>
<tr>
<td>axis</td>

<td>string</td>
<td>Defines the axis which the dragged elements moves on, available value is 'v' or 'h', when set to null will move across 'v' and 'h' direction.</td>
<td>null</td>
</tr>
</table>

<h4>Events</h4>
<table class="doc-table">

<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onBeforeDrag</td>
<td>e</td>
<td>Fires before dragging, return false to cancel this dragging.</td>
</tr>
<tr>

<td>onStartDrag</td>
<td>e</td>
<td>Fires when the target object start dragging.</td>
</tr>
<tr>
<td>onDrag</td>
<td>e</td>
<td>Fires during dragging. Return false will not do dragging actually.</td>
</tr>
<tr>
<td>onStopDrag</td>

<td>e</td>
<td>Fires when the dragging stops.</td>
</tr>
</table>

<h4>Methods</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>

<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>options</td>
<td>none</td>
<td>Return the options property.</td>
</tr>
<tr>
<td>proxy</td>
<td>none</td>

<td>Return the drag proxy if the proxy property is setted.</td>
</tr>
<tr>
<td>enable</td>
<td>none</td>
<td>Enable the drag action.</td>
</tr>
<tr>
<td>disable</td>
<td>none</td>
<td>Disable the drag action.</td>

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

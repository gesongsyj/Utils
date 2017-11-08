<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>droppable - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-droppable"]').each(function(){
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

<h3>Droppable</h3>
<p>Override defaults with $.fn.droppable.defaults.</p>

<h4>Usage Example</h4>
<p>Create a droppable area from markup.</p>
<textarea name="code-droppable" class="html">
<div class="easyui-droppable" data-options="accept:'#d1,#d3'" style="width:100px;height:100px;">
</div>
</textarea>
<p>Create a droppable area using javascript.</p>
<textarea name="code-droppable" class="html">
<div id="dd" style="width:100px;height:100px;"></div>
</textarea>
<textarea name="code-droppable" class="html">
$('#dd').droppable({
    accept:'#d1,#d3'
});
</textarea>

<br/>
<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>

<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>accept</td>
<td>selector</td>
<td>Determine which draggable element will be accepted</td>
<td>null</td>
</tr>
<tr>
<td>disabled</td>
<td>boolean</td>
<td>True to stop droppable</td>
<td>false</td>
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

<td>onDragEnter</td>
<td>e,source</td>
<td>Fires when the draggable element is dragged enter. The source parameter indicate the dragged DOM element.</td>
</tr>
<tr>
<td>onDragOver</td>
<td>e,source</td>
<td>Fires when the draggable element is dragged over. The source parameter indicate the dragged DOM element.</td>
</tr>
<tr>
<td>onDragLeave</td>

<td>e,source</td>
<td>Fires when the draggable element is dragged leave. The source parameter indicate the dragged DOM element.</td>
</tr>
<tr>
<td>onDrop</td>
<td>e,source</td>
<td>Fires when the draggable element is dropped. The source parameter indicate the dragged DOM element.</td>
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
<td>Return the options object.</td>
</tr>
<tr>
<td>enable</td>
<td>none</td>
<td>Enable the droppable functionality.</td>
</tr>
<tr>
<td>disable</td>
<td>none</td>
<td>Disable the droppable functionality.</td>
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

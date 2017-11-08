<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>resizable - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-resizable"]').each(function(){
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

<h3>Resizable</h3>
<p>Override defaults with $.fn.resizable.defaults.</p>

<h4>Usage Example</h4>
<p>Create resizable object from markup.</p>
<textarea name="code-resizable" class="html">
<div class="easyui-resizable" style="width:100px;height:100px;border:1px solid #ccc;"
        data-options="maxWidth:800,maxHeight:600">
</div>
</textarea>
<p>Create resizable object using javascript.</p>
<textarea name="code-resizable" class="html">
<div id="rr" style="width:100px;height:100px;border:1px solid #ccc;"></div>
</textarea>
<textarea name="code-resizable" class="js">
$('#rr').resizable({
    maxWidth:800,
    maxHeight:600
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
<td>disabled</td>
<td>boolean</td>
<td>True to disable resizing.</td>
<td>false</td>
</tr>
<tr>
<td>handles</td>

<td>string</td>
<td>Indicate the direction of resizable,'n' is the north,'e' is the east,etc.</td>
<td>n, e, s, w, ne, se, sw, nw, all</td>
</tr>
<tr>
<td>minWidth</td>
<td>number</td>
<td>The minimum width when resizing.</td>
<td>10</td>
</tr>

<tr>
<td>minHeight</td>
<td>number</td>
<td>The minimum height when resizing.</td>
<td>10</td>
</tr>
<tr>
<td>maxWidth</td>
<td>number</td>
<td>The maximum width when resizing.</td>

<td>10000</td>
</tr>
<tr>
<td>maxHeight</td>
<td>number</td>
<td>The maximum height when resizing.</td>
<td>10000</td>
</tr>
<tr>
<td>edge</td>
<td>number</td>

<td>The edge of border to be resized.</td>
<td>5</td>
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
<td>onStartResize</td>
<td>e</td>
<td>Fires when start resizing.</td>
</tr>
<tr>
<td>onResize</td>
<td>e</td>

<td>Fires during resizing. When return false, the DOM element will not acts actual resize action.</td>
</tr>
<tr>
<td>onStopResize</td>
<td>e</td>
<td>Firest when stop resizing.</td>
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
<td>Return the resizable options.</td>
</tr>
<tr>
<tr>
<td>enable</td>
<td>none</td>
<td>Enable resizable feature.</td>
</tr>
<tr>
<tr>
<td>disable</td>
<td>none</td>
<td>Disable resizable feature.</td>
</tr>
<tr>
</table>

</div>


﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
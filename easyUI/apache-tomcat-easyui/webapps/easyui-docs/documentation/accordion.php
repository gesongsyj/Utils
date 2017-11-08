<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>accordion - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-accordion"]').each(function(){
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

<h3>Accordion</h3>
<p>Override defaults with $.fn.accordion.defaults.</p>
<p>
The accordion allows you to provide multiple panels and display one at a time.
Each panel has built-in support for expanding and collapsing.
Clicking on a panel header to expand or collapse that panel body.
The panel content can be loaded via ajax by specifying a 'href' property.
Users can define a panel to be selected.
If it is not specified, then the first panel is taken by default.
</p>
<img src="images/accordion.png"/>

<h4>Dependencies</h4>
<ul>
	<li>panel</li>
</ul>

<h4>Usage Example</h4>
<h5>Create Accordion</h5>
<p>Create accordion via markup, add 'easyui-accordion' class to &lt;div/&gt; markup.</p>
<textarea name="code-accordion" class="html">
<div id="aa" class="easyui-accordion" style="width:300px;height:200px;">
	<div title="Title1" data-options="iconCls:'icon-save'" style="overflow:auto;padding:10px;">
		<h3 style="color:#0099FF;">Accordion for jQuery</h3>
		<p>Accordion is a part of easyui framework for jQuery. 
		It lets you define your accordion component on web page more easily.</p>
	</div>
	<div title="Title2" data-options="iconCls:'icon-reload',selected:true" style="padding:10px;">
		content2
	</div>
	<div title="Title3">
		content3
	</div>
</div>
</textarea>
<p>We can change or recreate accordion later and modify some features.</p>
<textarea name="code-accordion" class="js">
$('#aa').accordion({
	animate:false
});
</textarea>

<br/>
<h5>Refresh Accordion Panel Content</h5>
<p>Call 'getSelected' method to get the current panel and then we can call 'refresh' method of panel to load new content.</p>
<textarea name="code-accordion" class="js">
var pp = $('#aa').accordion('getSelected');	// get the selected panel
if (pp){
	pp.panel('refresh','new_content.php');	// call 'refresh' method to load new content
}
</textarea>

<p>&nbsp;</p>
<h4>Container Options</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>width</td>
<td>number</td>
<td>The width of accordion container.</td>

<td>auto</td>
</tr>
<tr>
<td>height</td>
<td>number</td>
<td>The height of accordion container.</td>
<td>auto</td>
</tr>
<tr>
<td>fit</td>
<td>boolean</td>

<td>Set to true to set the accordion container size fit it's parent container.</td>
<td>false</td>
</tr>
<tr>
<td>border</td>
<td>boolean</td>
<td>Defines if to show the border.</td>
<td>true</td>
</tr>
<tr>
<td>animate</td>

<td>boolean</td>
<td>Defines if to show animation effect when expand or collapse panel.</td>
<td>true</td>
</tr>
</table>

<h4>Panel Options</h4>
<p>The accordion panel options is inhirited from panel, below is the addition properties:</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>

<td>selected</td>
<td>boolean</td>
<td>Set to true to expand the panel.</td>
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
<td>onSelect</td>
<td>title,index</td>
<td>Fires when a panel is selected.</td>

</tr>
<tr>
<td>onAdd</td>
<td>title,index</td>
<td>Fires when a new panel is added.</td>
</tr>
<tr>
<td>onBeforeRemove</td>
<td>title,index</td>
<td>Fires before a panel is removed, return false to cancel the remove action.</td>
</tr>

<tr>
<td>onRemove</td>
<td>title,index</td>
<td>Fires when a panel is removed.</td>
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
<td>Return the options of accordion.</td>
</tr>

<tr>
<td>panels</td>
<td>none</td>
<td>Get all panels.</td>
</tr>
<tr>
<td>resize</td>
<td>none</td>
<td>Resize the accordion.</td>
</tr>
<tr>

<td>getSelected</td>
<td>none</td>
<td>Get the selected panel.</td>
</tr>
<tr>
<td>getPanel</td>
<td>which</td>
<td>Get the specified panel. The 'which' parameter can be the title or index of panel.</td>
</tr>
<tr>
<td>getPanelIndex</td>
<td>panel</td>
<td>
Get the specified panel index. This method is available since version 1.3.
<p>The example below shows how to get the selected panel index.</p>
<pre>
var p = $('#aa').accordion('getSelected');
if (p){
	var index = $('#aa').accordion('getPanelIndex', p);
	alert(index);
}
</pre>
</td>
</tr>
<tr>
<td>select</td>

<td>which</td>
<td>Select the specified panel. The 'which' parameter can be the title or index of panel.</td>
</tr>
<tr>
<td>add</td>
<td>options</td>
<td>
Add a new panel. By default the added panel will become selected.
To add a unselected new panel, pass the 'selected' property and set it to false.
<p>Code example:</p>
<pre>
$('#aa').accordion('add', {
	title: 'New Title',
	content: 'New Content',
	selected: false
});
</pre>
</td>
</tr>
<tr>
<td>remove</td>
<td>which</td>

<td>Remove the specified panel. The 'which' parameter can be the title or index of panel.</td>
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
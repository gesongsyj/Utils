<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>layout - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-layout"]').each(function(){
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

<h3>Layout</h3>
<p>Override defaults with $.fn.layout.defaults.</p>
<p>
The layout is the container that has up to five regions: north, south, east, west and center.
The center region panel is required but edge region panel is optional.
Every edge region panel can be resized by dragging its border, 
they also can be collapsed by clicking on its collapsing trigger.
The layout can be nested, thus users can build what complex layout he wants.
</p>
<img src="images/layout.png"/>

<h4>Dependencies</h4>
<ul>
	<li>panel</li>
	<li>resizable</li>
</ul>

<h4>Usage Example</h4>
<h5>Create Layout</h5>
<p>1. Create Layout via markup.</p>
<p>Add 'easyui-layout' class to &lt;div/&gt; markup.</p>
<textarea name="code-layout" class="html">
<div id="cc" class="easyui-layout" style="width:600px;height:400px;">
	<div data-options="region:'north',title:'North Title',split:true" style="height:100px;"></div>
	<div data-options="region:'south',title:'South Title',split:true" style="height:100px;"></div>
	<div data-options="region:'east',title:'East',split:true" style="width:100px;"></div>
	<div data-options="region:'west',title:'West',split:true" style="width:100px;"></div>
	<div data-options="region:'center',title:'center title'" style="padding:5px;background:#eee;"></div>
</div>
</textarea>
<p>2. Create layout on whole page.</p>
<textarea name="code-layout" class="html">
<body class="easyui-layout">
	<div data-options="region:'north',title:'North Title',split:true" style="height:100px;"></div>
	<div data-options="region:'south',title:'South Title',split:true" style="height:100px;"></div>
	<div data-options="region:'east',title:'East',split:true" style="width:100px;"></div>
	<div data-options="region:'west',title:'West',split:true" style="width:100px;"></div>
	<div data-options="region:'center',title:'center title'" style="padding:5px;background:#eee;"></div>
</body>
</textarea>
<p>3. Create nested layout.</p>
<p>Notice that the west panel of inner layout is collapsed.</p>
<textarea name="code-layout" class="html">
<body class="easyui-layout">
	<div data-options="region:'north'" style="height:100px"></div>
	<div data-options="region:'center'">
		<div class="easyui-layout" data-options="fit:true">
			<div data-options="region:'west',collapsed:true" style="width:180px"></div>
			<div data-options="region:'center'"></div>
		</div>
	</div>
</body>
</textarea>

<p>4. Loading content with ajax</p>
<p>
The layout is created based on panel. Each region panel provides built-in support for
asynchronously loading content from URLs. 
Using the async loading technology, users can make their layout page display more faster.
</p>
<textarea name="code-layout" class="html">
<body class="easyui-layout">
	<div data-options="region:'west',href:'west_content.php'" style="width:180px" />
	<div data-options="region:'center',href:'center_content.php'" />
</body>
</textarea>

<br/>
<h5>Collpase Layout Panel</h5>
<textarea name="code-layout" class="js">
$('#cc').layout();
// collapse the west panel
$('#cc').layout('collapse','west');
</textarea>

<br/>
<h5>Add west region panel with tool buttons</h5>
<textarea name="code-layout" class="js">
$('#cc').layout('add',{
	region: 'west',
	width: 180,
	title: 'West Title',
	split: true,
	tools: [{
		iconCls:'icon-add',
		handler:function(){alert('add')}
	},{
		iconCls:'icon-remove',
		handler:function(){alert('remove')}
	}]
});
</textarea>

<h4>Layout Options</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>fit</td>
<td>boolean</td>
<td>
Set to true to set the layout size fit its parent container.
When creating layout on 'body' tag, it will be auto maximized to the full size of whole page.
</td>
<td>false</td>
</tr>
</table>

<h4>Region Panel Options</h4>
<p>
The region panel options is defined in panel component, below is some common and added properties:
</p>
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
<td>The layout panel title text.</td>
<td>null</td>
</tr>
<tr>
<td>region</td>
<td>string</td>
<td>Defines the layout panel position, the value is one of following: north, south, east, west, center.</td>
<td></td>
</tr>
<tr>

<td>border</td>
<td>boolean</td>
<td>True to show layout panel border.</td>
<td>true</td>
</tr>
<tr>
<td>split</td>
<td>boolean</td>
<td>True to show a split bar which user can change the panel size.</td>
<td>false</td>

</tr>
<tr>
<td>iconCls</td>
<td>string</td>
<td>An icon CSS class to show a icon on panel header.</td>
<td>null</td>
</tr>
<tr>
<td>href</td>
<td>string</td>
<td>An URL to load data from remote site.</td>

<td>null</td>
</tr>
<tr>
<td>collapsible</td>
<td>boolean</td>
<td>Defines if to show collapsible button.</td>
<td>true</td>
</tr>
<tr>
<td>minWidth</td>
<td>number</td>
<td>The minimum panel width.</td>
<td>10</td>
</tr>

<tr>
<td>minHeight</td>
<td>number</td>
<td>The minimum panel height.</td>
<td>10</td>
</tr>
<tr>
<td>maxWidth</td>
<td>number</td>
<td>The maximum panel width.</td>

<td>10000</td>
</tr>
<tr>
<td>maxHeight</td>
<td>number</td>
<td>The maximum panel height.</td>
<td>10000</td>
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
<td>resize</td>
<td>none</td>
<td>Set the layout size.</td>
</tr>
<tr>
<td>panel</td>
<td>region</td>
<td>Return the specified panel, the 'region' parameter possible values:'north','south','east','west','center'.</td>

</tr>
<tr>
<td>collapse</td>
<td>region</td>
<td>Collapse the specified panel, the 'region' parameter possible values:'north','south','east','west'.</td>
</tr>
<tr>
<td>expand</td>
<td>region</td>
<td>Expand the specified panel, the 'region' parameter possible values:'north','south','east','west'.</td>
</tr>
<tr>
<td>add</td>
<td>options</td>
<td>
Add a specified panel, the options parameter is a config object, see tab panel properties for more details.
</td>
</tr>
<tr>
<td>remove</td>
<td>region</td>
<td>Remove the specified panel, the 'region' parameter possible values:'north','south','east','west'.</td>
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
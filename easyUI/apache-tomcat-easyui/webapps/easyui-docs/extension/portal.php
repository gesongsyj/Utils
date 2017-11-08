<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Portal - Extension - jQuery EasyUI</title>
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

<h3>Portal</h3>
<p>
	<a href="/extension/index.php">Extension</a> » Portal
</p>

<img src="images/portal.jpg"/>

<h4>Step 1: Create an HTML Page</h4>
<textarea name="code" class="html">
	<div id="pp" style="width:800px;height:500px;">
		<div style="width:33%"></div>
		<div style="width:33%"></div>
		<div style="width:33%"></div>
	</div>
</textarea>

<h4>Step 2: Create the Portal</h4>
<textarea name="code" class="js">
	$('#pp').portal(options);
</textarea>

<h4>Step 3: Add panel widgets to this portal</h4>
<textarea name="code" class="js">
	// create the panel
	var p = $('<div></div>').appendTo('body');
	p.panel({
		title: 'My Title',
		height:150,
		closable: true,
		collapsible: true
	});
	 
	// add the panel to portal
	$('#pp').portal('add', {
		panel: p,
		columnIndex: 0
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
<td>width</td>
<td>number</td>
<td>The width of portal.</td>
<td>auto</td>
</tr>
<tr>
<td>height</td>
<td>number</td>
<td>The height of portal.</td>
<td>auto</td>
</tr>
<tr>
<td>border</td>
<td>boolean</td>
<td>Defines if to show portal border.</td>
<td>false</td>
</tr>
<tr>
<td>fit</td>
<td>boolean</td>
<td>When true to set the portal size fit it's parent container.</td>
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
<td>onStateChange</td>
<td>none</td>
<td>Fires when users drag and drop a panel.</td>
</tr>
<tr>
<td>onResize</td>
<td>width,height</td>
<td>Fires when the portal size is changed.</td>
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
<td>resize</td>
<td>param</td>
<td>
Set the portal size, the 'param' parameter contains following properties:<br/>
width: the new width of portal.<br/>
height: the new height of portal.
</td>
</tr>
<tr>
<td>getPanels</td>
<td>columnIndex</td>
<td>Get the specified column panels, when columnIndex parameter is not assigned, return all panels.</td>
</tr>
<tr>
<td>add</td>
<td>param</td>
<td>
Add a new panel, the 'param' parameter contains following properties:<br/>
panel: the panel object to be added.<br/>
columnIndex: the column index to be inserted.
</td>
</tr>
<tr>
<td>remove</td>
<td>panel</td>
<td>Remove and destroy the specified panel.</td>
</tr>
<tr>
<td>disableDragging</td>
<td>panel</td>
<td>Disable the dragging feature for a panel.</td>
</tr>
<tr>
<td>enableDragging</td>
<td>panel</td>
<td>Enable the dragging feature for a panel.</td>
</tr>
</table>

<h4>Download the EasyUI Extension:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/jquery-easyui-portal.zip">jquery-easyui-portal.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create a Split Button - jQuery EasyUI</title>
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

<h3>Create a Split Button </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create a Split Button 
</p>

<p>
SplitButton contains a linkbutton and a menu. 
When user click or hovering on down arrow area a corresponding menu will show. 
This example demonstrates how to create and use a splitbutton.
</p>

<img src="images/splitbutton.png"/>
<div>
	<a href="splitbutton_demo.html" target="_blank">View Demo</a>
</div>

<p>We create a splitbutton and a linkbutton:</p>

<textarea name="code" class="html">
	<div style="border:1px solid #ccc;background:#fafafa;padding:5px;width:120px;">
		<a href="#" class="easyui-splitbutton" menu="#mm" iconCls="icon-edit">Edit</a>
		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-help"></a>
	</div>
	<div id="mm" style="width:150px;">
		<div iconCls="icon-undo">Undo</div>
		<div iconCls="icon-redo">Redo</div>
		<div class="menu-sep"></div>
		<div>Cut</div>
		<div>Copy</div>
		<div>Paste</div>
		<div class="menu-sep"></div>
		<div>
			<span>Open</span>
			<div style="width:150px;">
				<div>Firefox</div>
				<div>Internet Explorer</div>
				<div class="menu-sep"></div>
				<div>Select Program...</div>
			</div>
		</div>
		<div iconCls="icon-remove">Delete</div>
		<div>Select All</div>
	</div>
</textarea>

<p>We don't need to write any javascript code and the splitbutton is finished.</p>

<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style>
﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create Dialog - jQuery EasyUI</title>
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

<h3>Create Dialog </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create Dialog 
</p>

<p>Dialog is a specified window, it can contains toolbar on top and buttons on bottom. By default dialog can not be resized but user can set resizable property to true to make it resizable.</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/dlg1_1.png"/>
<div>
	<a href="dlg1_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create Dialog</h4>
<p>Dialog is very simple, it can be created from DIV markup, just like this:</p>
<textarea name="code" class="html">
	<div id="dd" class="easyui-dialog" style="padding:5px;width:400px;height:200px;"
			title="My Dialog" iconCls="icon-ok"
			toolbar="#dlg-toolbar" buttons="#dlg-buttons">
		Dialog Content.
	</div>
</textarea>

<h4>Prepare Toolbar and Button</h4>
<textarea name="code" class="html">
	<div id="dlg-toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:alert('Add')">Add</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:alert('Save')">Save</a>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="javascript:alert('Ok')">Ok</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dd').dialog('close')">Cancel</a>
	</div>
</textarea>

<p>The code above we create a dialog with toolbar and buttons. This is standard configuration for dialog, toolbar, content and buttons.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="download/easyui-dialog1-demo.zip">easyui-dialog-demo.zip</a></div>
	

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
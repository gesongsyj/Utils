<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Custom Dialog Toolbar and Buttons - jQuery EasyUI</title>
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

<h3>Custom Dialog Toolbar and Buttons </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Custom Dialog Toolbar and Buttons 
</p>

<p>You can create a dialog with toolbar and buttons, which can be created from HTML markup. This tutorial describes how to attach toolbar and buttons to a dialog with no javascript code.</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/dlg2_1.png"/>

<h4>Create Dialog</h4>
<textarea name="code" class="html">
	<div id="dd" class="easyui-dialog" title="My Dialog" style="width:400px;height:200px;padding:10px"
			toolbar="#dlg-toolbar" buttons="#dlg-buttons">
		Dialog Content.
	</div>
</textarea>

<h4>Create Toolbar</h4>
<textarea name="code" class="html">
	<div id="dlg-toolbar">
		<table cellpadding="0" cellspacing="0" style="width:100%">
			<tr>
				<td>
					<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true">Edit</a>
					<a href="#" class="easyui-linkbutton" iconCls="icon-help" plain="true">Help</a>
				</td>
				<td style="text-align:right">
					<input></input><a href="#" class="easyui-linkbutton" iconCls="icon-search" plain="true"></a>
				</td>
			</tr>
		</table>
	</div>
</textarea>

<h4>Create Buttons</h4>
<textarea name="code" class="html">
	<div id="dlg-buttons">
		<table cellpadding="0" cellspacing="0" style="width:100%">
			<tr>
				<td>
					<img src="email.gif"/>
				</td>
				<td style="text-align:right">
					<a href="#" class="easyui-linkbutton" iconCls="icon-save" onclick="javascript:alert('save')">Save</a>
					<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dd').dialog('close')">Close</a>
				</td>
			</tr>
		</table>
	</div>
</textarea>

<p>
Notice that the toolbar and buttons properties of dialog can also be assigned with string value, 
which will acts as a selector to select the appropriate DIV element and append to the toolbar or buttons positon.
</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/easyui-dialog-demo2.zip">easyui-dialog-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
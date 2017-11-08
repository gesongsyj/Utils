<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create XP style left panel - jQuery EasyUI</title>
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

<h3>Create XP style left panel </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create XP style left panel 
</p>

<p>
Normally, Explorer folders in Windows XP has left panel that contains common tasks. 
This tutorial show you how to create the XP left panel with panel plugin of easyui.
</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/layout/panel2_2.png" />
<div>
	<a href="panel2_demo.html" target="_blank">View Demo</a>
</div>

<h4>Define several panels</h4>
<p>We defines several panels to show some tasks, each panel should has only collapse/expand tool button.</p>
<p>The code looks just like this:</p>
<textarea name="code" class="html">
	<div style="width:200px;height:auto;background:#7190E0;padding:5px;">
		<div class="easyui-panel" title="Picture Tasks" collapsible="true" style="width:200px;height:auto;padding:10px;">
			View as a slide show<br/>
			Order prints online<br/>
			Print pictures
		</div>
		<br/>
		<div class="easyui-panel" title="File and Folder Tasks" collapsible="true" style="width:200px;height:auto;padding:10px;">
			Make a new folder<br/>
			Publish this folder to the Web<br/>
			Share this folder
		</div>
		<br/>
		<div class="easyui-panel" title="Other Places" collapsible="true" collapsed="true" style="width:200px;height:auto;padding:10px;">
			New York<br/>
			My Pictures<br/>
			My Computer<br/>
			My Network Places
		</div>
		<br/>
		<div class="easyui-panel" title="Details" collapsible="true" style="width:200px;height:auto;padding:10px;">
			My documents<br/>
			File folder<br/><br/>
			Date modified: Oct.3rd 2010
		</div>
	</div>
</textarea>

<h4>Custom appearance effect of panel</h4>
<p>
Notice that the view appearance effect is not what we want, we must change the header background image of panel
and the collapse/expand button icon.
</p>
<p>It's not difficult to do this, What we should do is to redefine some CSS.</p>
<textarea name="code" class="html">
	.panel-body{
		background:#f0f0f0;
	}
	.panel-header{
		background:#fff url('images/panel_header_bg.gif') no-repeat top right;
	}
	.panel-tool-collapse{
		background:url('images/arrow_up.gif') no-repeat 0px -3px;
	}
	.panel-tool-expand{
		background:url('images/arrow_down.gif') no-repeat 0px -3px;
	}
</textarea>

<p>As you can see, it's very easy while using easyui to define user-interface.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-panel2-demo.zip">easyui-panel-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
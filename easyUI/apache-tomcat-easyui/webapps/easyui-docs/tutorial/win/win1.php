<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>My first window - jQuery EasyUI</title>
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

<h3>My first window</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » My first window
</p>

<p>Create a window is very simple. We create a DIV markup:</p>
<textarea name="code" class="html">
<div id="win" class="easyui-window" title="My Window" style="width:300px;height:100px;padding:5px;">
	Some Content.
</div>
</textarea>

<p>Now run your test page and you will see a window show on screen. We don't need to write any javascript code.</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/win1_1.png"/>
<p>If you wish to create a invisible window, remember to set a 'closed' attribute to 'true' value and you can invoke a 'open' method to open the window:</p>
<textarea name="code" class="html">
<div id="win" class="easyui-window" title="My Window" closed="true" style="width:300px;height:100px;padding:5px;">
	Some Content.
</div>
</textarea>
<textarea name="code" class="js">
$('#win').window('open');
</textarea>

<p>As a demonstration we create a login window in finally:</p>
<textarea name="code" class="html">
<div id="win" class="easyui-window" title="Login" style="width:300px;height:180px;">
	<form style="padding:10px 20px 10px 40px;">
		<p>Name: <input type="text"></p>
		<p>Pass: <input type="password"></p>
		<div style="padding:5px;text-align:center;">
			<a href="#" class="easyui-linkbutton" icon="icon-ok">Ok</a>
			<a href="#" class="easyui-linkbutton" icon="icon-cancel">Cancel</a>
		</div>
	</form>
</div>
</textarea>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/win1_2.png"/>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/easyui-window-demo1.zip">easyui-window-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
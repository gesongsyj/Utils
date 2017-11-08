<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Custom window tools - jQuery EasyUI</title>
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

<h3>Custom window tools </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Custom window tools 
</p>

<p>By default the window has four tools:collapsible,minimizable,maximizable and closable. For example we defines below window:</p>
<textarea name="code" class="html">
	<div id="win" class="easyui-window" title="My Window" style="padding:10px;width:200px;height:100px;">
		window content
	</div>
</textarea>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/win2_1.png"/>

<p>To custom the tools set the tools to true or false. For example we wish to define a window which has only one closable tool. You should set any other tool to false. We can defines tools property in markup or by jQuery code. Now we use the jQuery code to defines the window:</p>
<textarea name="code" class="js">
	$('#win').window({
		collapsible:false,
		minimizable:false,
		maximizable:false
	});
</textarea>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/win2_2.png"/>

<p>If we wish to add our custom tools to window, we can use tools property, as a demonstration we add our two tools to window:</p>
<textarea name="code" class="js">
	$('#win').window({
		collapsible:false,
		minimizable:false,
		maximizable:false,
		tools:[{
			iconCls:'icon-add',
			handler:function(){
				alert('add');
			}
		},{
			iconCls:'icon-remove',
			handler:function(){
				alert('remove');
			}
		}]
	});
</textarea>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/win2_3.png"/>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/easyui-window-demo2.zip">easyui-window-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
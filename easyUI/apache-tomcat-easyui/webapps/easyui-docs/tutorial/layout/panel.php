<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Complex layout on Panel - jQuery EasyUI</title>
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

<h3>Complex layout on Panel </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Complex layout on Panel 
</p>

<p>Panel allows you to create customized layouts for multiple uses. In this example we create a msn message box by using panel and layout plugins.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/layout/panel1_1.png" />
<div>
	<a href="panel_demo.html" target="_blank">View Demo</a>
</div>

<p>
We use multiple layout in region panel. On top of message box we place a searching input, 
we also place a man image on the right. 
In center region we split it into two parts by set split attribute to true, 
which allows user to change the size of region panel.
</p>
<p>
Below is all the code:
</p>

<textarea name="code" class="html">
	<div class="easyui-panel" title="Complex Panel Layout" iconCls="icon-search" collapsible="true" style="padding:5px;width:500px;height:250px;">
		<div class="easyui-layout" fit="true">
			<div region="north" border="false" class="p-search">
				<label>Search:</label><input></input>
			</div>
			<div region="center" border="false">
				<div class="easyui-layout" fit="true">
					<div region="east" border="false" class="p-right">
						<img src="images/msn.gif"/>
					</div>
					<div region="center" border="false" style="border:1px solid #ccc;">
						<div class="easyui-layout" fit="true">
							<div region="south" split="true" border="false" style="height:60px;">
								&lt;textarea style="border:0;width:100%;height:100%;resize:none"&gt;Hi,I am easyui.&lt;/textarea&gt;
							</div>
							<div region="center" border="false">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</textarea>

<p>We don't need to write any javascript code but own powerful ability of designing user-interface.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-panel-demo.zip">easyui-panel-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
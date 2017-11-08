<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Window and Layout - jQuery EasyUI</title>
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

<h3>Window and Layout </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Window and Layout 
</p>

<p>Layout components can be nested in window. We can build a complex layout window and even don't write any js code. The jquery-easyui framework helps us do rendering and resizing works in background.</p>
<p>As an example we build a window which contains two parts, one placed in left and another placed in right. In left of window we create a tree and in right of window create a tabs container.</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/win3_1.png"/>
<textarea name="code" class="html">
	<div class="easyui-window" title="Layout Window" icon="icon-help" style="width:500px;height:250px;padding:5px;background: #fafafa;">
		<div class="easyui-layout" fit="true">
			<div region="west" split="true" style="width:120px;">
				<ul class="easyui-tree">
					<li>
						<span>Library</span>
						<ul>
							<li><span>easyui</span></li>
							<li><span>Music</span></li>
							<li><span>Picture</span></li>
							<li><span>Database</span></li>
						</ul>
					</li>
				</ul>
			</div>
			<div region="center" border="false" border="false">
				<div class="easyui-tabs" fit="true">
					<div title="Home" style="padding:10px;">
						jQuery easyui framework help you build your web page easily.
					</div>
					<div title="Contacts">
						No contact data.
					</div>
				</div>
			</div>
			<div region="south" border="false" style="text-align:right;height:30px;line-height:30px;">
				<a class="easyui-linkbutton" icon="icon-ok" href="javascript:void(0)">Ok</a>
				<a class="easyui-linkbutton" icon="icon-cancel" href="javascript:void(0)">Cancel</a>
			</div>
		</div>
	</div>
</textarea>

<p>See above code, we only use HTML markup and the complex layout window show. This is jquery-easyui framework, easy and powerful.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/window/easyui-window-demo3.zip">easyui-window-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
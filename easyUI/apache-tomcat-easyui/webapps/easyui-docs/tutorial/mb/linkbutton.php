<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create a Link Button - jQuery EasyUI</title>
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
<h3>Create a Link Button </h3><p>	<a href="/tutorial/index.php">Tutorial</a> » Create a Link Button </p><p>Normally a button is created using &lt;button/&gt; element.A link button is created using &lt;a/&gt; element, so in fact a link button is a &lt;a/&gt; element but show a button style.</p><img src="images/linkbutton.png" /><div>	<a href="linkbutton_demo.html" target="_blank">View Demo</a></div><p>To create a link button, all you want to do is to add the class attribute named 'easyui-linkbutton' to the &lt;a/&gt; element:</p><textarea name="code" class="html">	<div style="padding:5px;background:#fafafa;width:500px;border:1px solid #ccc">		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel">Cancel</a>		<a href="#" class="easyui-linkbutton" iconCls="icon-reload">Refresh</a>		<a href="#" class="easyui-linkbutton" iconCls="icon-search">Query</a>		<a href="#" class="easyui-linkbutton">text button</a>		<a href="#" class="easyui-linkbutton" iconCls="icon-print">Print</a>	</div>	 	<div style="padding:5px;background:#fafafa;width:500px;border:1px solid #ccc">		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-cancel">Cancel</a>		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-reload">Refresh</a>		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-search">Query</a>		<a href="#" class="easyui-linkbutton" plain="true">text button</a>		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-print">Print</a>		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-help"></a>		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-save"></a>		<a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-back"></a>	</div></textarea><p>As you can see, the iconCls attribute is a icon CSS class that show an icon image on button.</p><p>Sometime you decide to disable a link button or enable it, below code demostrate how to disable a link button:</p><textarea name="code" class="js">	$(selector).linkbutton('disable');	// call the 'disable' method</textarea><link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
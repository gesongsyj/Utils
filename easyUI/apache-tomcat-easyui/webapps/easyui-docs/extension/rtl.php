<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>RTL suport for jQuery EasyUI - Extension - jQuery EasyUI</title>
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

<h3>RTL suport for jQuery EasyUI</h3>
<p>
	<a href="/extension/index.php">Extension</a> » RTL suport for jQuery EasyUI
</p>
<img src="images/rtl.png"/>

<h4>Include RTL files</h4>
<p>
To enable RTL feature, include 'easyui-rtl.css' and 'easyui-rtl.js' files.
</p>
<textarea name="code" class="html">
    <link rel="stylesheet" type="text/css" href="../../themes/default/easyui.css">  
    <link rel="stylesheet" type="text/css" href="easyui-rtl.css">  
    <script type="text/javascript" src="../../jquery-1.8.0.min.js"></script>  
    <script type="text/javascript" src="../../jquery.easyui.min.js"></script>  
    <script type="text/javascript" src="easyui-rtl.js"></script>  
</textarea>

<h4>Add RTL attribute</h4>
<p>
Remember to add 'dir' attribute with 'rtl' value to &lt;body&gt; tag.
</p>
<textarea name="code" class="html">
	<body dir="rtl">
		<div class="easyui-accordion" data-options="fit:true,border:false">  
			<div title="Title1" style="padding:10px;">  
				content1  
			</div>  
			<div title="Title2" data-options="selected:true" style="padding:10px;">  
				content2  
			</div>  
			<div title="Title3" style="padding:10px">  
				content3  
			</div>  
		</div>  
	</body>
</textarea>

<h4>Download the EasyUI Extension:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/jquery-easyui-rtl.zip">jquery-easyui-rtl.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
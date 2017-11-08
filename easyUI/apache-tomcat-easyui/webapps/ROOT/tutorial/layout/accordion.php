<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create Accordion - jQuery EasyUI</title>
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

<h3>Create Accordion </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create Accordion 
</p>

<p>
In this tutorial, you will learn about the easyui Accordion. 
Accordion contains a set of panels. 
All panel headers are all visible, but only one panel's body content is visible at a time. 
When user click the header of panel, the body content of that panel will become visible and other panel's body contents will become insivible.
</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/layout/accordion1_1.png" />
<div>
	<a href="accordion_demo.html" target="_blank">View Demo</a>
</div>

<p>We will create three panels, the third panel contains a tree menu.</p>

<textarea name="code" class="html">
	<div class="easyui-accordion" style="width:300px;height:200px;">
		<div title="About Accordion" iconCls="icon-ok" style="overflow:auto;padding:10px;">
			<h3 style="color:#0099FF;">Accordion for jQuery</h3>
			<p>Accordion is a part of easyui framework for jQuery. It lets you define your accordion component on web page more easily.</p>
		</div>
		<div title="About easyui" iconCls="icon-reload" selected="true" style="padding:10px;">
			easyui help you build your web page easily
		</div>
		<div title="Tree Menu">
			<ul id="tt1" class="easyui-tree">
				<li>
					<span>Folder1</span>
					<ul>
						<li>
							<span>Sub Folder 1</span>
							<ul>
								<li><span>File 11</span></li>
								<li><span>File 12</span></li>
								<li><span>File 13</span></li>
							</ul>
						</li>
						<li><span>File 2</span></li>
						<li><span>File 3</span></li>
					</ul>
				</li>
				<li><span>File2</span></li>
			</ul>
		</div>
	</div>
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-accordion-demo.zip">easyui-accordion-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
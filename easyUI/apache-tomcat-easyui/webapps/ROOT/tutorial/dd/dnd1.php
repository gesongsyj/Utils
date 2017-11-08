<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Basic Drag and Drop - jQuery EasyUI</title>
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
<h3>Basic Drag and Drop </h3><p>	<a href="/tutorial/index.php">Tutorial</a> » Basic Drag and Drop</p><p>This tutorial show you how to make HTML elements draggable.For this example, we will create three DIV elements and then enable them drag and drop.</p><img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/dnd/dnd1_1.png"/><div>	<a href="dnd1_demo.html" target="_blank">View Demo</a></div><p>First of all, we create three &lt;div&gt; elements:</p><textarea name="code" class="html">	<div id="dd1" class="dd-demo"></div>	<div id="dd2" class="dd-demo"></div>	<div id="dd3" class="dd-demo"></div></textarea><p>For first &lt;div&gt; element, we make it draggable by default.</p><textarea name="code" class="js">	$('#dd1').draggable();</textarea><p>For second &lt;div&gt; element, we make it draggable by creating a proxy that clone the original element.</p><textarea name="code" class="js">	$('#dd2').draggable({		proxy:'clone'	});</textarea><p>For third &lt;div&gt; element, we make it draggable by creating a custom proxy.</p><textarea name="code" class="js">	$('#dd3').draggable({		proxy:function(source){			var p = $('<div class="proxy">proxy</div>');			p.appendTo('body');			return p;		}	});</textarea><h4>Download the EasyUI example:</h4><div style="padding-left:50px">	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/dnd/easyui-dnd-demo1.zip">easyui-dnd-demo.zip</a></div>	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
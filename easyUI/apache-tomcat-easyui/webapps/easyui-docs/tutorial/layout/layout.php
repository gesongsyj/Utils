<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Build border layout for web pages - jQuery EasyUI</title>
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

<h3>Build border layout for web pages </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Build border layout for web pages 
</p>

<p>The border layout providers five regions: east,west,north,south,center. Below is some normal usage:</p>
<ul>
	<li>The north region can be used for a web site banner.</li>
	<li>The south region can be used for copyright and other notes.</li>
	<li>The west region can be used for navigation menu.</li>
	<li>The east region can be used for promotion items.</li>
	<li>The center region can be used for main content.</li>
</ul>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/layout/layout1_1.png"/>
<div>
	<a href="layout_demo.html" target="_blank">View Demo</a>
</div>

<p>To apply a layout you should confirm a layout container and then defines some region. 
The layout must has at least a center region. Below is a layout example:</p>

<textarea name="code" class="html">
	<div class="easyui-layout" style="width:400px;height:200px;">
		<div region="west" split="true" title="Navigator" style="width:150px;">
			<p style="padding:5px;margin:0;">Select language:</p>
			<ul>
				<li><a href="javascript:void(0)" onclick="showcontent('java')">Java</a></li>
				<li><a href="javascript:void(0)" onclick="showcontent('cshape')">C#</a></li>
				<li><a href="javascript:void(0)" onclick="showcontent('vb')">VB</a></li>
				<li><a href="javascript:void(0)" onclick="showcontent('erlang')">Erlang</a></li>
			</ul>
		</div>
		<div id="content" region="center" title="Language" style="padding:5px;">
		</div>
	</div>
</textarea>

<p>
We build a border layout in a &lt;div&gt; container. 
The layout split a container into two part, the left is a navigation menu and right is a main content. 
</p>

<p>Finally we write an onclick event handle function to retrive data, the 'showcontent' function is very simple:</p>
<textarea name="code" class="js">
	function showcontent(language){
		$('#content').html('Introduction to ' + language + ' language');
	}
</textarea>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-layout-demo.zip">easyui-layout-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Dynamically add tabs - jQuery EasyUI</title>
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

<h3>Dynamically add tabs </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Dynamically add tabs 
</p>

<p>When working with jQuery EasyUI it is easy to dynamically add tabs. You just call 'add' method.</p>
<p>
In this tutorial we will dynamically add tabs that display one page using iframe. 
When clicking the add button, a new tab will be added. If the tab already exists it will become actived.
</p>

<img src="images/tabs2.png" />
<div>
	<a href="tabs2_demo.html" target="_blank">View Demo</a>
</div>

<h4>Step 1: Create the tabs</h4>
<textarea name="code" class="html">
	<div style="margin-bottom:10px">
		<a href="#" class="easyui-linkbutton" onclick="addTab('google','http://www.google.com')">google</a>
		<a href="#" class="easyui-linkbutton" onclick="addTab('jquery','http://jquery.com/')">jquery</a>
		<a href="#" class="easyui-linkbutton" onclick="addTab('easyui','http://jeasyui.com/')">easyui</a>
	</div>
	<div id="tt" class="easyui-tabs" style="width:400px;height:250px;">
		<div title="Home">
		</div>
	</div>
</textarea>

<p>The html code is simple, we create the tabs with one tab panel named 'Home'. Remember we don't need write any js code.</p>

<h4>Step 2: Implement the 'addTab' function</h4>
<textarea name="code" class="js">
	function addTab(title, url){
		if ($('#tt').tabs('exists', title)){
			$('#tt').tabs('select', title);
		} else {
			var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
			$('#tt').tabs('add',{
				title:title,
				content:content,
				closable:true
			});
		}
	}
</textarea>

<p>We use the 'exists' method to determine whether the tab is exists, if so active the tab. Calling the 'add' method to add a new tab panel.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-tabs2-demo.zip">easyui-tabs-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Add autoplay to tabs - jQuery EasyUI</title>
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

<h3>Add autoplay to tabs </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Add autoplay to tabs 
</p>

<p>
This tutorial will show you how to create an autoplay tabs. 
The tabs component displays first tab panel, and then display the second, the third… 
We will write some code to automatically switch tab panels and get it to loop.
</p>

<img src="images/tabs3.png" />
<div>
	<a href="tabs3_demo.html" target="_blank">View Demo</a>
</div>

<h4>Step 1: Create tabs</h4>
<textarea name="code" class="html">
	<div id="tt" class="easyui-tabs" style="width:330px;height:270px;">
		<div title="Shirt1" style="padding:20px;">
			<img src="images/shirt1.gif">
		</div>
		<div title="Shirt2" style="padding:20px;">
			<img src="images/shirt2.gif">
		</div>
		<div title="Shirt3" style="padding:20px;">
			<img src="images/shirt3.gif">
		</div>
		<div title="Shirt4" style="padding:20px;">
			<img src="images/shirt4.gif">
		</div>
		<div title="Shirt5" style="padding:20px;">
			<img src="images/shirt5.gif">
		</div>
	</div>
</textarea>

<h4>Step 2: Write autoplay code</h4>
<textarea name="code" class="js">
	var index = 0;
	var t = $('#tt');
	var tabs = t.tabs('tabs');
	setInterval(function(){
		t.tabs('select', tabs[index].panel('options').title);
		index++;
		if (index >= tabs.length){
			index = 0;
		}
	}, 3000);
</textarea>

<p>As you can see, we call the 'tabs' method to get all tab panels and switch them by using 'setInterval' function.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-tabs3-demo.zip">easyui-tabs-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
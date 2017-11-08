<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create a Property Grid - jQuery EasyUI</title>
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

<h3>Create a Property Grid </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create a Property Grid 
</p>

<p>The property grid comes with a built in expand/collapse button for easy grouping rows. You can easily create a hierarchical list of editable properties.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid20_1.png"/>

<h4>Setting up the HTML</h4>
<textarea name="code" class="html">
	<table id="tt" class="easyui-propertygrid" style="width:300px"
            url="propertygrid_data.json"
            showGroup="true" scrollbarSize="0"
    ></table>
</textarea>

<h4>Prepare the json data</h4>
<textarea name="code" class="js">
	[
		{"name":"Name","value":"Bill Smith","group":"ID Settings","editor":"text"},
		{"name":"Address","value":"","group":"ID Settings","editor":"text"},
		{"name":"Age","value":"40","group":"ID Settings","editor":"numberbox"},
		{"name":"Birthday","value":"01/02/2012","group":"ID Settings","editor":"datebox"},
		{"name":"SSN","value":"123-456-7890","group":"ID Settings","editor":"text"},
		{"name":"Email","value":"bill@gmail.com","group":"Marketing Settings","editor":{
			"type":"validatebox",
			"options":{
				"validType":"email"
			}
		}},
		{"name":"FrequentBuyer","value":"false","group":"Marketing Settings","editor":{
			"type":"checkbox",
			"options":{
				"on":true,
				"off":false
			}
		}}
	]
</textarea>

<p>As you can see, the property grid is created with no javascript code. You can extend its editor type easily.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/easyui-datagrid-demo20.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
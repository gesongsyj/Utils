<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Displaying Summary Information in DataGrid's Footer - jQuery EasyUI</title>
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

<h3>Displaying Summary Information in DataGrid's Footer </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Displaying Summary Information in DataGrid's Footer 
</p>

<p>In this tutorial, we will show you how to display the summary rows in the footer of datagrid.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid17_1.png"/>
<div>
	<a href="datagrid17_demo.html" target="_blank">View Demo</a>
</div>

<p>To display footer row, you should set the showFooter property to true and then prepare the footer rows that is defined in datagrid data. Below is the sample data:</p>
<textarea name="code" class="js">
	{"total":1,"rows":[{"id":1,"name":"Chai","price":18.00}],"footer":[{"name":"Total","price":18.00}]}
</textarea>

<h4>Create DataGrid</h4>
<textarea name="code" class="html">
	<table id="tt" title="DataGrid" class="easyui-datagrid" style="width:400px;height:250px"
			url="data/datagrid17_data.json"
			fitColumns="true" rownumbers="true" showFooter="true">
		<thead>
			<tr>
				<th field="name" width="80">Product Name</th>
				<th field="price" width="40" align="right">Unit Price</th>
			</tr>
		</thead>
	</table>
</textarea>

<p>The footer rows are same as body rows, so you can display more than one summary information on footer.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid17-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
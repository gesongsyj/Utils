<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create a Complex TreeGrid - jQuery EasyUI</title>
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

<h3>Create a Complex TreeGrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create a Complex TreeGrid
</p>

<p>The TreeGrid can display spreadsheets with muliple columns and complex data on a limited space. This tutorial will demonstrate how table data can be arranged within a splitted grid and multi-row headers that allow you to organize data of any complicity.</p>
<img src="images/treegrid2.png"/>
<div>
	<a href="treegrid2_demo.html" target="_blank">View Demo</a>
</div>

<h4>Build TreeGrid</h4>
<textarea name="code" class="html">
	<table title="Complex TreeGrid" class="easyui-treegrid" style="width:550px;height:250px"
			url="data/treegrid2_data.json"
			rownumbers="true" showFooter="true"
			idField="id" treeField="region">
		<thead frozen="true">
			<tr>
				<th field="region" width="150">Region</th>
			</tr>
		</thead>
		<thead>
			<tr>
				<th colspan="4">2009</th>
				<th colspan="4">2010</th>
			</tr>
			<tr>
				<th field="f1" width="50" align="right">1st qrt.</th>
				<th field="f2" width="50" align="right">2st qrt.</th>
				<th field="f3" width="50" align="right">3st qrt.</th>
				<th field="f4" width="50" align="right">4st qrt.</th>
				<th field="f5" width="50" align="right">1st qrt.</th>
				<th field="f6" width="50" align="right">2st qrt.</th>
				<th field="f7" width="50" align="right">3st qrt.</th>
				<th field="f8" width="50" align="right">4st qrt.</th>
			</tr>
		</thead>
	</table>
</textarea>

<p>As you can see, the usage of treegrid is same as datagrid. Use 'frozen' attribute to define the frozen columns, 'colspan' and 'rowspan' attributes of columns to define multi-columns headers.</p>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="download/easyui-treegrid2-demo.zip">easyui-treegrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
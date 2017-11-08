<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Convert a HTML table to DataGrid - jQuery EasyUI</title>
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

<h3>Convert a HTML table to DataGrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Convert a HTML table to DataGrid
</p>

<p>This example demostrates how we can convert a table into datagrid.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid1_1.png" />

<p>
The datagrid columns is defined in &lt;thead&gt; markup and data is defined in &lt;tbody&gt; markup. 
Make sure to set a field name for every data column, see below example:
</p>

<textarea name="code" class="html">
	<table id="tt" class="easyui-datagrid" style="width:400px;height:auto;">
		<thead>
			<tr>
				<th field="name1" width="50">Col 1</th>
				<th field="name2" width="50">Col 2</th>
				<th field="name3" width="50">Col 3</th>
				<th field="name4" width="50">Col 4</th>
				<th field="name5" width="50">Col 5</th>
				<th field="name6" width="50">Col 6</th>
			</tr>                          
		</thead>                           
		<tbody>                            
			<tr>                           
				<td>Data 1</td>            
				<td>Data 2</td>            
				<td>Data 3</td>            
				<td>Data 4</td>            
				<td>Data 5</td>            
				<td>Data 6</td>            
			</tr>                          
			<tr>                           
				<td>Data 1</td>            
				<td>Data 2</td>            
				<td>Data 3</td>            
				<td>Data 4</td>            
				<td>Data 5</td>            
				<td>Data 6</td>            
			</tr>                          
			<tr>                           
				<td>Data 1</td>            
				<td>Data 2</td>            
				<td>Data 3</td>            
				<td>Data 4</td>            
				<td>Data 5</td>            
				<td>Data 6</td>            
			</tr>                          
			<tr>                           
				<td>Data 1</td>            
				<td>Data 2</td>            
				<td>Data 3</td>            
				<td>Data 4</td>            
				<td>Data 5</td>            
				<td>Data 6</td>            
			</tr>                          
		</tbody>                           
	</table>
</textarea>

<p>Sure, you can defines a complex table header such as:</p>
<textarea name="code" class="html">
	<thead>
		<tr>
			<th field="name1" width="50" rowspan="2">Col 1</th>
			<th field="name2" width="50" rowspan="2">Col 2</th>
			<th field="name3" width="50" rowspan="2">Col 3</th>
			<th colspan="3">Details</th>
		</tr>
		<tr>
			<th field="name4" width="50">Col 4</th>
			<th field="name5" width="50">Col 5</th>
			<th field="name6" width="50">Col 6</th>
		</tr>                          
	</thead>
</textarea>

<p>Now you can see the complex header table is created.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid1_2.png" />


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/easyui-datagrid-demo1.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
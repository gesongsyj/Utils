<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>DataGrid Filter Row - Extension - jQuery EasyUI</title>
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

<h3>DataGrid Filter Row</h3>
<p>
	<a href="/extension/index.php">Extension</a> » DataGrid Filter Row
</p>

<img src="images/datagrid_filter.png"/>

<h4>Include 'datagrid-filter.js' file</h4>
<textarea name="code" class="js">
<script type="text/javascript" src="datagrid-filter.js"></script>
</textarea>

<h4>Enable Filter</h4>
<textarea name="code" class="js">
var dg = $('#dg');
dg.datagrid();	// create datagrid
dg.datagrid('enableFilter');	// enable filter
</textarea>

<h4>Properties</h4>
<p>The properties extend from datagrid, below is the added properties for datagrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>filterBtnIconCls</td>
<td>string</td>
<td>The icon class of filter button.</td>
<td>icon-filter</td>
</tr>
<tr>
<td>filterMenuIconCls</td>
<td>string</td>
<td>The icon class of filter menu item to indicate what item is used.</td>
<td>icon-ok</td>
</tr>
<tr>
<td>remoteFilter</td>
<td>boolean</td>
<td>
True to do remote filter.
When enabled, the 'filterRules' parameter will be sent to remote server.
The 'filterRules' parameter value is achieved by 'filterStringify' function.
</td>
<td>false</td>
</tr>
<tr>
<td>filterDelay</td>
<td>number</td>
<td>Delay to do filter from the last key input event in 'text' filter component.</td>
<td>400</td>
</tr>
<tr>
<td>filterRules</td>
<td>array</td>
<td>The definition of filter rules. Each rule contains 'field','op' and 'value' properties.</td>
<td>[]</td>
</tr>
<tr>
<td>filterStringify</td>
<td>function</td>
<td>The function to strinify the filter rules.</td>
<td>
<pre>
function(data){
	return JSON.stringify(data);
}
</pre>
</td>
</tr>
</table>

<h4>Methods</h4>
<p>
The methods below extend from datagrid.
</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>enableFilter</td>
<td>filters</td>
<td>
Create and enable filter functionality.
The 'filters' parameter is an array of filter configuration.
Each item contains following properties:<br>
1) field: the custom rule on.<br>
2) type: the filter type, possible values are: text,textarea,checkbox,numberbox,validatebox,datebox,combobox,combotree.<br>
3) options: the options of the filter type.<br>
4) op: the filter operation, possible values are: contains,equal,notequal,beginwith,endwith,less,lessorequal,greater,greaterorequal.
<p>Code examples</p>
<pre>
$('#dg').datagrid('enableFilter');
$('#dg').datagrid('enableFilter', [{
	field:'listprice',
	type:'numberbox',
	options:{precision:1},
	op:['equal','notequal','less','greater']
}]);
</pre>
</td>
</tr>
<tr>
<td>addFilterRule</td>
<td>param</td>
<td>
Add a filter rule.
<pre>
$('#dg').datagrid('addFilterRule', {
	field: 'desp',
	op: 'contains',
	value: 'easyui'
});
</pre>
</td>
</tr>
<tr>
<td>removeFilterRule</td>
<td>field</td>
<td>
Remove a filter rule.
If the 'field' parameter is not specified, remove all the filter rules.
</td>
</tr>
<tr>
<td>doFilter</td>
<td>none</td>
<td>
Do the filter based on some filter rules.
</td>
</tr>
<tr>
<td>getFilterComponent</td>
<td>field</td>
<td>Get the filter component on a specified field.</td>
</tr>
</table>

<h4>Download the EasyUI Extension:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/datagrid-filter.zip">datagrid-filter.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
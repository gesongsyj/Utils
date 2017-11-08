<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Calculate two column values in editing DataGrid - jQuery EasyUI</title>
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

<h3>Calculate two column values in editing DataGrid </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Calculate two column values in editing DataGrid 
</p>

<p>In this tutorial you will learn how to include a calculated column in a editing datagrid. A calculated column generally contains some value calculated from one or more other columns.</p>

<img src="images/datagrid15.png"/>
<div>
	<a href="datagrid15_demo.html" target="_blank">View Demo</a>
</div>

<p>First, create the editable datagrid. Here we create some editable columns, the 'listprice','amount' and 'unitcost' columns are defined as numberbox editing type. The calculated column is 'unitcost' field that will be the result of multiplying listprice times amount.</p>
<textarea name="code" class="html">
	<table id="tt" style="width:600px;height:auto"
			title="Editable DataGrid with Calculated Column" iconCls="icon-edit" singleSelect="true"
			idField="itemid" url="data/datagrid_data.json">
		<thead>
			<tr>
				<th field="itemid" width="80">Item ID</th>
				<th field="listprice" width="80" align="right" editor="{type:'numberbox',options:{precision:1}}">List Price</th>
				<th field="amount" width="80" align="right" editor="{type:'numberbox',options:{precision:0}}">Amount</th>
				<th field="unitcost" width="80" align="right" editor="numberbox">Unit Cost</th>
				<th field="attr1" width="150" editor="text">Attribute</th>
				<th field="status" width="60" align="center" editor="{type:'checkbox',options:{on:'P',off:''}}">Status</th>
			</tr>
		</thead>
	</table>
</textarea>

<p>Now we begin an editing action when user click a row.</p>
<textarea name="code" class="js">
	var lastIndex;
	$('#tt').datagrid({
		onClickRow:function(rowIndex){
			if (lastIndex != rowIndex){
				$('#tt').datagrid('endEdit', lastIndex);
				$('#tt').datagrid('beginEdit', rowIndex);
				setEditing(rowIndex);
			}
			lastIndex = rowIndex;
		}
	});
</textarea>

<p>To build the calculated relationship between some columns, we should get the current editors and bind some events for them.</p>
<textarea name="code" class="js">
	function setEditing(rowIndex){
		var editors = $('#tt').datagrid('getEditors', rowIndex);
		var priceEditor = editors[0];
		var amountEditor = editors[1];
		var costEditor = editors[2];
		priceEditor.target.bind('change', function(){
			calculate();
		});
		amountEditor.target.bind('change', function(){
			calculate();
		});
		function calculate(){
			var cost = priceEditor.target.val() * amountEditor.target.val();
			$(costEditor.target).numberbox('setValue',cost);
		}
	}
</textarea>



<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid15-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
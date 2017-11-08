<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Using Virtual Scrolling View to display millions of rows - jQuery EasyUI</title>
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

<h3>Using Virtual Scrolling View to display millions of rows</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Using Virtual Scrolling View to display millions of rows 
</p>
<p>
The virtual scrolling feature of datagrid can be used to display large amounts of records without paging.
When scrolling with the vertical scrollbar, the datagrid executes ajax requests to load and refresh the existing records.
The overall behavior is smooth and with no flicker.
In this tutorial we will create a datagrid and apply the virtual scrolling feature to load data from server.
</p>

<img src="images/datagrid27.png"/>
<div>
	<a href="datagrid27_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create DataGrid</h4>
<p>
To apply the virtual scrolling feature for datagrid, the 'view' property should be set to 'scrollview'.
The user should download the scrollview from datagrid extension and include the scrollview file in page head.
</p>
<textarea name="code" class="html">
<script type="text/javascript" src="http://www.jeasyui.com/easyui/datagrid-scrollview.js"></script>
</textarea>
<textarea name="code" class="html">
<table id="tt" class="easyui-datagrid" style="width:700px;height:300px"
		title="DataGrid - VirtualScrollView"
		data-options="view:scrollview,rownumbers:true,singleSelect:true,
			url:'datagrid27_getdata.php',autoRowHeight:false,pageSize:50">
	<thead>
		<tr>
			<th field="inv" width="80">Inv No</th>
			<th field="date" width="100">Date</th>
			<th field="name" width="80">Name</th>
			<th field="amount" width="80" align="right">Amount</th>
			<th field="price" width="80" align="right">Price</th>
			<th field="cost" width="100" align="right">Cost</th>
			<th field="note" width="110">Note</th>
		</tr>
	</thead>
</table>
</textarea>

<p>
Notice that we don't need to use pagination property, but the pageSize property is required,
with which datagrid will fetch indicated amount records from server when executing ajax request.
</p>

<h4>The Server Code</h4>
<p>datagrid27_getdata.php</p>
<textarea name="code" class="js">
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 50;

$items = array();
date_default_timezone_set('UTC');
for($i=1; $i<=$rows; $i++){
	$index = $i+($page-1)*$rows;
	$amount = rand(50,100);
	$price = rand(10000,20000)/100;
	$items[] = array(
		'inv' => sprintf("INV%04d",$index),
		'date' => date('Y-m-d',time()+24*3600*$i),
		'name' => 'Name' . $index,
		'note' => 'Note' . $index,
		'amount' => $amount,
		'price' => sprintf('%01.2f',$price),
		'cost' => sprintf('%01.2f',$amount*$price)
	);
}
$result = array();
$result['total'] = 8000;
$result['rows'] = $items;
echo json_encode($result);
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid27-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
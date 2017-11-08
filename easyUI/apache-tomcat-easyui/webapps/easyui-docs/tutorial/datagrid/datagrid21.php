<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Expand row in DataGrid to show details - jQuery EasyUI</title>
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

<h3>Expand row in DataGrid to show details</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Expand row in DataGrid to show details
</p>

<p>
The datagrid can change its view to display different effects.
Use the detail view, the datagrid can display expand buttons("+" or "-") on the left of data rows.
Users can expand a row to show additional details.
</p>

<img src="images/datagrid21.png"/>
<div>
	<a href="datagrid21_demo.html" target="_blank">View Demo</a>
</div>

<h4>Step 1: Create DataGrid</h4>
<textarea name="code" class="html">
	<table id="dg" style="width:500px;height:250px"
			url="datagrid8_getdata.php"
			pagination="true" sortName="itemid" sortOrder="desc"
			title="DataGrid - Expand Row"
			singleSelect="true" fitColumns="true">
		<thead>
			<tr>
				<th field="itemid" width="60">Item ID</th>
				<th field="productid" width="80">Product ID</th>
				<th field="listprice" align="right" width="70">List Price</th>
				<th field="unitcost" align="right" width="70">Unit Cost</th>
				<th field="status" width="50" align="center">Status</th>
			</tr>
		</thead>
	</table>
</textarea>

<h4>Step 2: Set Detail View for DataGrid</h4>
<p>To use the detail view, remember to include the view script file to your page header.</p>
<textarea name="code" class="html">
<script type="text/javascript" src="http://www.jeasyui.com/easyui/datagrid-detailview.js"></script>
</textarea>

<textarea name="code" class="js">
$('#dg').datagrid({
	view: detailview,
	detailFormatter:function(index,row){
		return '<div class="ddv" style="padding:5px 0"></div>';
	},
	onExpandRow: function(index,row){
		var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
		ddv.panel({
			border:false,
			cache:false,
			href:'datagrid21_getdetail.php?itemid='+row.itemid,
			onLoad:function(){
				$('#dg').datagrid('fixDetailRowHeight',index);
			}
		});
		$('#dg').datagrid('fixDetailRowHeight',index);
	}
});
</textarea>
<p>
We define the 'detailFormatter' function to tell the datagrid how to render the detail view.
In this case, we return a simple '&lt;div&gt;' element that will acts as the detail content container.
Notice that the detail content is empty. When users click the expand button('+'), the 'onExpandRow' event will be triggered.
So we can write some code to load ajax detail content. 
Finally we call 'fixDetailRowHeight' method to fix the row height when detail content is loaded.
</p>

<h4>Step 3: The Server Code</h4>
<div>datagrid21_getdetail.php</div>
<textarea name="code" class="html">
&lt;?php
	include_once 'conn.php';

	$itemid = mysql_real_escape_string($_REQUEST['itemid']);

	$rs = mysql_query("select * from item where itemid='$itemid'");
	$item = mysql_fetch_array($rs);
?&gt;

<table class="dv-table" border="0" style="width:100%;">
	<tr>
		<td rowspan="3" style="width:60px">
			&lt;?php
				$aa = explode('-',$itemid);
				$serno = $aa[1];
				$img = "images/shirt$serno.gif";
				echo "<img src=\"$img\" style=\"width:60px;margin-right:20px\" />";
			?&gt;
		</td>
		<td class="dv-label">Item ID: </td>
		<td>&lt;?php echo $item['itemid'];?&gt;</td>
		<td class="dv-label">Product ID:</td>
		<td>&lt;?php echo $item['productid'];?&gt;</td>
	</tr>
	<tr>
		<td class="dv-label">List Price: </td>
		<td>&lt;?php echo $item['listprice'];?&gt;</td>
		<td class="dv-label">Unit Cost:</td>
		<td>&lt;?php echo $item['unitcost'];?&gt;</td>
	</tr>
	<tr>
		<td class="dv-label">Attribute: </td>
		<td colspan="3">&lt;?php echo $item['attr1'];?&gt;</td>
	</tr>
</table>
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid21-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Create Custom View for DataGrid - jQuery EasyUI</title>
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

<h3>Create Custom View for DataGrid </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Create Custom View for DataGrid 
</p>

<p>In various suituations you may need to have more flexible layout for your datagrid. Card view is a powerful tool for users. The tool can quickly fetch and show data in datagrid. In the header of the datagrid you can sort data just by clicking on the column header. This tutorial will show you how to create your custom card view.</p>
<img src="images/datagrid16.png"/>
<div>
	<a href="datagrid16_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create Card View</h4>

<p>Extend from the default view of datagrid is the good way to create your custom view. We will create a card view to show some informations for each row.</p>
<textarea name="code" class="js">
	var cardview = $.extend({}, $.fn.datagrid.defaults.view, {
		renderRow: function(target, fields, frozen, rowIndex, rowData){
			var cc = [];
			cc.push('<td colspan=' + fields.length + ' style="padding:10px 5px;border:0;">');
			if (!frozen){
				var aa = rowData.itemid.split('-');
				var img = 'shirt' + aa[1] + '.gif';
				cc.push('<img src="images/' + img + '" style="width:150px;float:left">');
				cc.push('<div style="float:left;margin-left:20px;">');
				for(var i=0; i<fields.length; i++){
					var copts = $(target).datagrid('getColumnOption', fields[i]);
					cc.push('<p><span class="c-label">' + copts.title + ':</span> ' + rowData[fields[i]] + '</p>');
				}
				cc.push('</div>');
			}
			cc.push('</td>');
			return cc.join('');
		}
	});
</textarea>

<h4>Create DataGrid</h4>
<p>Now we create the datagrid using this view.</p>
<textarea name="code" class="html">
	<table id="tt" style="width:500px;height:400px"
			title="DataGrid - CardView" singleSelect="true" fitColumns="true" remoteSort="false"
			url="datagrid8_getdata.php" pagination="true" sortOrder="desc" sortName="itemid">
		<thead>
			<tr>
				<th field="itemid" width="80" sortable="true">Item ID</th>
				<th field="listprice" width="80" sortable="true">List Price</th>
				<th field="unitcost" width="80" sortable="true">Unit Cost</th>
				<th field="attr1" width="150" sortable="true">Attribute</th>
				<th field="status" width="60" sortable="true">Status</th>
			</tr>
		</thead>
	</table>	
</textarea>
<textarea name="code" class="js">
	$('#tt').datagrid({
		view: cardview
	});
</textarea>

<p>Notice that we set the 'view' property and its value to our card view.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid16-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

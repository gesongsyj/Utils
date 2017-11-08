<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Creating a RSS Feed Reader - jQuery EasyUI</title>
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

<h3>Creating a RSS Feed Reader</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Creating a RSS Feed Reader
</p>

<p>
In this tutorial we're going to create a rss reader with jQuery EasyUI framework.
</p>
<img src="rssreader/images/rssreader.jpg"/>
<div>
	<a href="rssreader/index.html" target="_blank">View Demo</a>
</div>


<p>We will use following plugins:</p>
<ul>
	<li>layout: create the application user-interface.</li>
	<li>datagrid: show the rss feed list.</li>
	<li>tree: show the feed channels.</li>
</ul>

<h4>Step 1: Create Layout</h4>
<textarea name="code" class="html">
&lt;body class="easyui-layout"&gt;
	<div region="north" border="false" class="rtitle">
		jQuery EasyUI RSS Reader Demo
	</div>
	<div region="west" title="Channels Tree" split="true" border="false" style="width:200px;background:#EAFDFF;">
		<ul id="t-channels" url="data/channels.json"></ul>
	</div>
	<div region="center" border="false">
		<div class="easyui-layout" fit="true">
			<div region="north" split="true" border="false" style="height:200px">
				<table id="dg" 
						url="get_feed.php" border="false" rownumbers="true"
						fit="true" fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="title" width="100">Title</th>
							<th field="description" width="200">Description</th>
							<th field="pubdate" width="80">Publish Date</th>
						</tr>
					</thead>
				</table>
			</div>
			<div region="center" border="false" style="overflow:hidden">
				<iframe id="cc" scrolling="auto" frameborder="0" style="width:100%;height:100%"></iframe>
			</div>
		</div>
	</div>
&lt;/body&gt;
</textarea>

<h4>Step 2: Handling events for datagrid</h4>
<p>At this point we need to process some events triggered by users.</p>
<textarea name="code" class="js">
$('#dg').datagrid({
	onSelect: function(index,row){
		$('#cc').attr('src', row.link);
	},
	onLoadSuccess:function(){
		var rows = $(this).datagrid('getRows');
		if (rows.length){
			$(this).datagrid('selectRow',0);
		}
	}
});
</textarea>

<p>This example uses 'onSelect' event to display the feed content and 'onLoadSuccess' event to select the first row.</p>

<h4>Step 3: Handling events for tree</h4>
<p>
When tree data is loaded, we need to select the first leaf node, call 'select' method to select that node.
Use the 'onSelect' event to get the selected node, so we can get the corresponding 'url' value.
Finally we call 'load' method of datagrid to refresh the feed list data.
</p>
<textarea name="code" class="js">
$('#t-channels').tree({
	onSelect: function(node){
		var url = node.attributes.url;
		$('#dg').datagrid('load',{
			url: url
		});
	},
	onLoadSuccess:function(node,data){
		if (data.length){
			var id = data[0].children[0].children[0].id;
			var n = $(this).tree('find', id);
			$(this).tree('select', n.target);
		}
	}
});
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="rssreader/downloads/easyui-rssreader-demo.zip">easyui-rssreader-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
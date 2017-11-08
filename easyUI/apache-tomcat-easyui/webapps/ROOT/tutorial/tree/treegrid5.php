<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Lazy loading nodes in TreeGrid - jQuery EasyUI</title>
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

<h3>Lazy loading nodes in TreeGrid</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Lazy loading nodes in TreeGrid 
</p>
<p>
Sometimes we have get full hierarchical treegrid data.
We would like to make treegrid to lazy load nodes level by level.
At first, load only the top level nodes.
And then click the expander icon of a node to load its children nodes.
This tutorial shows how to create a treegrid with lazy loading feature.
</p>
<img src="images/treegrid5.png"/>
<div>
	<a href="treegrid5_demo.html" target="_blank">View Demo</a>
</div>


<h4>Create TreeGrid</h4>
<textarea name="code" class="html">
	<table id="test" title="Folder Browser" class="easyui-treegrid" style="width:700px;height:300px"
			data-options="
				url: 'data/treegrid_data.json',
				method: 'get',
				rownumbers: true,
				idField: 'id',
				treeField: 'name',
				loadFilter: myLoadFilter
			">
		<thead>
			<tr>
				<th field="name" width="220">Name</th>
				<th field="size" width="100" align="right">Size</th>
				<th field="date" width="150">Modified Date</th>
			</tr>
		</thead>
	</table>
</textarea>

<p>
To prevent from loading children nodes, we need to rename the 'children' property for each nodes.
As the code below mentioned, the 'children' property is renamed to 'children1'.
When expand a node, we call 'append' method to load its children nodes data.
</p>

<h4>The 'loadFilter' Code</h4>
<textarea name="code" class="js">
	function myLoadFilter(data,parentId){
		function setData(){
			var todo = [];
			for(var i=0; i<data.length; i++){
				todo.push(data[i]);
			}
			while(todo.length){
				var node = todo.shift();
				if (node.children){
					node.state = 'closed';
					node.children1 = node.children;
					node.children = undefined;
					todo = todo.concat(node.children1);
				}
			}
		}
		
		setData(data);
		var tg = $(this);
		var opts = tg.treegrid('options');
		opts.onBeforeExpand = function(row){
			if (row.children1){
				tg.treegrid('append',{
					parent: row[opts.idField],
					data: row.children1
				});
				row.children1 = undefined;
				tg.treegrid('expand', row[opts.idField]);
			}
			return row.children1 == undefined;
		};
		return data;
	}
</textarea>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="download/easyui-treegrid5-demo.zip">easyui-treegrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
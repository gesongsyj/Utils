<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Append nodes to tree - jQuery EasyUI</title>
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

<h3>Append nodes to tree </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Append nodes to tree 
</p>

<p>This tutorial show you how to append nodes to tree. We will create a Foods tree that contains fruit and vegetable node, and then add some other fruits to the existing fruit node.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/tree/tree3_1.png"/>

<h4>Create foods tree</h4>
<p>First of all, we create the foods tree, the code looks like this:</p>
<textarea name="code" class="html">
	<div style="width:200px;height:auto;border:1px solid #ccc;">
		<ul id="tt" class="easyui-tree" url="tree_data.json"></ul>
	</div>
</textarea>
<p>Notice that the tree component is defined in &lt;ul&gt; markup and the tree node data is loaded from URL "tree_data.json".</p>

<h4>Get parent node</h4>
<p>Then we select the fruit node by clicking the node, to which we will append some other fruits data. Invoke the getSelected method to get the handle on node:</p>
<textarea name="code" class="js">
	var node = $('#tt').tree('getSelected');
</textarea>

<p>The return result of getSelected method is a javascript object that has id,text,attributes and target properties. The target property is a DOM object that refrence to the selected node, with which the append method will use to append children nodes.</p>

<h4>Append nodes</h4>
<textarea name="code" class="js">
	var node = $('#tt').tree('getSelected');
	if (node){
		var nodes = [{
			"id":13,
			"text":"Raspberry"
		},{
			"id":14,
			"text":"Cantaloupe"
		}];
		$('#tt').tree('append', {
			parent:node.target,
			data:nodes
		});
	}
</textarea>

<p>When append some fruits, you will see:</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/tree/tree3_2.png"/>

<p>As you can see, using tree plugin of easyui to append node is not difficult.</p>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/tree/easyui-tree-demo3.zip">easyui-tree-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
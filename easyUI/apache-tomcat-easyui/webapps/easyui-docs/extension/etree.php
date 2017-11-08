<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Editable Tree - Extension - jQuery EasyUI</title>
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

<h3>Editable Tree</h3>
<p>
	<a href="/extension/index.php">Extension</a> » Editable Tree
</p>

<img src="images/etree.png"/>

<h4>Create Tree</h4>
<textarea name="code" class="js">
	<ul id="tt"></ul>
	$('#tt').etree({
		url: 'tree_data.json',
		createUrl: ...,
		updateUrl: ...,
		destroyUrl: ...,
		dndUrl: ...
	});
</textarea>

<p>Set the url,createUrl,updateUrl,destroyUrl and dndUrl properties to automatic synchronization data from client to server.</p>
<ul>
<li>url: return tree data.</li>
<li>
createUrl: When create a new node, the tree will post a parameter named 'parentId' that indicated the parent node id to server.
The server should return the added node data. The code below shows the added node data example:
<pre>
{"id":1,"text":"new node"}
</pre>
</li>
<li>
updateUrl: When update a node, the tree will post 'id' and 'text' parameters to server.
The server do updating action and return the updated node data.
</li>
<li>
destroyUrl: When destroy a node, the tree will post 'id' parameter to server.
The server return the {"success":true} data.
</li>
<li>
dndUrl: When drag and drop a node, the tree will post the following parameters to server:<br/>
id - the dragged node id.<br/>
targetId - the node to be dropped id.<br/>
point -  indicate the drop operation, posible values are: 'append','top' or 'bottom'.<br/>
The server do some actions and return the {"success":true} data.
</li>
</ul>
<h4>Methods</h4>
<p>
The methods extend from tree, below is the added methods for etree.
</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>options</td>
<td>none</td>
<td>Return the options object.</td>
</tr>
<tr>
<td>create</td>
<td>none</td>
<td>Create a new node.</td>
</tr>
<tr>
<td>edit</td>
<td>none</td>
<td>Edit the current selected node.</td>
</tr>
<tr>
<td>destroy</td>
<td>none</td>
<td>Destroy the current selected node.</td>
</tr>
</table>

<h4>Download the EasyUI Extension:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/jquery-easyui-etree.zip">jquery-easyui-etree.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>tree - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-tree"]').each(function(){
					var data = $(this).val();
					data = data.replace(/(\r\n|\r|\n)/g, '\n');
					if (data.indexOf('\t') == 0){
						data = data.replace(/^\t/, '');
						data = data.replace(/\n\t/g, '\n');
					}
					data = data.replace(/\t/g, '    ');
					var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);
					pre.text(data);
					$(this).remove();
				});
				prettyPrint();
			});
		</script>
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
			

<div style="padding:10px">

<h3>Tree</h3>
<p>Override defaults with $.fn.tree.defaults.</p>
<p>
The tree displays hierarchical data in a tree structure in a web page.
It provides users expand, collapse, drag and drop, editing and async loading functionality.
</p>
<img src="images/tree.png"/>

<h4>Dependencies</h4>
<ul>
	<li>draggable</li>
	<li>droppable</li>
</ul>

<h4>Usage Example</h4>
<p>
Tree can be definded in &lt;ul&gt; element.
The markup can defines leaf and children. The nodes will be &lt;li&gt; elements within ul list.
The following shows the elements that will be used to make the tree node nested within the ul elements.
</p>
<textarea name="code-tree" class="html">
<ul id="tt" class="easyui-tree">
	<li>
		<span>Folder</span>
		<ul>
			<li>
				<span>Sub Folder 1</span>
				<ul>
					<li><span><a href="#">File 11</a></span></li>
					<li><span>File 12</span></li>
					<li><span>File 13</span></li>
				</ul>
			</li>
			<li><span>File 2</span></li>
			<li><span>File 3</span></li>
		</ul>
	</li>
	<li><span>File21</span></li>
</ul>
</textarea>
<p>Tree can also be defined in an empty &lt;ul&gt; element and load data using javascript.</p>
<textarea name="code-tree" class="html">
<ul id="tt"></ul>
</textarea>
<textarea name="code-tree" class="js">
$('#tt').tree({
	url:'tree_data.json'
});
</textarea>

<p>Use loadFilter to process the json data from ASP.NET web services.</p>
<textarea name="code-tree" class="js">
$('#tt').tree({
	url: ...,
	loadFilter: function(data){
		if (data.d){
			return data.d;
		} else {
			return data;
		}
	}
});
</textarea>

<h4>Tree Data Format</h4>
<p>Every node can contains following properties:</p>
<ul>
<li>id: node id, which is important to load remote data</li>
<li>text: node text to show</li>
<li>state: node state, 'open' or 'closed', default is 'open'. When set to 'closed', the node have children nodes and will load them from remote site</li>
<li>checked: Indicate whether the node is checked selected.</li>
<li>attributes: custom attributes can be added to a node</li>

<li>children: an array nodes defines some children nodes</li>
</ul>
<p>Some example:</p>
<textarea name="code-tree" class="js">
[{
	"id":1,
	"text":"Folder1",
	"iconCls":"icon-save",
	"children":[{
		"text":"File1",
		"checked":true
	},{
		"text":"Books",
		"state":"open",
		"attributes":{
			"url":"/demo/book/abc",
			"price":100
		},
		"children":[{
			"text":"PhotoShop",
			"checked":true
		},{
			"id": 8,
			"text":"Sub Bookds",
			"state":"closed"
		}]
	}]
},{
	"text":"Languages",
	"state":"closed",
	"children":[{
		"text":"Java"
	},{
		"text":"C#"
	}]
}]
</textarea>

<h4>The Async Tree</h4>
<p>
The tree supports the built-in async loading mode, with which users create an empty tree,
then specify a server side that dynamically returns the JSON data to use to populate the tree with asynchronously and on demand.
Here is an example:
</p>
<textarea name="code-tree" class="html">
<ul class="easyui-tree" data-options="url:'get_data.php'"></ul>
</textarea>
<p>
The tree is loaded with the URL 'get_data.php'.
The child nodes to be loaded dependent on the parent node state.
When expand a closed node, if the node has no child nodes loaded,
it will send node id value as the http request parameter named 'id' to server via the URL defined above to retrieve child nodes. 
</p>
<p>Looks at the data returned from server:</p>
<textarea name="code-tree" class="js">
[{
	"id": 1,
	"text": "Node 1",
	"state": "closed",
	"children": [{
		"id": 11,
		"text": "Node 11"
	},{
		"id": 12,
		"text": "Node 12"
	}]
},{
	"id": 2,
	"text": "Node 2",
	"state": "closed"
}]
</textarea>
<p>
The node 1 and node 2 are closed, when expand the node 1, it will directly show its child nodes.
When expand node 2, it will send the value(2) to server to retrieve child nodes.
</p>
<p>
This tutorial
<a href="../tutorial/tree/tree2.php" target="_blank">Create Async Tree</a>
shows how to write server code to return the tree data on demand.
</p>

<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>

<td>url</td>
<td>string</td>
<td>a URL to retrieve remote data.</td>
<td>null</td>
</tr>
<tr>
<td>method</td>
<td>string</td>
<td>The http method to retrieve data.</td>
<td>post</td>

</tr>
<tr>
<td>animate</td>
<td>boolean</td>
<td>Defines if to show animation effect when node expand or collapse.</td>
<td>false</td>
</tr>
<tr>
<td>checkbox</td>
<td>boolean</td>
<td>Defines if to show the checkbox before every node.</td>

<td>false</td>
</tr>
<tr>
<td>cascadeCheck</td>
<td>boolean</td>
<td>Defines if to cascade check.</td>
<td>true</td>
</tr>
<tr>
<td>onlyLeafCheck</td>
<td>boolean</td>

<td>Defines if to show the checkbox only before leaf node.</td>
<td>false</td>
</tr>
<tr>
<td>lines</td>
<td>boolean</td>
<td>Defines if to show tree lines.</td>
<td>false</td>
</tr>
<tr>
<td>dnd</td>
<td>boolean</td>
<td>Defines if to enable drag and drop.</td>
<td>false</td>
</tr>
<tr>
<td>data</td>

<td>array</td>
<td>
The node data to be loaded.
<pre>
$('#tt').tree({
	data: [{
		text: 'Item1',
		state: 'closed',
		children: [{
			text: 'Item11'
		},{
			text: 'Item12'
		}]
	},{
		text: 'Item2'
	}]
});
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>formatter</td>
<td>function(node)</td>
<td>
Defines how to render the node's text.
<p>Code example:</p>
<pre>
$('#tt').tree({
	formatter:function(node){
		return node.text;
	}
});
</pre>
</td>
</tr>
<tr>
<td>loader</td>
<td>function(param,success,error)</td>
<td>
Defines how to load data from remote server. Return false can abort this action.
This function takes the following parameters:<br/>
param: the parameter object to pass to remote server.<br/>
success(data): the callback function that will be called when retrieve data successfully.<br/>
error(): the callback function that will be called when failed to retrieve data.
</td>
<td>json loader</td>
</tr>
<tr>
<td>loadFilter</td>
<td>function(data,parent)</td>
<td>
Return the filtered data to display. The returned data is in standard tree format.
This function takes the following parameters:<br/>
data: the original data to be loaded.<br/>
parent: DOM object, indicate the parent node.
</td>
<td></td>
</tr>
</table>

<h4>Events</h4>
<p>Many events callback function can take the 'node' parameter, which contains following properties:</p>
<ul>
<li>id: An identity value bind to the node.</li>
<li>text: Text to be showed.</li>
<li>iconCls: The css class to display icon.</li>
<li>checked: Whether the node is checked.</li>
<li>state: The node state, 'open' or 'closed'.</li>
<li>attributes: Custom attributes bind to the node.</li>
<li>target: Target DOM object.</li>
</ul>

<table class="doc-table">

<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onClick</td>
<td>node</td>
<td>
Fires when user click a node. Code example:
<pre style="color:#006600">
$('#tt').tree({
	onClick: function(node){
		alert(node.text);  // alert node text property when clicked
	}
});
</pre>
</td>
</tr>
<tr>
<td>onDblClick</td>
<td>node</td>
<td>Fires when user dblclick a node.</td>
</tr>

<tr>
<td>onBeforeLoad</td>
<td>node, param</td>
<td>Fires before a request is made to load data, return false to cancel this load action.</td>
</tr>
<tr>
<td>onLoadSuccess</td>
<td>node, data</td>
<td>Fires when data loaded successfully.</td>
</tr>
<tr>

<td>onLoadError</td>
<td>arguments</td>
<td>Fires when data loaded fail, the arguments parameter is same as the 'error' function of jQuery.ajax.</td>
</tr>
<tr>
<td>onBeforeExpand</td>
<td>node</td>
<td>Fires before node is expanded, return false to cancel this expand action.</td>
</tr>
<tr>
<td>onExpand</td>

<td>node</td>
<td>Fires when node is expanded.</td>
</tr>
<tr>
<td>onBeforeCollapse</td>
<td>node</td>
<td>Fires before node is collapsed, return false to cancel this collapse action.</td>
</tr>
<tr>
<td>onCollapse</td>
<td>node</td>

<td>Fires when node is collapsed.</td>
</tr>
<tr>
<td>onBeforeCheck</td>
<td>node, checked</td>
<td>Fires before users click the checkbox, return false to cancel this check action. This event is available since version 1.3.1.</td>
</tr>
<tr>
<td>onCheck</td>
<td>node, checked</td>
<td>Fires when users click the checkbox.</td>
</tr>
<tr>
<td>onBeforeSelect</td>
<td>node</td>
<td>Fires before node is selected, return false to cancel this select action.</td>

</tr>
<tr>
<td>onSelect</td>
<td>node</td>
<td>Fires when node is selected.</td>
</tr>
<tr>
<td>onContextMenu</td>
<td>e, node</td>
<td>
Fires when node is right clicked. Code example:
<pre style="color:#006600">
// right click node and then display the context menu
$('#tt').tree({
	onContextMenu: function(e, node){
		e.preventDefault();
		// select the node
		$('#tt').tree('select', node.target);
		// display context menu
		$('#mm').menu('show', {
			left: e.pageX,
			top: e.pageY
		});
	}
});

// the context menu is defined as below:
&lt;div id="mm" class="easyui-menu" style="width:120px;"&gt;
	&lt;div onclick="append()" data-options="iconCls:'icon-add'"&gt;Append&lt;/div&gt;
	&lt;div onclick="remove()" data-options="iconCls:'icon-remove'"&gt;Remove&lt;/div&gt;
&lt;/div&gt;
</pre>
</td>
</tr>
<tr>
<td>onBeforeDrag</td>
<td>node</td>
<td>
Fires when a node's dragging starts, return false to deny drag.
This event is available since version 1.3.2.
</td>
</tr>
<tr>
<td>onStartDrag</td>
<td>node</td>
<td>Fires when start dragging a node. This event is available since version 1.3.2.</td>
</tr>
<tr>
<td>onStopDrag</td>
<td>node</td>
<td>Fires after stop dragging a node. This event is available since version 1.3.2.</td>
</tr>
<tr>
<td>onDragEnter</td>
<td>target, source</td>
<td>
Fires when a node is dragged enter some target node that can be dropped to.
return false to deny drop.<br/>
target: the target node element to be dropped.<br/>
source: the source node being dragged.<br/>
This event is available since version 1.3.2.
</td>
</tr>
<tr>
<td>onDragOver</td>
<td>target, source</td>
<td>
Fires when a node is dragged over some target node that can be dropped to,
return false to deny drop.<br/>
target: the target node element to be dropped.<br/>
source: the source node being dragged.<br/>
This event is available since version 1.3.2.
</td>
</tr>
<tr>
<td>onDragLeave</td>
<td>target, source</td>
<td>
Fires when a node is dragged leave some target node that can be dropped to.<br/>
target: the target node element to be dropped.<br/>
source: the source node being dragged.<br/>
This event is available since version 1.3.2.
</td>
</tr>
<tr>
<td>onBeforeDrop</td>
<td>target,source,point</td>
<td>
Fires before a node is dropped, return false to deny drop.<br />
target: DOM object, The node being targeted for the drop.<br />
source: the source node.<br />
point: indicate the drop operation, posible values are: 'append','top' or 'bottom'.<br/>
This event is available since version 1.3.3.
</td>
</tr>
<tr>
<td>onDrop</td>
<td>target,source,point</td>
<td>Fires when a node is dropped.<br />
target: DOM object, The node being targeted for the drop.<br />
source: the source node.<br />
point: indicate the drop operation, posible values are: 'append','top' or 'bottom'.</td>
</tr>
<tr>
<td>onBeforeEdit</td>

<td>node</td>
<td>Fires before edit node.</td>
</tr>
<tr>
<td>onAfterEdit</td>
<td>node</td>
<td>Fires after edit node.</td>
</tr>
<tr>
<td>onCancelEdit</td>
<td>node</td>

<td>Fires when cancel the editing action.</td>
</tr>
</table>

<h4>Methods</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>

<th><strong>Description</strong></th>
</tr>
<tr>
<td>options</td>
<td>none</td>
<td>Return the options of tree.</td>
</tr>
<tr>
<td>loadData</td>
<td>data</td>
<td>Load the tree data.</td>

</tr>
<tr>
<td>getNode</td>
<td>target</td>
<td>get the specified node object.</td>
</tr>
<tr>
<td>getData</td>
<td>target</td>
<td>get the specified node data, including its children.</td>
</tr>

<tr>
<td>reload</td>
<td>target</td>
<td>Reload tree data.</td>
</tr>
<tr>
<td>getRoot</td>
<td>none</td>
<td>Get the root node, return node object</td>
</tr>
<tr>

<td>getRoots</td>
<td>none</td>
<td>Get the root nodes, return node array.</td>
</tr>
<tr>
<td>getParent</td>
<td>target</td>
<td>Get the parent node, the target parameter indicate the node DOM object.</td>
</tr>
<tr>
<td>getChildren</td>

<td>target</td>
<td>Get the children nodes, the target parameter indicate the node DOM object.</td>
</tr>
<tr>
<td>getChecked</td>
<td>state</td>
<td>
Get the checked nodes. The state available values are: 'checked','unchecked','indeterminate'.
If the state is not assigned, return the 'checked' nodes.
<p>Code example:</p>
<pre>
var nodes = $('#tt').tree('getChecked');	// get checked nodes
var nodes = $('#tt').tree('getChecked', 'unchecked');	// get unchecked nodes
var nodes = $('#tt').tree('getChecked', 'indeterminate');	// get indeterminate nodes
var nodes = $('#tt').tree('getChecked', ['checked','indeterminate']);	// get checked and indeterminate nodes
</pre>
</td>
</tr>
<tr>
<td>getSelected</td>
<td>none</td>

<td>Get the selected node and return it, if no node selected return null.</td>
</tr>
<tr>
<td>isLeaf</td>
<td>target</td>
<td>Determine the specified node is leaf, the target parameter indicate the node DOM object.</td>
</tr>
<tr>
<td>find</td>
<td>id</td>
<td>
Find the specifed node and return the node object. Code example:
<pre style="color:#006600">
// find a node and then select it
var node = $('#tt').tree('find', 12);
$('#tt').tree('select', node.target);
</pre>
</td>

</tr>
<tr>
<td>select</td>
<td>target</td>
<td>Select a node, the target parameter indicate the node DOM object.</td>
</tr>
<tr>
<td>check</td>
<td>target</td>
<td>Set the specified node to checked.</td>
</tr>

<tr>
<td>uncheck</td>
<td>target</td>
<td>Set the specified node to unchecked.</td>
</tr>
<tr>
<td>collapse</td>
<td>target</td>
<td>Collapse a node, the target parameter indicate the node DOM object.</td>
</tr>
<tr>

<td>expand</td>
<td>target</td>
<td>
Expand a node, the target parameter indicate the node DOM object.
When node is closed and has no child nodes, 
the node id value(named as 'id' parameter) will be sent to server to request child nodes data.
</td>
</tr>
<tr>
<td>collapseAll</td>
<td>target</td>
<td>Collapse all nodes.</td>
</tr>
<tr>
<td>expandAll</td>

<td>target</td>
<td>Expand all nodes.</td>
</tr>
<tr>
<td>expandTo</td>
<td>target</td>
<td>Expand from root to specified node.</td>
</tr>
<tr>
<td>scrollTo</td>
<td>target</td>
<td>Scroll to the specified node. This method is available since version 1.3.4.</td>
</tr>
<tr>
<td>append</td>
<td>param</td>

<td>Append some children nodes to a parent node. param parameter has two properties:<br />
parent: DOM object, the parent node to append to, if not assigned, append as root nodes.<br />
data: array, the nodes data.
Code example:
<pre>
// append some nodes to the selected node
var selected = $('#tt').tree('getSelected');
$('#tt').tree('append', {
	parent: selected.target,
	data: [{
		id: 23,
		text: 'node23'
	},{
		text: 'node24',
		state: 'closed',
		children: [{
			text: 'node241'
		},{
			text: 'node242'
		}]
	}]
});
</pre>
</td>
</tr>
<tr>
<td>toggle</td>
<td>target</td>
<td>Toggles expanded/collapsed state of the node, the target parameter indicate the node DOM object.</td>
</tr>
<tr>
<td>insert</td>

<td>param</td>
<td>Insert a node to before or after specified node. the 'param' parameter contains following properties:<br />
before: DOM object, the node to insert before.<br />
after: DOM object, the node to insert after.<br />
data: object, the node data.
<p>The code below shows how to insert a new node before the selected node:</p>
<pre>
var node = $('#tt').tree('getSelected');
if (node){
	$('#tt').tree('insert', {
		before: node.target,
		data: {
			id: 21,
			text: 'node text'
		}
	});
}
</pre>
</td>
</tr>
<tr>
<td>remove</td>
<td>target</td>
<td>Remove a node and it's children nodes, the target parameter indicate the node DOM object.</td>

</tr>
<tr>
<td>pop</td>
<td>target</td>
<td>Pop a node and it's children nodes, the method is same as remove but return the removed node data.</td>
</tr>
<tr>
<td>update</td>
<td>param</td>
<td>Update the specified node. The 'param' parameter has following properties:<br />
target(DOM object, the node to be updated),id,text,iconCls,checked,etc.
<p>Code example:</p>
<pre>
// update the selected node text
var node = $('#tt').tree('getSelected');
if (node){
	$('#tt').tree('update', {
		target: node.target,
		text: 'new text'
	});
}
</pre>
</td>

</tr>
<tr>
<td>enableDnd</td>
<td>none</td>
<td>Enable drag and drop feature.</td>
</tr>
<tr>
<td>disableDnd</td>
<td>none</td>
<td>Disable drag and drop feature.</td>
</tr>

<tr>
<td>beginEdit</td>
<td>target</td>
<td>Begin editing a node.</td>
</tr>
<tr>
<td>endEdit</td>
<td>target</td>
<td>End editing a node.</td>
</tr>
<tr>

<td>cancelEdit</td>
<td>target</td>
<td>Cancel editing a node.</td>
</tr>
</table>

</div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
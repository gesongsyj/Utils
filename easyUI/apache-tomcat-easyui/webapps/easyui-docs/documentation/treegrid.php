<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>treegrid - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-treegrid"]').each(function(){
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

<h3>TreeGrid</h3>
<p>Extend from $.fn.datagrid.defaults. Override defaults with $.fn.treegrid.defaults.</p>
<p>
The treegrid is used to show hierarchical data in grid.
It is based on datagrid and combines treeview and editable grid.
The treegrid allows you to create customizable, async expandable rows and show hierarchical data in muliple columns.
</p>
<img src="../tutorial/tree/images/treegrid2.png"/>

<h4>Dependencies</h4>
<ul>
	<li>datagrid</li>
</ul>

<h4>Usage Example</h4>
<p>
Create treegrid in HTML markup.
For the most part, the treegrid follows the same structure and formatting as datagrid.
</p>
<textarea name="code-treegrid" class="html">
<table id="tt" class="easyui-treegrid" style="width:600px;height:400px"
		data-options="url:'get_data.php',idField:'id',treeField:'name'">
	<thead>
		<tr>
			<th data-options="field:'name',width:180">Task Name</th>
			<th data-options="field:'persons',width:60,align:'right'">Persons</th>
			<th data-options="field:'begin',width:80">Begin Date</th>
			<th data-options="field:'end',width:80">End Date</th>
		</tr>
	</thead>
</table>
</textarea>
<p>Create treegrid using javascript.</p>
<textarea name="code-treegrid" class="html">
<table id="tt" style="width:600px;height:400px"></table>
</textarea>
<textarea name="code-treegrid" class="js">
$('#tt').treegrid({
	url:'get_data.php',
	idField:'id',
	treeField:'name',
	columns:[[
		{title:'Task Name',field:'name',width:180},
		{field:'persons',title:'Persons',width:60,align:'right'},
		{field:'begin',title:'Begin Date',width:80},
		{field:'end',title:'End Date',width:80}
	]]
});
</textarea>

<h4>Properties</h4>
<p>The properties extend from datagrid, below is the added properties for treegrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>idField</td>
<td>string</td>
<td>Defines the key field to identify a tree node. required.</td>
<td>null</td>
</tr>
<tr>
<td>treeField</td>
<td>string</td>
<td>Defines the tree node field. required.</td>
<td>null</td>
</tr>
<tr>
<td>animate</td>
<td>boolean</td>
<td>Defines if to show animation effect when node expand or collapse.</td>
<td>false</td>
</tr>
<tr>
<td>loader</td>
<td>function(param,success,error)</td>
<td>
Defines how to load data from remote server. Return false can abort this action.
This function takes following parameters:<br/>
param: the parameter object to pass to remote server.<br/>
success(data): the callback function that will be called when retrieve data successfully.<br/>
error(): the callback function that will be called when failed to retrieve data.
</td>
<td>json loader</td>
</tr>
<tr>
<td>loadFilter</td>
<td>function(data,parentId)</td>
<td>
Return the filtered data to display.
</td>
<td></td>
</tr>

</table>

<br/>
<h4>Events</h4>
<p>The events extend from datagrid, below is the added events for treegrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>

<th><strong>Description</strong></th>
</tr>
<tr>
<td>onClickRow</td>
<td>row</td>
<td>Fires when user click a node.</td>
</tr>
<tr>
<td>onDblClickRow</td>
<td>row</td>
<td>Fires when user dblclick a node.</td>

</tr>
<tr>
<td>onClickCell</td>
<td>field,row</td>
<td>Fires when user click a cell.</td>
</tr>
<tr>
<td>onDblClickCell</td>
<td>field,row</td>
<td>Fires when user dblclick a cell.</td>
</tr>
<tr>
<td>onBeforeLoad</td>
<td>row, param</td>
<td>Fires before a request is made to load data, return false to cancel this load action.</td>
</tr>
<tr>
<td>onLoadSuccess</td>
<td>row, data</td>
<td>Fires when data loaded successfully.</td>
</tr>

<tr>
<td>onLoadError</td>
<td>arguments</td>
<td>Fires when data loaded fail, the arguments parameter is same as the 'error' function of jQuery.ajax.</td>
</tr>
<tr>
<td>onBeforeExpand</td>
<td>row</td>
<td>Fires before node is expanded, return false to cancel this expand action.</td>
</tr>
<tr>

<td>onExpand</td>
<td>row</td>
<td>Fires when node is expanded.</td>
</tr>
<tr>
<td>onBeforeCollapse</td>
<td>row</td>
<td>Fires before node is collapsed, return false to cancel this collapse action.</td>
</tr>
<tr>
<td>onCollapse</td>

<td>row</td>
<td>Fires when node is collapsed.</td>
</tr>
<tr>
<td>onContextMenu</td>
<td>e, row</td>
<td>Fires when node is right clicked.</td>
</tr>
<tr>
<td>onBeforeEdit</td>
<td>row</td>

<td>Fires when user start editing a node.</td>
</tr>
<tr>
<td>onAfterEdit</td>
<td>row,changes</td>
<td>Fires when user finish editing.</td>
</tr>
<tr>
<td>onCancelEdit</td>
<td>row</td>
<td>Fires when user cancel editing a node.</td>

</tr>
</table>

<br/>
<h4>Methods</h4>
<p>
Many methods take a parameter named 'id', this parameter indicate the tree node value.
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
<td>Return the options of treegrid.</td>
</tr>
<tr>
<td>resize</td>
<td>options</td>
<td>Set treegrid size, the options contains two properties:<br />
width: the new width of treegrid.<br />

height: the new height of treegrid.</td>
</tr>
<tr>
<td>fixRowHeight</td>
<td>id</td>
<td>fix the specified row height.</td>
</tr>
<tr>
<td>loadData</td>
<td>data</td>
<td>Load the treegrid data.</td>

</tr>
<tr>
<td>load</td>
<td>param</td>
<td>
Load and show the first page. This method is available since version 1.3.4.
<p>Code example:</p>
<pre>
// load and send some request parameters
$('#tg').treegrid('load', {
	q: 'abc',
	name: 'name1'
});
</pre>
</td>
</tr>
<tr>
<td>reload</td>
<td>id</td>
<td>
Reload treegrid data.
If the 'id' parameter is passed, reload the specified tree row, otherwise reload all tree rows.
<p>Code example:</p>
<pre>
$('#tt').treegrid('reload', 2);	// reload the row which value is equals to 2
$('#tt').treegrid('reload');	// reload the all rows
$('#tt').treegrid('reload', {id:2, q:'abc'});  // reload the specified row with 'q' parameter passing to server
</pre>
</td>
</tr>
<tr>
<td>reloadFooter</td>
<td>footer</td>
<td>Reload footer data.</td>
</tr>

<tr>
<td>getData</td>
<td>none</td>
<td>Get the loaded data.</td>
</tr>
<tr>
<td>getFooterRows</td>
<td>none</td>
<td>Get the footer data.</td>
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

<td>id</td>
<td>Get the parent node.</td>
</tr>
<tr>
<td>getChildren</td>
<td>id</td>
<td>Get the children nodes.</td>
</tr>
<tr>
<td>getSelected</td>
<td>none</td>

<td>Get the selected node and return it, if no node selected return null.</td>
</tr>
<tr>
<td>getSelections</td>
<td>none</td>
<td>Get all selected nodes.</td>
</tr>
<tr>
<td>getLevel</td>
<td>id</td>
<td>Get the specified node level.</td>

</tr>
<tr>
<td>find</td>
<td>id</td>
<td>Find the specifed node and return the node data.</td>
</tr>
<tr>
<td>select</td>
<td>id</td>
<td>Select a node.</td>
</tr>

<tr>
<td>unselect</td>
<td>id</td>
<td>Unselect a node.</td>
</tr>
<tr>
<td>selectAll</td>
<td>none</td>
<td>Select all nodes.</td>
</tr>
<tr>

<td>unselectAll</td>
<td>none</td>
<td>Unselect all nodes.</td>
</tr>
<tr>
<td>collapse</td>
<td>id</td>
<td>Collapse a node.</td>
</tr>
<tr>
<td>expand</td>

<td>id</td>
<td>Expand a node.</td>
</tr>
<tr>
<td>collapseAll</td>
<td>id</td>
<td>Collapse all nodes.</td>
</tr>
<tr>
<td>expandAll</td>
<td>id</td>

<td>Expand all nodes.</td>
</tr>
<tr>
<td>expandTo</td>
<td>id</td>
<td>Expand from root to specified node.</td>
</tr>
<tr>
<td>toggle</td>
<td>id</td>
<td>Toggles expanded/collapsed state of the node.</td>

</tr>
<tr>
<td>append</td>
<td>param</td>
<td>
Append nodes to a parent node. The 'param' parameter contains following properties:<br />
parent: the parent node id, if not assigned, append as root nodes.<br />
data: array, the nodes data.<br/>
Code example:
<pre>
// append some nodes to the selected row
var node = $('#tt').treegrid('getSelected');
$('#tt').treegrid('append',{
	parent: node.id,  // the node has a 'id' value that defined through 'idField' property
	data: [{
		id: '073',
		name: 'name73'
	}]
});
</pre>
</td>
</tr>
<tr>
<td>insert</td>
<td>param</td>
<td>
Insert a new node to specified node. The 'param' parameter contains following properties:<br/>
before: the id value of node to insert before.<br/>
after: the id value of node to insert after.<br/>
data: the new node data.
<p>Code example:</p>
<pre>
// insert a new node before the selected node
var node = $('#tt').treegrid('getSelected');
if (node){
	$('#tt').treegrid('insert', {
		before: node.id,
		data: {
			id: 38,
			name: 'name38'
		}
	});
}
</pre>
This method is available since version 1.3.1.
</td>
</tr>
<tr>
<td>remove</td>
<td>id</td>
<td>Remove a node and it's children nodes.</td>
</tr>
<tr>
<td>pop</td>
<td>id</td>
<td>
Pop and return a node data including its children after remove that node.
This method is available since version 1.3.1.
</td>
</tr>
<tr>
<td>refresh</td>
<td>id</td>
<td>Refresh the specified node.</td>
</tr>
<tr>
<td>update</td>
<td>param</td>
<td>
Update the specified node. The param contains following properties:<br/>
id: the node id that indicate the node to be updated.<br/>
row: the new row data.
<p>Code example:</p>
<pre>
$('#tt').treegrid('update',{
	id: 2,
	row: {
		name: 'new name',
		iconCls: 'icon-save'
	}
});
</pre>
This method is available since version 1.3.1.
</td>
</tr>
<tr>
<td>beginEdit</td>
<td>id</td>
<td>Begin editing a node.</td>

</tr>
<tr>
<td>endEdit</td>
<td>id</td>
<td>End editing a node.</td>
</tr>
<tr>
<td>cancelEdit</td>
<td>id</td>
<td>Cancel editing a node.</td>
</tr>
<tr>
<td>getEditors</td>
<td>id</td>
<td>Get the specified row editors. Each editor has the following properties:<br />
actions: the actions that the editor can do.<br />
target: the target editor jQuery object.<br />

field: the field name.<br />
type: the editor type.</td>
</tr>
<tr>
<td>getEditor</td>
<td>param</td>
<td>Get the specified editor, the param contains two properties:<br />
id: the row node id.<br />
field: the field name.</td>
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
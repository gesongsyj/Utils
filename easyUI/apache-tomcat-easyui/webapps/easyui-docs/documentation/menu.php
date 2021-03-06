<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>menu - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-menu"]').each(function(){
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

<h3>Menu</h3>
<p>Override defaults with $.fn.menu.defaults.</p>
<p>
The menu is usually used for context menus. It is the base component for building other menu component such as menubutton and splitbutton.
It also can be used for both navigation and executing commands.

</p>
<img src="images/menu.png"/>

<h4>Usage Example</h4>
<h5>Create Menu</h5>
<p>
Create menu via markup should add 'easyui-menu' class to &lt;div/&gt; markup.
Each menu item is created via &lt;div/&gt; markup. 
We can add 'iconCls' attribute to menu item to define a icon that will display on left of menu item.
Add 'menu-sep' class to menu item will generate a menu seperator.

</p>
<textarea name="code-menu" class="html">
<div id="mm" class="easyui-menu" style="width:120px;">
	<div>New</div>
	<div>
		<span>Open</span>
		<div style="width:150px;">
			<div><b>Word</b></div>
			<div>Excel</div>
			<div>PowerPoint</div>
		</div>
	</div>
	<div data-options="iconCls:'icon-save'">Save</div>
	<div class="menu-sep"></div>
	<div>Exit</div>
</div>
</textarea>
<p>Create menu programatically and listening the 'onClick' event.</p>
<textarea name="code-menu" class="js">
$('#mm').menu({
	onClick:function(item){
		//...
	}
});
</textarea>

<br/>
<h5>Show Menu</h5>
<p>When menu is created, it's hidden and not visible. Call 'show' method to display menu.</p>
<textarea name="code-menu" class="js">
$('#mm').menu('show', {
	left: 200,
	top: 100
});
</textarea>

<h4>Menu Item</h4>
<p>
The menu item represents an individual item that is displayed within a menu.
It contains the following properties:
</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>id</td>
<td>string</td>
<td>The id attribute of menu item.</td>
<td></td>
</tr>
<tr>
<td>text</td>
<td>string</td>
<td>The item text.</td>
<td></td>
</tr>
<tr>
<td>iconCls</td>
<td>string</td>
<td>A CSS class to display a 16x16 icon on item left.</td>
<td></td>
</tr>
<tr>
<td>href</td>
<td>string</td>
<td>Set page location while clicking the menu item.</td>
<td></td>
</tr>
<tr>
<td>disabled</td>
<td>boolean</td>
<td>Defines if to disable the menu item.</td>
<td>false</td>
</tr>
<tr>
<td>onclick</td>
<td>function</td>
<td>The function to be called while clicking the menu item.</td>
<td></td>
</tr>
</table>

<h4>Menu Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>

<th><strong>Default</strong></th>
</tr>
<tr>
<td>zIndex</td>
<td>number</td>
<td>Menu z-index style,increase from it.</td>
<td>110000</td>
</tr>
<tr>
<td>left</td>
<td>number</td>

<td>Menu left position.</td>
<td>0</td>
</tr>
<tr>
<td>top</td>
<td>number</td>
<td>Menu top position.</td>
<td>0</td>
</tr>
<tr>
<td>minWidth</td>
<td>number</td>
<td>The minimum width of menu. This property is available since version 1.3.2.</td>
<td>120</td>
</tr>
</table>

<h4>Menu Events</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>

<td>onShow</td>
<td>none</td>
<td>Fires after menu is showed.</td>
</tr>
<tr>
<td>onHide</td>
<td>none</td>
<td>Fires after menu is hidden.</td>
</tr>
<tr>
<td>onClick</td>

<td>item</td>
<td>
Fires when the menu item is clicked.
The example below shows how to process all menu item clicking:
<pre>
&lt;div class="easyui-menu" data-options="onClick:menuHandler" style="width:120px;"&gt;
	&lt;div data-options="name:'new'"&gt;New&lt;/div&gt;
	&lt;div data-options="name:'save',iconCls:'icon-save'"&gt;Save&lt;/div&gt;
	&lt;div data-options="name:'print',iconCls:'icon-print'"&gt;Print&lt;/div&gt;
	&lt;div class="menu-sep"&gt;&lt;/div&gt;
	&lt;div data-options="name:'exit'"&gt;Exit&lt;/div&gt;
&lt;/div>
&lt;script type="text/javascript"&gt;
	function menuHandler(item){
		alert(item.name)
	}
&lt;/script&gt;
</pre>
</td>
</tr>
</table>

<h4>Menu Methods</h4>
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
<td>show</td>
<td>pos</td>
<td>Show a menu on specified position.<br />
pos parameter have two properties:<br />
left: the new left position.<br />
top: the new top position.<br /></td>

</tr>
<tr>
<td>hide</td>
<td>none</td>
<td>Hide a menu.</td>
</tr>
<tr>
<td>destroy</td>
<td>none</td>
<td>Destroy a menu</td>
</tr>
<tr>
<td>getItem</td>
<td>itemEl</td>
<td>
Get the menu item properties that include a 'target' property indicating the item DOM element.
The example below shows how to get the specified item by id:
<pre>
&lt;div id="mm" class="easyui-menu" style="width:120px"&gt;
	&lt;div&gt;New&lt;/div&gt;
	&lt;div id="m-open"&gt;Open&lt;/div&gt;
	&lt;div&gt;Save&lt;/div&gt;
&lt;/div&gt;
</pre>
<pre>
var itemEl = $('#m-open')[0];  // the menu item element
var item = $('#mm').menu('getItem', itemEl);
console.log(item);
</pre>
</td>
</tr>
<tr>
<td>setText</td>
<td>param</td>
<td>
Set the specified menu item text. The 'param' parameter contains two properties:<br />
target: DOM object, the menu item to be setted.<br />
text: string, the new text value.
<p>Code example:</p>
<pre>
var item = $('#mm').menu('findItem', 'Save');
$('#mm').menu('setText', {
	target: item.target,
	text: 'Saving'
});
</pre>
</td>
</tr>
<tr>
<td>setIcon</td>
<td>param</td>
<td>
Set the specified menu item icon. The 'param' parameter contains two properties:<br />
target: DOM object, the menu item.<br />
iconCls: the new icon class.
<p>Code example:</p>
<pre>
$('#mm').menu('setIcon', {
	target: $('#m-open')[0],
	iconCls: 'icon-closed'
});
</pre>
</td>
</tr>

<tr>
<td>findItem</td>
<td>text</td>
<td>
Find the specified menu item, the return object is same as the getItem method.
<p>Code example:</p>
<pre>
// find 'Open' item and disable it
var item = $('#mm').menu('findItem', 'Open');
$('#mm').menu('disableItem', item.target);
</pre>
</td>
</tr>
<tr>
<td>appendItem</td>
<td>options</td>
<td>
Append a new menu item, the 'options' parameter indicate the new item properties.
By default the added item will become a top menu item.
To append a sub menu item, a 'parent' property should be set to specify the parent item element that already has sub items.
<p>Code example:</p>
<pre>
// append a top menu item
$('#mm').menu('appendItem', {
	text: 'New Item',
	iconCls: 'icon-ok',
	onclick: function(){alert('New Item')}
});
</pre>
<pre>
// append a sub menu item
var item = $('#mm').menu('findItem', 'Open');  // find 'Open' item
$('#mm').menu('appendItem', {
	parent: item.target,  // the parent item element
	text: 'Open Excel',
	iconCls: 'icon-excel',
	onclick: function(){alert('Open Excel')}
});
</pre>
</td>
</tr>
<tr>
<td>removeItem</td>
<td>itemEl</td>
<td>Remove the specified menu item.</td>
</tr>
<tr>
<td>enableItem</td>
<td>itemEl</td>
<td>Enable the menu item.</td>
</tr>
<tr>
<td>disableItem</td>
<td>itemEl</td>
<td>Disable the menu item.</td>
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
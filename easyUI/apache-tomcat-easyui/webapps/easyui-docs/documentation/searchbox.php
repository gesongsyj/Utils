<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>searchbox - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-searchbox"]').each(function(){
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

<h3>SearchBox</h3>
<p>Override defaults with $.fn.searchbox.defaults.</p>
<p>
The searchbox prompt the user to enter search value.
It can combine a menu that allows the user to select different searching category.
The searching action will be executed when the user press ENTER key or click the search button on the right of component.
</p>
<img src="images/searchbox.png"/>

<h4>Dependencies</h4>
<ul>
	<li>menubutton</li>
</ul>

<h4>Usage Example</h4>
<h5>Create SearchBox</h5>
<p>1. Create from markup. Add 'easyui-searchbox' class to &lt;input/&gt; markup.</p>
<textarea name="code-searchbox" class="html">
<script type="text/javascript">
    function qq(value,name){
        alert(value+":"+name)
    }
</script>
 
<input id="ss" class="easyui-searchbox" style="width:300px"
        data-options="searcher:qq,prompt:'Please Input Value',menu:'#mm'"></input>
        
<div id="mm" style="width:120px">
    <div data-options="name:'all',iconCls:'icon-ok'">All News</div>
    <div data-options="name:'sports'">Sports News</div>
</div>
</textarea>
<p>2. Create programatically.</p>
<textarea name="code-searchbox" class="html">
<input id="ss"></input>
<div id="mm" style="width:120px">
	<div data-options="name:'all',iconCls:'icon-ok'">All News</div>
	<div data-options="name:'sports'">Sports News</div>
</div>
</textarea>
<textarea name="code-searchbox" class="js">
$('#ss').searchbox({
	searcher:function(value,name){
		alert(value + "," + name)
	},
	menu:'#mm',
	prompt:'Please Input Value'
});
</textarea>

<br/>
<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>width</td>
<td>number</td>
<td>The width of the component.</td>
<td>auto</td>
</tr>
<tr>
<td>height</td>
<td>number</td>
<td>The height of the component. This property is available since version 1.3.2.</td>
<td>22</td>
</tr>
<tr>
<td>prompt</td>
<td>string</td>
<td>The prompt message to be displayed in input box.</td>
<td>''</td>
</tr>
<tr>
<td>value</td>
<td>string</td>
<td>The inputed value.</td>
<td>''</td>
</tr>
<tr>
<td>menu</td>
<td>selector</td>
<td>
The search type menu. Each menu item can has below attribute:<br/>
name: the search type name.<br/>
selected: current selected search type name.
<p>The example below shows how to define a selected searching type name.</p>
<pre>
&lt;input class="easyui-searchbox" style="width:300px" data-options="menu:'#mm'" /&gt;
&lt;div id="mm" style="width:150px"&gt;
	&lt;div data-options="name:'item1'">Search Item1&lt;/div&gt;
	&lt;div data-options="name:'item2',selected:true">Search Item2&lt;/div&gt;
	&lt;div data-options="name:'item3'">Search Item3&lt;/div&gt;
&lt;/div&gt;
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>searcher</td>
<td>function(value,name)</td>
<td>The searcher function that will be called when user presses the searching button or press ENTER key.</td>
<td>null</td>
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
<td>Return the options object.</td>
</tr>
<tr>
<td>menu</td>
<td>none</td>
<td>
Return the search type menu object.
The example below shows how to change the menu item icon.
<pre>
var m = $('#ss').searchbox('menu');  // get the menu object
var item = m.menu('findItem', 'Sports News');  // find the menu item
// change the menu item icon
m.menu('setIcon', {
	target: item.target,
	iconCls: 'icon-save'
});
// select the searching type name
$('#ss').searchbox('selectName', 'sports');
</pre>
</td>
</tr>
<tr>
<td>textbox</td>
<td>none</td>
<td>Return the text box object.</td>
</tr>
<tr>
<td>getValue</td>
<td>none</td>
<td>Return the current searching value.</td>
</tr>
<tr>
<td>setValue</td>
<td>value</td>
<td>Set a new searching value.</td>
</tr>
<tr>
<td>getName</td>
<td>none</td>
<td>Return the current searching type name.</td>
</tr>
<tr>
<td>selectName</td>
<td>name</td>
<td>
Select the current searching type name.
<p>Code example:</p>
<pre>
$('#ss').searchbox('selectName', 'sports');
</pre>
</td>
</tr>
<tr>
<td>destroy</td>
<td>none</td>
<td>Destroy this component.</td>
</tr>
<tr>
<td>resize</td>
<td>width</td>
<td>Reset the component width.</td>
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
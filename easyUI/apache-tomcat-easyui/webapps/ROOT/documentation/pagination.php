<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>pagination - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-pagination"]').each(function(){
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

<h3>Pagination</h3>
<p>Override defaults with $.fn.pagination.defaults.</p>
<p>
The pagination allows the user to navigate data by page.
It supports configurable options for page navigation and page length choices.
The user can add customize buttons on right of pagination to enhance its functionality.
</p>
<img src="images/pagination.png" />

<h4>Dependencies</h4>
<ul>
	<li>linkbutton</li>
</ul>

<h4>Usage Example</h4>
<p>Create pagination from markup.</p>
<textarea name="code-pagination" class="html">
<div id="pp" class="easyui-pagination" style="background:#efefef;border:1px solid #ccc;"
        data-options="total:2000,pageSize:10">
</div>
</textarea>
<p>Create pagination using javascript.</p>
<textarea name="code-pagination" class="html">
<div id="pp" style="background:#efefef;border:1px solid #ccc;"></div>
</textarea>
<textarea name="code-pagination" class="js">
$('#pp').pagination({
    total:2000,
    pageSize:10
});
</textarea>
<p>
Let's create ajax pagination with panel and pagination plugins.
When the user select a new page, the panel will display the corresponding content of specified page.
</p>
<textarea name="code-pagination" class="html">
<div id="content" class="easyui-panel" style="height:200px"
        data-options="href:'show_content.php?page=1'">
</div>
<div class="easyui-pagination" style="border:1px solid #ccc;"
        data-options="
            total: 2000,
            pageSize: 10,
            onSelectPage: function(pageNumber, pageSize){
                $('#content').panel('refresh', 'show_content.php?page='+pageNumber);
            }">
</div>
</textarea>
<p>
The panel on top display the first page content by default.
When the user navigate the page, the 'onSelectPage' event will be triggered,
in which we call 'refresh' method for the content panel to load new page content with a new URL parameter.
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
<td>total</td>
<td>number</td>
<td>The total records, which should be setted when pagination is created.</td>

<td>1</td>
</tr>
<tr>
<td>pageSize</td>
<td>number</td>
<td>The page size.</td>
<td>10</td>
</tr>
<tr>
<td>pageNumber</td>
<td>number</td>

<td>Show the page number when pagination is created.</td>
<td>1</td>
</tr>
<tr>
<td>pageList</td>
<td>array</td>
<td>
User can change the page size. The pageList property defines how many size can be changed.
<p>Code example:</p>
<pre>
$('#pp').pagination({
	pageList: [10,20,50,100]
});
</pre>
</td>
<td>[10,20,30,50]</td>
</tr>
<tr>
<td>loading</td>

<td>boolean</td>
<td>Defines if data is loading.</td>
<td>false</td>
</tr>
<tr>
<td>buttons</td>
<td>array,selector</td>
<td>
Defines custom buttons, possible values:<br/>
1) an array, each button contains two properties:<br />
iconCls: the CSS class which will show a background image<br />
handler: a handler function when button is clicked<br/>
2) a selector that indicating the buttons.
<p>The buttons can be declared from markup:</p>
<pre>
&lt;div class="easyui-pagination" style="border:1px solid #ccc" data-options="
		total: 114,
		buttons: [{
			iconCls:'icon-add',
			handler:function(){alert('add')}
		},'-',{
			iconCls:'icon-save',
			handler:function(){alert('save')}
		}]"&gt;
&lt;/div&gt;
</pre>
<p>The buttons can also be created using javascript:</p>
<pre>
$('#pp').pagination({
	total: 114,
	buttons: [{
		iconCls:'icon-add',
		handler:function(){alert('add')}
	},'-',{
		iconCls:'icon-save',
		handler:function(){alert('save')}
	}]
});
</pre>
</td>

<td>null</td>
</tr>
<tr>
<td>showPageList</td>
<td>boolean</td>
<td>Defines if to show page list.</td>
<td>true</td>
</tr>
<tr>
<td>showRefresh</td>
<td>boolean</td>

<td>Defines if to show refresh button.</td>
<td>true</td>
</tr>
<tr>
<td>beforePageText</td>
<td>string</td>
<td>Show a label before the input component.</td>
<td>Page</td>
</tr>
<tr>
<td>afterPageText</td>

<td>string</td>
<td>Show a label after the input component.</td>
<td>of {pages}</td>
</tr>
<tr>
<td>displayMsg</td>
<td>string</td>
<td>Display a page information.</td>
<td>Displaying {from} to {to} of {total} items</td>
</tr>

</table>

<h4>Events</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>

</tr>
<tr>
<td>onSelectPage</td>
<td>pageNumber, pageSize</td>
<td>Fires when user select a new page. callback function contains two parameter:<br />
pageNumber: the new page number<br />
pageSize: the new page size
<p>Code example:</p>
<pre>
$('#pp').pagination({
	onSelectPage:function(pageNumber, pageSize){
		$(this).pagination('loading');
		alert('pageNumber:'+pageNumber+',pageSize:'+pageSize);
		$(this).pagination('loaded');
	}
});
</pre>
</td>
</tr>
<tr>
<td>onBeforeRefresh</td>
<td>pageNumber, pageSize</td>

<td>Fires before the refresh button is clicked, return false to cancel the refresh action.</td>
</tr>
<tr>
<td>onRefresh</td>
<td>pageNumber, pageSize</td>
<td>Fires after refresh.</td>
</tr>
<tr>
<td>onChangePageSize</td>
<td>pageSize</td>
<td>Fires when user change the page size.</td>

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
<td>loading</td>
<td>none</td>
<td>Make the pagination to become loading status.</td>
</tr>

<tr>
<td>loaded</td>
<td>none</td>
<td>Make the pagination to become loaded status.</td>
</tr>
<tr>
<td>refresh</td>
<td>options</td>
<td>
Refresh and display pager information. This method is available since version 1.3.
<p>Code example:</p>
<pre>
$('#pp').pagination('refresh');	// refresh the pager bar information
$('#pp').pagination('refresh',{	// change options and refresh pager bar information
	total: 114,
	pageNumber: 6
});
</pre>
</td>
</tr>
<tr>
<td>select</td>
<td>page</td>
<td>
Select a new page. The page index start with 1. This method is available since version 1.3.
<p>Code example:</p>
<pre>
$('#pp').pagination('select');	// refresh the current page
$('#pp').pagination('select', 2);	// select the second page
</pre>
</td>
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
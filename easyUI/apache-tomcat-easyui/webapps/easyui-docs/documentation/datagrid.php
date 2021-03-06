<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>datagrid - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-datagrid"]').each(function(){
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

<h3 id="overview">DataGrid</h3>
<div style="width:200px;height:220px;padding:0 10px;background:#FBFBFB;border:1px solid #ccc;float:right;margin-left:20px">
	<h3>Contents</h3>
	<ul>
		<li><a href="#overview">Overview</a></li>
		<li><a href="#usage">Usage Example</a></li>
		<li><a href="#dg-properties">DataGrid Properties</a></li>
		<li><a href="#cc-properties">Column Properties</a></li>
		<li><a href="#editor">Editor</a></li>
		<li><a href="#view">DataGrid View</a></li>
		<li><a href="#events">Events</a></li>
		<li><a href="#methods">Methods</a></li>
	</ul>
</div>
<p>Extend from $.fn.panel.defaults. Override defaults with $.fn.datagrid.defaults.</p>
<p>
The datagrid displays data in a tabular format and offers rich support to select, sort, group and edit data.
The datagrid has been designed to reduce development time and to require no specific knowledge from developers.
It is both featherweight and feature-rich.
Cell merging, multi-column headers, frozen columns and footers are just a few of its features.
</p>
<img src="images/datagrid.png"/>

<h4>Dependencies</h4>
<ul>
	<li>panel</li>
	<li>resizable</li>
	<li>linkbutton</li>
	<li>pagination</li>
</ul>

<h4 id="usage">Usage Example</h4>
<p>Create datagrid from an existing table element, defining columns, rows, and data in html.</p>
<textarea name="code-datagrid" class="html">
<table class="easyui-datagrid">
	<thead>
		<tr>
			<th data-options="field:'code'">Code</th>
			<th data-options="field:'name'">Name</th>
			<th data-options="field:'price'">Price</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>001</td><td>name1</td><td>2323</td>
		</tr>
		<tr>
			<td>002</td><td>name2</td><td>4612</td>
		</tr>
	</tbody>
</table>
</textarea>

<p>
Create datagrid via &lt;table&gt; markup. The nested &lt;th&gt; tags define the columns on the table.
</p>
<textarea name="code-datagrid" class="html">
<table class="easyui-datagrid" style="width:400px;height:250px"
		data-options="url:'datagrid_data.json',fitColumns:true,singleSelect:true">
	<thead>
		<tr>
			<th data-options="field:'code',width:100">Code</th>
			<th data-options="field:'name',width:100">Name</th>
			<th data-options="field:'price',width:100,align:'right'">Price</th>
		</tr>
	</thead>
</table>
</textarea>

<p>Create datagrid using javascript is also allowed.</p>
<textarea name="code-datagrid" class="html">
<table id="dg"></table>
</textarea>
<textarea name="code-datagrid" class="js">
$('#dg').datagrid({
	url:'datagrid_data.json',
	columns:[[
		{field:'code',title:'Code',width:100},
		{field:'name',title:'Name',width:100},
		{field:'price',title:'Price',width:100,align:'right'}
	]]
});
</textarea>

<p>Query data with some parameters.</p>
<textarea name="code-datagrid" class="js">
$('#dg').datagrid('load', {
	name: 'easyui',
	address: 'ho'
});
</textarea>
<p>After changing data to server, refresh the front data.</p>
<textarea name="code-datagrid" class="js">
$('#dg').datagrid('reload');	// reload the current page data
</textarea>


<br/>
<h4 id="dg-properties">DataGrid Properties</h4>
<p>The properties extend from panel. below is the added properties for datagrid.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>

<th><strong>Default</strong></th>
</tr>
<tr>
<td>columns</td>
<td>array</td>
<td>The datagrid columns config object, see column properties for more details.</td>
<td>undefined</td>
</tr>
<tr>
<td>frozenColumns</td>
<td>array</td>

<td>Same as the columns property, but the these columns will be frozen on left.</td>
<td>undefined</td>
</tr>
<tr>
<td>fitColumns</td>
<td>boolean</td>
<td>True to auto expand/contract the size of the columns to fit the grid width and prevent horizontal scrolling.</td>
<td>false</td>
</tr>
<tr>
<td>resizeHandle</td>
<td>string</td>
<td>
Resizing column position, Available value are: 'left','right','both'.
When 'right', users can resize columns by dragging the right edge of column headers, etc.<br/>
This property is available since version 1.3.2.
</td>
<td>right</td>
</tr>
<tr>
<td>autoRowHeight</td>
<td>boolean</td>
<td>
Defines if set the row height based on the contents of that row.
Set to false can improve loading performance.
</td>
<td>true</td>
</tr>
<tr>
<td>toolbar</td>
<td>array,selector</td>
<td>
The top toolbar of datagrid panel. Possible values:<br/>
1) an array, each tool options are same as linkbutton.<br/>
2) a selector that indicate the toolbar.
<p>Define toolbar within a &lt;div&gt; tag:<p>
<pre>
$('#dg').datagrid({
	toolbar: '#tb'
});
&lt;div id="tb"&gt;
&lt;a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-edit',plain:true"/a&gt;
&lt;a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-help',plain:true"/a&gt;
&lt;/div&gt;
</pre>
<p>Define toolbar via array:</p>
<pre>
$('#dg').datagrid({
	toolbar: [{
		iconCls: 'icon-edit',
		handler: function(){alert('edit')}
	},'-',{
		iconCls: 'icon-help',
		handler: function(){alert('help')}
	}]
});
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>striped</td>

<td>boolean</td>
<td>True to stripe the rows.</td>
<td>false</td>
</tr>
<tr>
<td>method</td>
<td>string</td>
<td>The method type to request remote data.</td>
<td>post</td>
</tr>

<tr>
<td>nowrap</td>
<td>boolean</td>
<td>
True to display data in one line.
Set to true can improve loading performance.
</td>
<td>true</td>
</tr>
<tr>
<td>idField</td>
<td>string</td>
<td>Indicate which field is an identity field.</td>

<td>null</td>
</tr>
<tr>
<td>url</td>
<td>string</td>
<td>A URL to request data from remote site.</td>
<td>null</td>
</tr>
<tr>
<td>data</td>
<td>array,object</td>
<td>
The data to be loaded.
This property is available since version 1.3.2.
<p>Code example:</p>
<pre>
$('#dg').datagrid({
	data: [
		{f1:'value11', f2:'value12'},
		{f1:'value21', f2:'value22'}
	]
});
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>loadMsg</td>
<td>string</td>

<td>When loading data from remote site, show a prompt message.</td>
<td>Processing, please wait &#8230;</td>
</tr>
<tr>
<td>pagination</td>
<td>boolean</td>
<td>True to show a pagination toolbar on datagrid bottom.</td>
<td>false</td>
</tr>
<tr>
<td>rownumbers</td>

<td>boolean</td>
<td>True to show a row number column.</td>
<td>false</td>
</tr>
<tr>
<td>singleSelect</td>
<td>boolean</td>
<td>True to allow selecting only one row.</td>
<td>false</td>
</tr>
<tr>
<td>checkOnSelect</td>
<td>boolean</td>
<td>
If true, the checkbox is checked/unchecked when the user clicks on a row.
If false, the checkbox is only checked/unchecked when the user clicks exactly on the checkbox.<br/>
This property is available since version 1.3.
</td>
<td>true</td>
</tr>
<tr>
<td>selectOnCheck</td>
<td>boolean</td>
<td>
If set to true, clicking a checkbox will always select the row.
If false, selecting a row will not check the checkbox.<br/>
This property is available since version 1.3.
</td>
<td>true</td>
</tr>
<tr>
<td>pagePosition</td>
<td>string</td>
<td>
Defines position of the pager bar. Available values are: 'top','bottom','both'.<br/>
This property is available since version 1.3.
</td>
<td>bottom</td>
</tr>
<tr>
<td>pageNumber</td>
<td>number</td>
<td>When set pagination property, initialize the page number.</td>
<td>1</td>
</tr>
<tr>
<td>pageSize</td>
<td>number</td>
<td>When set pagination property, initialize the page size.</td>

<td>10</td>
</tr>
<tr>
<td>pageList</td>
<td>array</td>
<td>When set pagination property, initialize the page size selecting list.</td>
<td>[10,20,30,40,50]</td>
</tr>
<tr>
<td>queryParams</td>
<td>object</td>

<td>When request remote data, sending additional parameters also.
<p>Code example:</p>
<pre>
$('#dg').datagrid({
	queryParams: {
		name: 'easyui',
		subject: 'datagrid'
	}
});
</pre>
</td>
<td>{}</td>
</tr>
<tr>
<td>sortName</td>
<td>string</td>
<td>Defines which column can be sorted.</td>
<td>null</td>
</tr>
<tr>
<td>sortOrder</td>

<td>string</td>
<td>Defines the column sort order, can only be 'asc' or 'desc'.</td>
<td>asc</td>
</tr>
<tr>
<td>multiSort</td>
<td>boolean</td>
<td>Defines if to enable multiple column sorting. This property is available since version 1.3.4.</td>
<td>false</td>
</tr>
<tr>
<td>remoteSort</td>
<td>boolean</td>
<td>Defines if to sort data from server.</td>
<td>true</td>
</tr>

<tr>
<td>showHeader</td>
<td>boolean</td>
<td>Defines if to show row header.</td>
<td>true</td>
</tr>
<tr>
<td>showFooter</td>
<td>boolean</td>
<td>Defines if to show row footer.</td>
<td>false</td>
</tr>
<tr>
<td>scrollbarSize</td>
<td>number</td>
<td>The scrollbar width(when scrollbar is vertical) or height(when scrollbar is horizontal).</td>
<td>18</td>
</tr>
<tr>
<td>rowStyler</td>
<td>function</td>
<td>
Return style such as 'background:red'. The function take two parameters:<br />
rowIndex: the row index, start with 0<br />
rowData: the record corresponding to this row
<p>Code example:</p>
<pre>
$('#dg').datagrid({
	rowStyler: function(index,row){
		if (row.listprice>80){
			return 'background-color:#6293BB;color:#fff;'; // return inline style
			// the function can return predefined css class and inline style
			// return {class:'r1', style:{'color:#fff'}};	
		}
	}
});
</pre>
</td>
<td></td>
</tr>
<tr>
<td>loader</td>
<td>function</td>
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
<td>function</td>
<td>
Return the filtered data to display. The function take one parameter 'data' that indicate the original data. You can change original source data to standard data format. This function must return standard data object that contain 'total' and 'rows' properties.
<p>Code example:</p>
<pre>
// removing 'd' object from asp.net web service json output
$('#dg').datagrid({
	loadFilter: function(data){
		if (data.d){
			return data.d;
		} else {
			return data;
		}
	}
});
</pre>
</td>
<td></td>
</tr>
<tr>
<td>editors</td>

<td>object</td>
<td>Defines the editor when editing a row.</td>
<td>predefined editors</td>
</tr>
<tr>
<td>view</td>
<td>object</td>
<td>Defines the view of datagrid.</td>
<td>default view</td>
</tr>

</table>

<br/>
<h4 id="cc-properties">Column Properties</h4>
<p>The DataGrid Columns is an array object, which element is an array too.
The element of element array is a config object, which defines every column field.<p>
<p>Code example:</p>
<textarea name="code-datagrid" class="js">
columns:[[
	{field:'itemid',title:'Item ID',rowspan:2,width:80,sortable:true},
	{field:'productid',title:'Product ID',rowspan:2,width:80,sortable:true},
	{title:'Item Details',colspan:4}
],[
	{field:'listprice',title:'List Price',width:80,align:'right',sortable:true},
	{field:'unitcost',title:'Unit Cost',width:80,align:'right',sortable:true},
	{field:'attr1',title:'Attribute',width:100},
	{field:'status',title:'Status',width:60}
]]
</textarea>
<p></p>

<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>

</tr>
<tr>
<td>title</td>
<td>string</td>
<td>The column title text.</td>
<td>undefined</td>
</tr>
<tr>
<td>field</td>
<td>string</td>
<td>The column field name.</td>

<td>undefined</td>
</tr>
<tr>
<td>width</td>
<td>number</td>
<td>
The width of column. If not defined, the width will auto expand to fit its contents.
No width definition will reduce performance.
</td>
<td>undefined</td>
</tr>
<tr>
<td>rowspan</td>
<td>number</td>

<td>Indicate how many rows a cell should take up.</td>
<td>undefined</td>
</tr>
<tr>
<td>colspan</td>
<td>number</td>
<td>Indicate how many columns a cell should take up.</td>
<td>undefined</td>
</tr>
<tr>
<td>align</td>

<td>string</td>
<td>Indicate how to align the column data. 'left','right','center' can be used.</td>
<td>undefined</td>
</tr>
<tr>
<td>halign</td>
<td>string</td>
<td>
Indicate how to align the column header. Possible values are: 'left','right','center'.
If not assigned, the header alignment is same as data alignment defined via 'align' property.
This property is available since version 1.3.2.
</td>
<td>undefined</td>
</tr>
<tr>
<td>sortable</td>
<td>boolean</td>
<td>True to allow the column can be sorted.</td>
<td>undefined</td>
</tr>
<tr>
<td>order</td>
<td>string</td>
<td>The default sort order, can only be 'asc' or 'desc'. This property is available since version 1.3.2. </td>
<td>undefined</td>
</tr>
<tr>
<td>resizable</td>
<td>boolean</td>
<td>True to allow the column can be resized.</td>
<td>undefined</td>
</tr>
<tr>
<td>fixed</td>
<td>boolean</td>
<td>True to prevent from adjusting width when 'fitColumns' is set to true.</td>
<td>undefined</td>
</tr>
<tr>
<td>hidden</td>
<td>boolean</td>
<td>True to hide the column.</td>

<td>undefined</td>
</tr>
<tr>
<td>checkbox</td>
<td>boolean</td>
<td>True to show a checkbox. The checkbox column has fixed width.</td>
<td>undefined</td>
</tr>
<tr>
<td>formatter</td>
<td>function</td>

<td>The cell formatter function, take three parameters:<br />
value: the field value.<br />
rowData: the row record data.<br />
rowIndex: the row index.
<p>Code example:</p>
<pre>
$('#dg').datagrid({
	columns:[[
		{field:'userId',title:'User', width:80,
			formatter: function(value,row,index){
				if (row.user){
					return row.user.name;
				} else {
					return value;
				}
			}
		}
	]]
});
</pre>
</td>
<td>undefined</td>
</tr>
<tr>
<td>styler</td>
<td>function</td>
<td>
The cell styler function, return style string to custom the cell style such as 'background:red'. The function take three parameter:<br />
value: the field value.<br />
rowData: the row record data.<br />
rowIndex: the row index.
<p>Code example:</p>
<pre>
$('#dg').datagrid({
	columns:[[
		{field:'listprice',title:'List Price', width:80, align:'right',
			styler: function(value,row,index){
				if (value < 20){
					return 'background-color:#ffee00;color:red;';
					// the function can return predefined css class and inline style
					// return {class:'c1',style:'color:red'}
				}
			}
		}
	]]
});
</pre>
</td>
<td>undefined</td>
</tr>
<tr>
<td>sorter</td>
<td>function</td>
<td>The custom field sort function that used to do local sorting, take two parameters:<br />
a: the first field value.<br />
b: the second field value.
<p>Code example:</p>
<pre>
$('#dg').datagrid({
	remoteSort: false,
	columns: [[
		{field:'date',title:'Date',width:80,sortable:true,align:'center',  
			sorter:function(a,b){  
				a = a.split('/');  
				b = b.split('/');  
				if (a[2] == b[2]){  
					if (a[0] == b[0]){  
						return (a[1]>b[1]?1:-1);  
					} else {  
						return (a[0]>b[0]?1:-1);  
					}  
				} else {  
					return (a[2]>b[2]?1:-1);  
				}  
			}  
		}
	]]
});
</pre>
</td>
<td>undefined</td>
</tr>
<tr>
<td>editor</td>
<td>string,object</td>
<td>Indicate the edit type. When string indicates the edit type, when object contains two properties:<br />
type: string, the edit type, possible type is: text,textarea,checkbox,numberbox,validatebox,datebox,combobox,combotree.<br />
options: object, the editor options corresponding to the edit type.</td>
<td>undefined</td>

</tr>
</table>

<br/>
<h4 id="editor">Editor</h4>
<p>Override defaults with $.fn.datagrid.defaults.editors.<p>
<p>Every editor has following actions:</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>

<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>init</td>
<td>container, options</td>
<td>Initialize the editor and return the target object.</td>
</tr>
<tr>
<td>destroy</td>
<td>target</td>

<td>Destroy the editor if necessary.</td>
</tr>
<tr>
<td>getValue</td>
<td>target</td>
<td>Get value from editor text.</td>
</tr>
<tr>
<td>setValue</td>
<td>target , value</td>
<td>Set value for editor.</td>

</tr>
<tr>
<td>resize</td>
<td>target , width</td>
<td>Resize the editor if necessary.</td>
</tr>
</table>

<p>For example, the text editor is defined as following:</p>
<textarea name="code-datagrid" class="js">
$.extend($.fn.datagrid.defaults.editors, {
	text: {
		init: function(container, options){
			var input = $('<input type="text" class="datagrid-editable-input">').appendTo(container);
			return input;
		},
		destroy: function(target){
			$(target).remove();
		},
		getValue: function(target){
			return $(target).val();
		},
		setValue: function(target, value){
			$(target).val(value);
		},
		resize: function(target, width){
			$(target)._outerWidth(width);
		}
	}
});
</textarea>

<h4 id="view">DataGrid View</h4>
<p>Override defaults with $.fn.datagrid.defaults.view.</p>
<p>The view is an object that will tell datagrid how to render rows. The object must defines the following functions:</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>

<th><strong>Description</strong></th>
</tr>
<tr>
<td>render</td>
<td>target, container, frozen</td>
<td>Called when the data is loaded.<br />
target: DOM object, the datagrid object.<br />
container: the rows container.<br />
frozen: indicate if to render the frozen container.</td>
</tr>

<tr>
<td>renderFooter</td>
<td>target, container, frozen</td>
<td>This is an option function to render row footer.</td>
</tr>
<tr>
<td>renderRow</td>
<td>target, fields, frozen, rowIndex, rowData</td>
<td>This is an option function and will be called by render function.</td>
</tr>
<tr>

<td>refreshRow</td>
<td>target, rowIndex</td>
<td>Defines how to refresh the specified row.</td>
</tr>
<tr>
<td>onBeforeRender</td>
<td>target, rows</td>
<td>Fires before the view is rendered.</td>
</tr>
<tr>
<td>onAfterRender</td>

<td>target</td>
<td>Fires after the view is rendered.</td>
</tr>
</table>

<br/>
<h4 id="events">Events</h4>
<p>The events extend from panel, below is the added events for datagrid.</p>
<table class="doc-table">

<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onLoadSuccess</td>
<td>data</td>
<td>Fires when data is loaded successfully.</td>
</tr>
<tr>

<td>onLoadError</td>
<td>none</td>
<td>Fires when some error occur to load remote data.</td>
</tr>
<tr>
<td>onBeforeLoad</td>
<td>param</td>
<td>Fires before a request is made to load data. If return false the load action will be canceled.</td>
</tr>
<tr>
<td>onClickRow</td>

<td>rowIndex, rowData</td>
<td>Fires when user click a row, the parameters contains:<br />
rowIndex: the clicked row index, start with 0<br />
rowData: the record corresponding to the clicked row</td>
</tr>
<tr>
<td>onDblClickRow</td>
<td>rowIndex, rowData</td>
<td>Fires when user dblclick a row, the parameters contains:<br />
rowIndex: the clicked row index, start with 0<br />

rowData: the record corresponding to the clicked row</td>
</tr>
<tr>
<td>onClickCell</td>
<td>rowIndex, field, value</td>
<td>Fires when user click a cell.</td>
</tr>
<tr>
<td>onDblClickCell</td>
<td>rowIndex, field, value</td>
<td>Fires when user dblclick a cell.
<p>Code example:</p>
<pre>
// when double click a cell, begin editing and make the editor get focus
$('#dg').datagrid({
	onDblClickCell: function(index,field,value){
		$(this).datagrid('beginEdit', index);
		var ed = $(this).datagrid('getEditor', {index:index,field:field});
		$(ed.target).focus();
	}
});
</pre>
</td>
</tr>
<tr>
<td>onSortColumn</td>
<td>sort, order</td>
<td>Fires when user sort a column, the parameters contains:<br />
sort: the sort column field name<br />
order: the sort column order</td>
</tr>
<tr>
<td>onResizeColumn</td>
<td>field, width</td>

<td>Fires when user resize the column.</td>
</tr>
<tr>
<td>onSelect</td>
<td>rowIndex, rowData</td>
<td>Fires when user select a row, the parameters contains:<br />
rowIndex: the selected row index, start with 0<br />
rowData: the record corresponding to the selected row</td>
</tr>
<tr>
<td>onUnselect</td>

<td>rowIndex, rowData</td>
<td>Fires when user unselect a row, the parameters contains:<br />
rowIndex: the unselected row index, start with 0<br />
rowData: the record corresponding to the unselected row</td>
</tr>
<tr>
<td>onSelectAll</td>
<td>rows</td>
<td>Fires when user select all rows.</td>
</tr>

<tr>
<td>onUnselectAll</td>
<td>rows</td>
<td>Fires when user unselect all rows.</td>
</tr>
<tr>
<td>onCheck</td>
<td>rowIndex,rowData</td>
<td>Fires when user check a row, the parameters contains:<br/>
rowIndex: the checked row index, start with 0<br/>
rowData: the record corresponding to the checked row<br/>
This event is available since version 1.3.
</td>
</tr>
<tr>
<td>onUncheck</td>
<td>rowIndex,rowData</td>
<td>
Fires when user uncheck a row, the parameters contains:<br/>
rowIndex: the unchecked row index, start with 0<br/>
rowData: the record corresponding to the unchecked row<br/>
This event is available since version 1.3.
</td>
</tr>
<tr>
<td>onCheckAll</td>
<td>rows</td>
<td>Fires when user check all rows. This event is available since version 1.3.</td>
</tr>
<tr>
<td>onUncheckAll</td>
<td>rows</td>
<td>Fires when user uncheck all rows. This event is available since version 1.3.</td>
</tr>
<tr>
<td>onBeforeEdit</td>
<td>rowIndex, rowData</td>
<td>Fires when user start editing a row, the parameters contains:<br />
rowIndex: the editing row index, start with 0<br />

rowData: the record corresponding to the editing row</td>
</tr>
<tr>
<td>onAfterEdit</td>
<td>rowIndex, rowData, changes</td>
<td>Fires when user finish editing, the parameters contains:<br />
rowIndex: the editing row index, start with 0<br />
rowData: the record corresponding to the editing row<br />
changes: the changed field/value pairs</td>
</tr>

<tr>
<td>onCancelEdit</td>
<td>rowIndex, rowData</td>
<td>Fires when user cancel editing a row, the parameters contains:<br />
rowIndex: the editing row index, start with 0<br />
rowData: the record corresponding to the editing row</td>
</tr>
<tr>
<td>onHeaderContextMenu</td>
<td>e, field</td>

<td>Fires when the header of datagrid is right clicked.</td>
</tr>
<tr>
<td>onRowContextMenu</td>
<td>e, rowIndex, rowData</td>
<td>Fires when a row is right clicked.</td>
</tr>
</table>

<br/>
<h4 id="methods">Methods</h4>
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
<td>getPager</td>
<td>none</td>
<td>Return the pager object.</td>
</tr>
<tr>
<td>getPanel</td>
<td>none</td>
<td>Return the panel object.</td>

</tr>
<tr>
<td>getColumnFields</td>
<td>frozen</td>
<td>
Return the column fields. If frozen setted to true the frozen column fields is returned.<br/>
Code example:<br/>
<pre style="color:#006600">
var opts = $('#dg').datagrid('getColumnFields');	// get unfrozen columns
var opts = $('#dg').datagrid('getColumnFields', true); // get frozen columns
</pre>
</td>
</tr>
<tr>
<td>getColumnOption</td>
<td>field</td>
<td>Return the specified column option.</td>
</tr>

<tr>
<td>resize</td>
<td>param</td>
<td>Do resize and do layout.</td>
</tr>
<tr>
<td>load</td>
<td>param</td>
<td>
Load and show the first page rows. If the 'param' is specified, it will replace with the queryParams property.
Usually do a query by passing some parameters, this method can be called to load new data from server.
<pre style="color:#006600">
$('#dg').datagrid('load',{
	code: '01',
	name: 'name01'
});
</pre>
</td>
</tr>
<tr>

<td>reload</td>
<td>param</td>
<td>Reload the rows. Same as the 'load' method but stay on current page.</td>
</tr>
<tr>
<td>reloadFooter</td>
<td>footer</td>
<td>
Reload the footer rows. Code examples:
<pre style="color:#006600">
// update footer row values and then refresh
var rows = $('#dg').datagrid('getFooterRows');
rows[0]['name'] = 'new name';
rows[0]['salary'] = 60000;
$('#dg').datagrid('reloadFooter');

// update footer rows with new data
$('#dg').datagrid('reloadFooter',[
	{name: 'name1', salary: 60000},
	{name: 'name2', salary: 65000}
]);
</pre>
</td>
</tr>
<tr>
<td>loading</td>

<td>none</td>
<td>Display loading status.</td>
</tr>
<tr>
<td>loaded</td>
<td>none</td>
<td>Hide loading status.</td>
</tr>
<tr>
<td>fitColumns</td>
<td>none</td>

<td>Make columns auto expand/collapse to fit datagrid width.</td>
</tr>
<tr>
<td>fixColumnSize</td>
<td>field</td>
<td>
Fix columns size. If 'field' parameter is not assigned, all columns size will be fixed.
<p>Code example:</p>
<pre>
$('#dg').datagrid('fixColumnSize', 'name');  // fix the 'name' column size
$('#dg').datagrid('fixColumnSize');  // fix all columns size
</pre>
</td>
</tr>
<tr>
<td>fixRowHeight</td>
<td>index</td>
<td>Fix the specified row height. If 'index' parameter is not assigned, all rows height will be fixed.</td>

</tr>
<tr>
<td>freezeRow</td>
<td>index</td>
<td>
Freeze the specify row that will always be displayed at the top when the datagrid is scrolled down.
This method is available since version 1.3.2.
</td>
</tr>
<tr>
<td>autoSizeColumn</td>
<td>field</td>
<td>adjusts the column width to fit the contents. This method is available since version 1.3.</td>
</tr>
<tr>
<td>loadData</td>
<td>data</td>
<td>Load local data, the old rows will be removed.</td>
</tr>
<tr>
<td>getData</td>
<td>none</td>
<td>Return the loaded data.</td>
</tr>

<tr>
<td>getRows</td>
<td>none</td>
<td>Return the current page rows.</td>
</tr>
<tr>
<td>getFooterRows</td>
<td>none</td>
<td>Return the footer rows.</td>
</tr>
<tr>

<td>getRowIndex</td>
<td>row</td>
<td>Return the specified row index, the row parameter can be a row record or an id field value.</td>
</tr>
<tr>
<td>getChecked</td>
<td>none</td>
<td>Return all rows where the checkbox has been checked. This method is available since version 1.3.</td>
</tr>
<tr>
<td>getSelected</td>
<td>none</td>
<td>Return the first selected row record or null.</td>
</tr>
<tr>
<td>getSelections</td>

<td>none</td>
<td>Return all selected rows, when no record selected, am empty array will return.</td>
</tr>
<tr>
<td>clearSelections</td>
<td>none</td>
<td>Clear all selections.</td>
</tr>
<tr>
<td>clearChecked</td>
<td>none</td>
<td>Clear all checked rows. This method is available since version 1.3.2.</td>
</tr>
<tr>
<td>scrollTo</td>
<td>index</td>
<td>Scroll to the specified row. This method is available since version 1.3.3.</td>
</tr>
<tr>
<td>highlightRow</td>
<td>index</td>
<td>Highlight a row. This method is available since version 1.3.3.</td>
</tr>
<tr>
<td>selectAll</td>
<td>none</td>

<td>Select all current page rows.</td>
</tr>
<tr>
<td>unselectAll</td>
<td>none</td>
<td>Unselect all current page rows.</td>
</tr>
<tr>
<td>selectRow</td>
<td>index</td>
<td>Select a row, the row index start with 0.</td>

</tr>
<tr>
<td>selectRecord</td>
<td>idValue</td>
<td>Select a row by passing id value parameter.</td>
</tr>
<tr>
<td>unselectRow</td>
<td>index</td>
<td>Unselect a row.</td>
</tr>
<tr>
<td>checkAll</td>
<td>none</td>
<td>Check all current page rows. This method is available since version 1.3.</td>
</tr>
<tr>
<td>uncheckAll</td>
<td>none</td>
<td>Uncheck all current page rows. This method is available since version 1.3.</td>
</tr>
<tr>
<td>checkRow</td>
<td>index</td>
<td>Check a row, the row index start with 0. This method is available since version 1.3.</td>
</tr>
<tr>
<td>uncheckRow</td>
<td>index</td>
<td>Uncheck a row, the row index start with 0. This method is available since version 1.3.</td>
</tr>

<tr>
<td>beginEdit</td>
<td>index</td>
<td>Begin editing a row.</td>
</tr>
<tr>
<td>endEdit</td>
<td>index</td>
<td>End editing a row.</td>
</tr>
<tr>

<td>cancelEdit</td>
<td>index</td>
<td>Cancel editing a row.</td>
</tr>
<tr>
<td>getEditors</td>
<td>index</td>
<td>Get the specified row editors. Each editor has the following properties:<br />
actions: the actions that the editor can do, same as the editor definition.<br />
target: the target editor jQuery object.<br />
field: the field name.<br />
type: the editor type, such as 'text','combobox','datebox', etc.</td>
</tr>
<tr>
<td>getEditor</td>
<td>options</td>
<td>Get the specified editor, the options contains two properties:<br />
index: the row index.<br />
field: the field name.
<p>Code example:</p>
<pre>
// get the datebox editor and change its value
var ed = $('#dg').datagrid('getEditor', {index:1,field:'birthday'});
$(ed.target).datebox('setValue', '5/4/2012');
</pre>
</td>
</tr>

<tr>
<td>refreshRow</td>
<td>index</td>
<td>Refresh a row.</td>
</tr>
<tr>
<td>validateRow</td>
<td>index</td>
<td>validate the specified row, return true when valid.</td>
</tr>
<tr>

<td>updateRow</td>
<td>param</td>
<td>Update the specified row, the param contains following properties:<br />
index: the row index to be updated.<br />
row: the new row data.
<p>Code example:</p>
<pre>
$('#dg').datagrid('updateRow',{
	index: 2,
	row: {
		name: 'new name',
		note: 'new note message'
	}
});
</pre>
</td>
</tr>
<tr>
<td>appendRow</td>
<td>row</td>
<td>
Append a new row. The new row will be added to the last position:
<pre style="color:#006600">
$('#dg').datagrid('appendRow',{
	name: 'new name',
	age: 30,
	note: 'some messages'
});
</pre>
</td>
</tr>
<tr>
<td>insertRow</td>
<td>param</td>
<td>
Insert a new row, the param contains following properties:<br />
index: the row index to insert into, if not defined, append the new row.<br />
row: the row data. Code examples:
<pre style="color:#006600">
// insert a new row at second row position
$('#dg').datagrid('insertRow',{
	index: 1,	// index start with 0
	row: {
		name: 'new name',
		age: 30,
		note: 'some messages'
	}
});
</pre>
</td>
</tr>
<tr>
<td>deleteRow</td>
<td>index</td>

<td>Delete a row.</td>
</tr>
<tr>
<td>getChanges</td>
<td>type</td>
<td>Get changed rows since the last commit. The type parameter indicate which type changed rows, possible value is: inserted,deleted,updated,etc. When the type parameter is not assigned, return all changed rows.</td>
</tr>
<tr>
<td>acceptChanges</td>
<td>none</td>
<td>Commits all the changes data since it was loaded or since the last time acceptChanges was called.</td>

</tr>
<tr>
<td>rejectChanges</td>
<td>none</td>
<td>Rolls back all the changes data since it was created, or since the last time acceptChanges was called.</td>
</tr>
<tr>
<td>mergeCells</td>
<td>options</td>
<td>Merge some cells to one cell, the options contains following properties:<br />
index: the row index.<br />

field: the field name.<br />
rowspan: the rowspan count to be merged.<br />
colspan: the colspan count to be merged.</td>
</tr>
<tr>
<td>showColumn</td>
<td>field</td>
<td>Display the specified column.</td>
</tr>
<tr>
<td>hideColumn</td>

<td>field</td>
<td>Hide the specified column.</td>
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
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>combogrid - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-combogrid"]').each(function(){
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
			
<div style="padding:10px"><h3>ComboGrid</h3><p>Extend from $.fn.combo.defaults and $.fn.datagrid.defaults. Override defaults with $.fn.combogrid.defaults.</p><p>The combogrid combines a editable text box with drop-down datagrid panel,from which enables users to quickly find and select.The combogrid provides keyboard navigation support for selecting an item.</p><img src="images/combogrid.png"/><h4>Dependencies</h4><ul>	<li>combo</li>	<li>datagrid</li></ul><h4>Usage Example</h4><h5>Create ComboGrid</h5><p>1. Create a combogrid from markup.</p><textarea name="code-combogrid" class="html"><select id="cc" class="easyui-combogrid" name="dept" style="width:250px;"		data-options="			panelWidth:450,			value:'006',			idField:'code',			textField:'name',			url:'datagrid_data.json',			columns:[[				{field:'code',title:'Code',width:60},				{field:'name',title:'Name',width:100},				{field:'addr',title:'Address',width:120},				{field:'col4',title:'Col41',width:100}			]]		"></select></textarea><p>2. The combogrid can be created from existing &lt;select&gt; or &lt;input&gt; element using javascript.</p><textarea name="code-combogrid" class="html"><input id="cc" name="dept" value="01"></textarea><textarea name="code-combogrid" class="js">$('#cc').combogrid({	panelWidth:450,	value:'006', 	idField:'code',	textField:'name',	url:'datagrid_data.json',	columns:[[		{field:'code',title:'Code',width:60},		{field:'name',title:'Name',width:100},		{field:'addr',title:'Address',width:120},		{field:'col4',title:'Col41',width:100}	]]});</textarea><h5>Autocomplete Functionality</h5><p>Let's add advanced auto-complete functionality to the combogrid.The drop-down datagrid will display the possible results according to the user types.</p><textarea name="code-combogrid" class="js">$('#cc').combogrid({	delay: 500,	mode: 'remote',	url: 'get_data.php',	idField: 'id',	textField: 'name',	columns: [[		{field:'code',title:'Code',width:120,sortable:true},		{field:'name',title:'Name',width:400,sortable:true}	]]});</textarea><p>On server side, the 'q' parameter must be retrieve first.The user can query the database and then return an sql result in JSON format to the browser.</p><p>get_data.php:</p><textarea name="code-combogrid" class="js">$q = isset($_POST['q']) ? $_POST['q'] : '';  // the request parameter// query database and return JSON result data$rs = mysql_query("select * from item where name like '$q%'");echo json_encode(...);</textarea><h4>Properties</h4><p>The properties extend from combo and datagrid, below is the added properties for combogrid.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>loadMsg</td><td>string</td><td>The message displayed when datagrid load remote data.</td><td>null</td></tr><tr><td>idField</td><td>string</td><td>The id field name.</td><td>null</td></tr><tr><td>textField</td><td>string</td><td>The text field to be displayed in textbox.</td><td>null</td></tr><tr><td>mode</td><td>string</td><td>Defines how to load datagrid data when text changed. Set to 'remote' if the combogrid loads from server.When set to 'remote' mode, what the user types will be sent as the http request parameter named 'q' to server to retrieve the new data.</td><td>local</td></tr><tr><td>filter</td><td>function(q, row)</td><td>Defines how to select the local data when 'mode' is set to 'local'. Return true to select the row.<p>Code example:</p><pre>$('#cc').combogrid({	filter: function(q, row){		var opts = $(this).combogrid('options');		return row[opts.textField].indexOf(q) == 0;	}});</pre></td><td></td></tr></table><br/><h4>Events</h4><p>The events extend from combo and datagrid.</p><h4>Methods</h4><p>The methods extend from combo, below is the added or overridden methods for combogrid.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>grid</td><td>none</td><td>Return the datagrid object.The example below shows how to get the selected row:<pre>var g = $('#cc').combogrid('grid');	// get datagrid objectvar r = g.datagrid('getSelected');	// get the selected rowalert(r.name);</pre></td></tr><tr><td>setValues</td><td>values</td><td>Set the component value array.<p>Code example:</p><pre>$('#cc').combogrid('setValues', ['001','007']);</pre></td></tr><tr><td>setValue</td><td>value</td><td>Set the component value.<p>Code example:</p><pre>$('#cc').combogrid('setValue', '002');</pre></td></tr><tr><td>clear</td><td>none</td><td>Clear the component value.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
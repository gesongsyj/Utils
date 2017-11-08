<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>combobox - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-combobox"]').each(function(){
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
			
<div style="padding:10px"><h3>ComboBox</h3><p>Extend from $.fn.combo.defaults. Override defaults with $.fn.combobox.defaults.</p><p>The combobox display a editable text box and drop-down list, from which the user can select one or multiple values.The user can type text directly into the top of list, or select one or more of present values from the list.</p><img src="images/combobox.png"/><h4>Dependencies</h4><ul>	<li>combo</li></ul><h4>Usage Example</h4><p>Create combobox from &lt;select&gt; element with a pre-defined structure.</p><textarea name="code-combobox" class="html"><select id="cc" class="easyui-combobox" name="dept" style="width:200px;">	<option value="aa">aitem1</option>	<option>bitem2</option>	<option>bitem3</option>	<option>ditem4</option>	<option>eitem5</option></select></textarea><p>Create combobox from &lt;input&gt; markup.</p><textarea name="code-combobox" class="html"><input id="cc" class="easyui-combobox" name="dept"	data-options="valueField:'id',textField:'text',url:'get_data.php'"></textarea><p>Create combobox using javascript.</p><textarea name="code-combobox" class="html"><input id="cc" name="dept" value="aa"></textarea><textarea name="code-combobox" class="js">$('#cc').combobox({	url:'combobox_data.json',	valueField:'id',	textField:'text'});</textarea><p>Create two dependent comboboxes.</p><textarea name="code-combobox" class="html"><input id="cc1" class="easyui-combobox" data-options="		valueField: 'id',		textField: 'text',		url: 'get_data1.php',		onSelect: function(rec){			var url = 'get_data2.php?id='+rec.id;			$('#cc2').combobox('reload', url);		}"><input id="cc2" class="easyui-combobox" data-options="valueField:'id',textField:'text'"></textarea><p>The json data format sample:</p><textarea name="code-combobox" class="js">[{	"id":1,	"text":"text1"},{	"id":2,	"text":"text2"},{	"id":3,	"text":"text3",	"selected":true},{	"id":4,	"text":"text4"},{	"id":5,	"text":"text5"}]</textarea><h4>Properties</h4><p>The properties extend from combo, below is the added properties for combobox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>valueField</td><td>string</td><td>The underlying data value name to bind to this ComboBox.</td><td>value</td></tr><tr><td>textField</td><td>string</td><td>The underlying data field name to bind to this ComboBox.</td><td>text</td></tr><tr><td>groupField</td><td>string</td><td>Indicate what field to be grouped. This property is available since version 1.3.4.</td><td>null</td></tr><tr><td>groupFormatter</td><td>function(group)</td><td>return group text to display on group item. This property is available since version 1.3.4.<p>Code example:</p><pre>$('#cc').combobox({	groupFormatter: function(group){		return '&lt;span style="color:red"&gt;' + group + '&lt;/span&gt;';	}});</pre></td><td></td></tr><tr><td>mode</td><td>string</td><td>Defines how to load list data when text changed.Set to 'remote' if the combobox loads from server.When set to 'remote' mode, what the user types will be sent as the http request parameter named 'q' to server to retrieve the new data.</td><td>local</td></tr><tr><td>url</td><td>string</td><td>A URL to load list data from remote.</td><td>null</td></tr><tr><td>method</td><td>string</td><td>The http method to retrieve data.</td><td>post</td></tr><tr><td>data</td><td>array</td><td>The list data to be loaded.<p>Code example:</p><pre>&lt;input class="easyui-combobox" data-options="		valueField: 'label',		textField: 'value',		data: [{			label: 'java',			value: 'Java'		},{			label: 'perl',			value: 'Perl'		},{			label: 'ruby',			value: 'Ruby'		}]" /&gt;</pre></td><td>null</td></tr><tr><td>filter</td><td>function</td><td>Defines how to filter the local data when 'mode' is set to 'local'. The function takes two parameters:<br />q: the user typed text.<br />row: the list row data.<br />Return true to allow the row to be displayed.<p>Code example:</p><pre>$('#cc').combobox({	filter: function(q, row){		var opts = $(this).combobox('options');		return row[opts.textField].indexOf(q) == 0;	}});</pre></td><td></td></tr><tr><td>formatter</td><td>function</td><td>Defineds how to render the row. The function takes one parameter: row.<p>Code example:</p><pre>$('#cc').combobox({	formatter: function(row){		var opts = $(this).combobox('options');		return row[opts.textField];	}});</pre></td><td></td></tr><tr><td>loader</td><td>function(param,success,error)</td><td>Defines how to load data from remote server. Return false can abort this action.This function takes following parameters:<br/>param: the parameter object to pass to remote server.<br/>success(data): the callback function that will be called when retrieve data successfully.<br/>error(): the callback function that will be called when failed to retrieve data.</td><td>json loader</td></tr><tr><td>loadFilter</td><td>function(data)</td><td>Return the filtered data to display. This property is available since version 1.3.3.</td><td></td></tr></table><br/><h4>Events</h4><p>The events extend from combo, below is the added events for combobox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameters</strong></th><th><strong>Description</strong></th></tr><tr><td>onBeforeLoad</td><td>param</td><td>Fires before a request is made to load data, return false to cancel this load action.<p>Code example:</p><pre>// change the http request parameters before load data from server$('#cc').combobox({	onBeforeLoad: function(param){		param.id = 2;		param.language = 'js';	}});</pre></td></tr><tr><td>onLoadSuccess</td><td>none</td><td>Fires when remote data is loaded successfully.</td></tr><tr><td>onLoadError</td><td>none</td><td>Fires when remote data load error.</td></tr><tr><td>onSelect</td><td>record</td><td>Fires when user select a list item.</td></tr><tr><td>onUnselect</td><td>record</td><td>Fires when user unselect a list item.</td></tr></table><br/><h4>Methods</h4><p>The methods extend from combo, below is the added or overridden methods for combobox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>getData</td><td>none</td><td>Return the loaded data.</td></tr><tr><td>loadData</td><td>data</td><td>Load the locale list data.</td></tr><tr><td>reload</td><td>url</td><td>Request the remote list data. Pass the 'url' parameter to override the original URL value.<p>Code example:</p><pre>$('#cc').combobox('reload');  // reload list data using old URL$('#cc').combobox('reload','get_data.php');  // reload list data using new URL</pre></td></tr><tr><td>setValues</td><td>values</td><td>Set the combobox value array.<p>Code example:</p><pre>$('#cc').combobox('setValues', ['001','002']);</pre></td></tr><tr><td>setValue</td><td>value</td><td>Set the combobox value.<p>Code example:</p><pre>$('#cc').combobox('setValue', '001');</pre></td></tr><tr><td>clear</td><td>none</td><td>Clear the combobox value.</td></tr><tr><td>select</td><td>value</td><td>Select the specified item.</td></tr><tr><td>unselect</td><td>value</td><td>Unselect the specified item.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
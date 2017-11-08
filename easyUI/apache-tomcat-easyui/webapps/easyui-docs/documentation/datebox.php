<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>datebox - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-datebox"]').each(function(){
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
			
<div style="padding:10px"><h3>DateBox</h3><p>Extend from $.fn.combo.defaults. Override defaults with $.fn.datebox.defaults</p><p>The datebox combines a editable text box with drop-down calendar panel that allows the user to select a date.The entered string in the text box can be transformed to a valid date.The selected date can also be formatted as expected.</p><img src="images/datebox.png"/><h4>Dependencies</h4><ul>	<li>combo</li>	<li>calendar</li></ul><h4>Usage Example</h4><p>Create datebox from markup.</p><textarea name="code-datebox" class="html"><input id="dd" type="text" class="easyui-datebox" required="required"></textarea><p>Create datebox using javascript.</p><textarea name="code-datebox" class="html"><input id="dd" type="text"></textarea><textarea name="code-datebox" class="js">$('#dd').datebox({	required:true});</textarea><h4>Properties</h4><p>The properties extend from combo, below is the added properties for datebox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>panelWidth</td><td>number</td><td>The drop down calendar panel width.</td><td>180</td></tr><tr><td>panelHeight</td><td>number</td><td>The drop down calendar panel height.</td><td>auto</td></tr><tr><td>currentText</td><td>string</td><td>The text to display for the current day button.</td><td>Today</td></tr><tr><td>closeText</td><td>string</td><td>The text to display for the close button.</td><td>Close</td></tr><tr><td>okText</td><td>string</td><td>The text to display for the ok button.</td><td>Ok</td></tr><tr><td>disabled</td><td>boolean</td><td>When true to disable the field.</td><td>false</td></tr><tr><td>formatter</td><td>function</td><td>A function to format the date, the function take a 'date' parameter and return a string value.The example below shows how to override the default formatter function.<pre>$.fn.datebox.defaults.formatter = function(date){	var y = date.getFullYear();	var m = date.getMonth()+1;	var d = date.getDate();	return m+'/'+d+'/'+y;}</pre></td><td></td></tr><tr><td>parser</td><td>function</td><td>A function to parse a date string, the function take a 'date' string and return a date value.The example below shows how to override the default parser function.<pre>$.fn.datebox.defaults.parser = function(s){	var t = Date.parse(s);	if (!isNaN(t)){		return new Date(t);	} else {		return new Date();	}}</pre></td><td></td></tr></table><h4>Events</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameters</strong></th><th><strong>Description</strong></th></tr><tr><td>onSelect</td><td>date</td><td>Fires when user select a date.<p>Code example:</p><pre>$('#dd').datebox({	onSelect: function(date){		alert(date.getFullYear()+":"+(date.getMonth()+1)+":"+date.getDate());	}});</pre></td></tr></table><h4>Methods</h4><p>The methods extend from combo, below is the overridden methods for datebox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>calendar</td><td>none</td><td>Get the calendar object.The example below shows how to get the calendar object and then recreate it.<pre>// get the calendar objectvar c = $('#dd').datebox('calendar');// set the first day of week to mondayc.calendar({	firstDay: 1});</pre></td></tr><tr><td>setValue</td><td>value</td><td>Set the datebox value.<p>Code example:</p><pre>$('#dd').datebox('setValue', '6/1/2012');	// set datebox valuevar v = $('#dd').datebox('getValue');	// get datebox value</pre></td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
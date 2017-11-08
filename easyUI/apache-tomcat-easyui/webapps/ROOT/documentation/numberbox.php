<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>numberbox - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-numberbox"]').each(function(){
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
			
<div style="padding:10px"><h3>NumberBox</h3><p>Extend from $.fn.validatebox.defaults. Override defaults with $.fn.numberbox.defaults.</p><p>The numberbox is used to lets the user only input numberical values.It can convert an input element into different types of input such as numeric, percentage, currency, etc.More types of input can be defined depending on the 'formatter' and 'parser' function.</p><img src="images/numberbox.png"/><h4>Dependencies</h4><ul>	<li>validatebox</li></ul><h4>Usage</h4><p>Create numberbox from markup.</p><textarea name="code-numberbox" class="html"><input type="text" class="easyui-numberbox" value="100" data-options="min:0,precision:2"></textarea><p>Create numberbox using javascript.</p><textarea name="code-numberbox" class="html"><input type="text" id="nn"></textarea><textarea name="code-numberbox" class="js">$('#nn').numberbox({	min:0,	precision:2});</textarea><h4>Properties</h4><p>The properties extend from validatebox, below is the added properties for numberbox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>disabled</td><td>boolean</td><td>Defines if to disable the field.</td><td>false</td></tr><tr><td>value</td><td>number</td><td>The default value.</td><td></td></tr><tr><td>min</td><td>number</td><td>The minimum allowed value.</td><td>null</td></tr><tr><td>max</td><td>number</td><td>The maximum allowed value.</td><td>null</td></tr><tr><td>precision</td><td>number</td><td>The maximum precision to display after the decimal separator.</td><td>0</td></tr><tr><td>decimalSeparator</td><td>string</td><td>The decimal character separates the integer and decimal parts of a number.</td><td>.</td></tr><tr><td>groupSeparator</td><td>string</td><td>The character that separates integer groups to show thousands and millions.</td><td></td></tr><tr><td>prefix</td><td>string</td><td>The prefix string.</td><td></td></tr><tr><td>suffix</td><td>string</td><td>The suffix string.</td><td></td></tr><tr><td>filter</td><td>function(e)</td><td>Defines how to filter the key pressed, return true to accept the inputed char.This property is available since version 1.3.3.</td><td></td></tr><tr><td>formatter</td><td>function(value)</td><td>A function to format the numberbox value.Return string value that will display on box.</td><td></td></tr><td>parser</td><td>function(s)</td><td>A function to parse a string.Return numberbox value.</td><td></td></tr></table><h4>Events</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameters</strong></th><th><strong>Description</strong></th></tr><tr><td>onChange</td><td>newValue,oldValue</td><td>Fires when the field value is changed.</td></tr></table><h4>Methods</h4><p>The methods extend from validatebox, below is the added or overridden methods for numberbox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the numberbox options.</td></tr><tr><td>destroy</td><td>none</td><td>Destroy the numberbox object.</td></tr><tr><td>disable</td><td>none</td><td>Disable the field.</td></tr><tr><td>enable</td><td>none</td><td>Enable the field.</td></tr><tr><td>fix</td><td>none</td><td>Fix the value to valid value.</td></tr><tr><td>setValue</td><td>value</td><td>Set numberbox value.<p>Code example:</p><pre>$('#nn').numberbox('setValue', 206.12);</pre></td></tr><tr><td>getValue</td><td>none</td><td>Get numberbox value.<p>Code example:</p><pre>var v = $('#nn').numberbox('getValue');alert(v);</pre></td></tr><tr><td>clear</td><td>none</td><td>Clear numberbox value.</td></tr><tr><td>reset</td><td>none</td><td>Reset numberbox value. This method is available since version 1.3.2.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
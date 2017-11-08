<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>spinner - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-spinner"]').each(function(){
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
			
<div style="padding:10px"><h3>Spinner</h3><p>Extend from $.fn.validatebox.defaults. Override defaults with $.fn.spinner.defaults.</p><p>The spinner combines a editable text box and two small buttons that let the user choose from a range of values.Similar to the combobox, the spinner allows the user to type in a value but do not has a drop-down list.The spinner is the base component to create other spinner component such as numberspinner, timespinner, etc.</p><h4>Dependencies</h4><ul>	<li>validatebox</li></ul><h4>Usage Example</h4><p>The spinner should be created using javascript. Creating from markup is not allowed.</p><textarea name="code-spinner" class="html"><input id="ss" value="2"></textarea><textarea name="code-spinner" class="js">$('#ss').spinner({	required:true,	increment:10});</textarea><h4>Properties</h4><p>The properties extend from validatebox, below is the added properties for spinner.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>width</td><td>number</td><td>The width of this component.</td><td>auto</td></tr><tr><td>height</td><td>number</td><td>The height of this component. This property is available since version 1.3.2.</td><td>22</td></tr><tr><td>value</td><td>string</td><td>The initialize value.</td><td></td></tr><tr><td>min</td><td>string</td><td>The minimum allowed value.</td><td>null</td></tr><tr><td>max</td><td>string</td><td>The maximum allowed value.</td><td>null</td></tr><tr><td>increment</td><td>number</td><td>The increment value when click spinner button.</td><td>1</td></tr><tr><td>editable</td><td>boolean</td><td>Defines if user can type value directly into the field.</td><td>true</td></tr><tr><td>disabled</td><td>boolean</td><td>Defines if to disable the field.</td><td>false</td></tr><tr><td>spin</td><td>function(down)</td><td>A function called when user click the spinner button.The 'down' parameter indicate if the user click the down button.</td><td></td></tr></table><h4>Events</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameters</strong></th><th><strong>Description</strong></th></tr><tr><td>onSpinUp</td><td>none</td><td>Fires when user click the up spinner button.</td></tr><tr><td>onSpinDown</td><td>none</td><td>Fires when user click the down spinner button.</td></tr></table><h4>Methods</h4><p>The methods extend from validatebox, below is the added methods for spinner.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>destroy</td><td>none</td><td>Destroy the spinner component.</td></tr><tr><td>resize</td><td>width</td><td>Reset the component width.Override the original width by passing the 'width' parameter.<p>Code example:</p><pre>$('#ss').spinner('resize');  // resize with original width$('#ss').spinner('resize', 200);  // resize with new width</pre></td></tr><tr><td>enable</td><td>none</td><td>Enable the component.</td></tr><tr><td>disable</td><td>none</td><td>Disable the component.</td></tr><tr><td>getValue</td><td>none</td><td>Get the component value.</td></tr><tr><td>setValue</td><td>value</td><td>Set the component value.</td></tr><tr><td>clear</td><td>none</td><td>Clear the component value.</td></tr><tr><td>reset</td><td>none</td><td>Reset the component value. This method is available since version 1.3.2.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
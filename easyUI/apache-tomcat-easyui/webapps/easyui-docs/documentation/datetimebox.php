<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>datetimebox - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-datetimebox"]').each(function(){
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
			
<div style="padding:10px"><h3>DateTimeBox</h3><p>Extend from $.fn.datebox.defaults, Override defaults with $.fn.datetimebox.defaults.</p><p>Similar to the datebox, the datetimebox allows the user to select a date and a time to display the date and time with specified format.It adds a timespinner component to the drop-down panel.</p><img src="images/datetimebox.png"/><h4>Dependencies</h4><ul>	<li>datebox</li>	<li>timespinner</li></ul><h4>Usage Example</h4><p>Create datetimebox from markup.</p><textarea name="code-datetimebox" class="html"><input class="easyui-datetimebox" name="birthday" 		data-options="required:true,showSeconds:false" value="3/4/2010 2:3" style="width:150px"></textarea><p>Create datetimebox using javascript.</p><textarea name="code-datetimebox" class="html"><input id="dt" type="text" name="birthday"></textarea><textarea name="code-datetimebox" class="js">$('#dt').datetimebox({	value: '3/4/2010 2:3',	required: true,	showSeconds: false});</textarea><h4>Properties</h4><p>The properties extend from datebox, below is the added properties for datetimebox:</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>showSeconds</td><td>boolean</td><td>Defines if to display the second information.</td><td>true</td></tr><tr><td>timeSeparator</td><td>string</td><td>The time separator between hour and minute and second. This property is available since version 1.3.</td><td>:</td></tr></table><h4>Methods</h4><p>The methods extend from datebox, below is the overridden methods for datetimebox.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>spinner</td><td>none</td><td>Return the timespinner object.</td></tr><tr><td>setValue</td><td>value</td><td>Set the datetimebox value.<p>Code example:</p><pre>$('#dt').datetimebox('setValue', '6/1/2012 12:30:56');	// set datetimebox valuevar v = $('#dt').datetimebox('getValue');		// get datetimebox valuealert(v);</pre></td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
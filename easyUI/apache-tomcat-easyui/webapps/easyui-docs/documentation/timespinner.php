<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>timespinner - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-timespinner"]').each(function(){
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
			
<div style="padding:10px"><h3>TimeSpinner</h3><p>Extend from $.fn.spinner.defaults. Override defaults with $.fn.timespinner.defaults.</p><p>The timespinner is created based on spinner.It is same as numberspinner but display the time value.The timespinner allows the user to increase or decrease the time by clicking small spinner buttons on the right of component.</p><img src="images/timespinner.png"/><h4>Dependencies</h4><ul>	<li>spinner</li></ul><h4>Usage Example</h4><p>Create timespinner from markup.</p><textarea name="code-timespinner" class="html"><input id="ss" class="easyui-timespinner"  style="width:80px;"		required="required" data-options="min:'08:30',showSeconds:true"></textarea><p>Create timespinner using javascript.</p><textarea name="code-timespinner" class="html"><input id="ss" style="width:80px;"></textarea><textarea name="code-timespinner" class="js">$('#ss').timespinner({	min: '08:30',	required: true,	showSeconds: true});</textarea><h4>Properties</h4><p>The properties extend from spinner, below is the added properties for timespinner.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>separator</td><td>string</td><td>The separator between hour and minute and second.</td><td>:</td></tr><tr><td>showSeconds</td><td>boolean</td><td>Defines if to show the second information.</td><td>false</td></tr><tr><td>highlight</td><td>number</td><td>The field to highlight initially, 0 = hours, 1 = minutes, …</td><td>0</td></tr></table></td></tr></table><h4>Events</h4><p>The events extend from spinner.</p><h4>Methods</h4><p>The methods extend from spinner, below is the overridden methods for timespinner.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>setValue</td><td>value</td><td>Set the timespinner value.<p>Code example:</p><pre>$('#ss').timespinner('setValue', '17:45');  // set timespinner valuevar v = $('#ss').timespinner('getValue');  // get timespinner valuealert(v);</pre></td></tr><tr><td>getHours</td><td>none</td><td>Get the current hour value.</td></tr><tr><td>getMinutes</td><td>none</td><td>Get the current minute value.</td></tr><tr><td>getSeconds</td><td>none</td><td>Get the current second value.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
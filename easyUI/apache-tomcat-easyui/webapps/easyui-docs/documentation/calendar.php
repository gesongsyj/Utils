<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>calendar - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-calendar"]').each(function(){
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
			
<div style="padding:10px"><h3>Calendar</h3><p>Override defaults with $.fn.calendar.defaults.</p><p>The calendar display one month calendar that allows the user to select dates and move to the next or previous month.By default, the first day of week is set to sunday.It can be changed by setting the value of 'firstDay' property.</p><img src="images/calendar.png"/><h4>Usage Example</h4><p>Create calendar from markup.</p><textarea name="code-calendar" class="html"><div id="cc" class="easyui-calendar" style="width:180px;height:180px;"></div></textarea><p>Create calendar using javascript.</p><textarea name="code-calendar" class="html"><div id="cc" style="width:180px;height:180px;"></div></textarea><textarea name="code-calendar" class="js">$('#cc').calendar({	current:new Date()});</textarea><h4>Properties</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>width</td><td>number</td><td>The width of calendar component.</td><td>180</td></tr><tr><td>height</td><td>number</td><td>The height of calendar component.</td><td>180</td></tr><tr><td>fit</td><td>boolean</td><td>When true to set the calendar size fit it's parent container.</td><td>false</td></tr><tr><td>border</td><td>boolean</td><td>Defines if to show the border.</td><td>true</td></tr><tr><td>firstDay</td><td>number</td><td>Defines the first day of week. Sunday is 0, Monday is 1, ...</td><td>0</td></tr><tr><td>weeks</td><td>array</td><td>The list of week to be showed.</td><td>['S','M','T','W','T','F','S']</td></tr><tr><td>months</td><td>array</td><td>The list of month to be showed.</td><td>['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']</td></tr><tr><td>year</td><td>number</td><td>The year of calendar.The example below shows how to create a calendar using the specified year and month.<pre>&lt;div class="easyui-calendar" data-options="year:2012,month:6" /&gt;</pre></td><td>current year(four digits)</td></tr><tr><td>month</td><td>number</td><td>The month of calendar.</td><td>current month, start with 1</td></tr><tr><td>current</td><td>Date</td><td>The current date.</td><td>current date</td></tr></table><h4>Events</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameters</strong></th><th><strong>Description</strong></th></tr><tr><td>onSelect</td><td>date</td><td>Fires when user select a date.<p>Code example:</p><pre>$('#cc').calendar({	onSelect: function(date){		alert(date.getFullYear()+":"+(date.getMonth()+1)+":"+date.getDate());	}});</pre></td></tr></table><h4>Methods</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>resize</td><td>none</td><td>Resize the calendar size.</td></tr><tr><td>moveTo</td><td>date</td><td>Move the calendar to specified date.<p>Code example:</p><pre>$('#cc').calendar('moveTo', new Date(2012, 6, 1));</pre></td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
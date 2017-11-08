<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>numberspinner - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-numberspinner"]').each(function(){
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
			
<div style="padding:10px"><h3>NumberSpinner</h3><p>Extend from $.fn.spinner.defaults and $.fn.numberbox.defaults. Override defaults with $.fn.numberspinner.defaults.</p><p>The numberspinner is created based on spinner and numberbox.It can convert the inputed value into different types such as numeric, percentage, current, etc.It also allows the user to scroll to a desired value using the up/down spinner buttons.</p><img src="images/numberspinner.png"/><h4>Dependencies</h4><ul>	<li>spinner</li>	<li>numberbox</li></ul><h4>Usage Example</h4><p>Create numberspinner from markup.</p><textarea name="code-numberspinner" class="html"><input id="ss" class="easyui-numberspinner" style="width:80px;"		required="required" data-options="min:10,max:100,editable:false"></textarea><p>Create numberspinner using javascript.</p><textarea name="code-numberspinner" class="html"><input id="ss" required="required" style="width:80px;"></textarea><textarea name="code-numberspinner" class="js">$('#ss').numberspinner({	min: 10,	max: 100,	editable: false});</textarea><p>Create numberspinner and format the number as a currency string.</p><textarea name="code-numberspinner" class="html"><input class="easyui-numberspinner" value="1234567890" style="width:150px;"		data-options="required:true,precision:2,groupSeparator:',',decimalSeparator:'.',prefix:'$'"></textarea><h4>Properties</h4><p>The properties extend from spinner and numberbox.</p><h4>Events</h4><p>The events extend from spinner.</p><h4>Methods</h4><p>The methods extend from spinner, below is the overridden methods for numberspinner.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>setValue</td><td>value</td><td>Set the numberspinner value.<p>Code example:</p><pre>$('#ss').numberspinner('setValue', 8234725);  // set valuevar v = $('#ss').numberspinner('getValue');  // get valuealert(v)</pre></td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
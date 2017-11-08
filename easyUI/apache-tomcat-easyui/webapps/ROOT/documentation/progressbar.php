<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>progressbar - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-progressbar"]').each(function(){
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
			
<div style="padding:10px"><h3>ProgressBar</h3><p>Override defaults with $.fn.progressbar.defaults.</p><p>The progressbar provides a feedback of showing progress of an long-running operation.The progress can be updated to let the user know that some operation is currently executing.</p><img src="images/progressbar.png"/><h4>Dependencies</h4><ul>	<li>none</li></ul><h4>Usage Example</h4><h5>Create ProgressBar</h5><p>The ProgressBar component can be created from html markup or programatically.Creation from markup is even easier. Add 'easyui-progressbar' class to &lt;div/&gt; markup.</p><textarea name="code-progressbar" class="html"><div id="p" class="easyui-progressbar" data-options="value:60" style="width:400px;"></div></textarea><p>Create ProgressBar using javascript.</p><textarea name="code-progressbar" class="html"><div id="p" style="width:400px;"></div></textarea><textarea name="code-progressbar" class="js">$('#p').progressbar({	value: 60});</textarea><h5>Get or Set Value</h5><p>We get the current value and set a new value for this component.</p><textarea name="code-progressbar" class="js">var value = $('#p').progressbar('getValue');if (value < 100){	value += Math.floor(Math.random() * 10);	$('#p').progressbar('setValue', value);}</textarea><h4>Properties</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>width</td><td>string</td><td>Set the progressbar width.</td><td>auto</td></tr><tr><td>height</td><td>number</td><td>The height of the component. This property is available since version 1.3.2.</td><td>22</td></tr><tr><td>value</td><td>number</td><td>The percentage value.</td><td>0</td></tr><tr><td>text</td><td>string</td><td>The text template to be displayed on component.</td><td>{value}%</td></tr></table><h4>Events</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameters</strong></th><th><strong>Description</strong></th></tr><tr><td>onChange</td><td>newValue,oldValue</td><td>Fires when the value is changed.<p>Code example:</p><pre>$('#p').progressbar({	onChange: function(value){		alert(value)	}});</pre></td></tr></table><h4>Methods</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>resize</td><td>width</td><td>Resize the component.<p>Code example:</p><pre>$('#p').progressbar('resize');  // resize the bar with original width$('#p').progressbar('resize', 350);  // resize the bar using a new width</pre></td></tr><tr><td>getValue</td><td>none</td><td>Return the current progress value.</td></tr><tr><td>setValue</td><td>value</td><td>Set a new progress value.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
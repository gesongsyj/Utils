<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>tooltip - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-tooltip"]').each(function(){
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
			

<div style="padding:10px">

<h3>Tooltip</h3>
<p>Override defaults with $.fn.tooltip.defaults.</p>
<p>
When a user move the mouse pointer over an element, a tooltip message window appears to display additional information.
The tooltip content can contain any html elements that come from the page or via ajax.
</p>
<img src="images/tooltip.png"/>

<h4>Usage Example</h4>
<h5>Create Tooltip</h5>
<p>1. Create tooltip from markup, add 'easyui-tooltip' class to the element, no javascript code is needed.</p>
<textarea name="code-tooltip" class="html">
<a href="#" title="This is the tooltip message." class="easyui-tooltip">Hover me</a>
</textarea>
<p>2. Create tooltip using javascript.</p>
<textarea name="code-tooltip" class="html">
<a id="dd" href="javascript:void(0)">Click here</a>
</textarea>
<textarea name="code-tooltip" class="js">
$('#dd').tooltip({
	position: 'right',
	content: '<span style="color:#fff">This is the tooltip message.</span>',
	onShow: function(){
		$(this).tooltip('tip').css({
			backgroundColor: '#666',
			borderColor: '#666'
		});
	}
});
</textarea>

<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>
<td>position</td>
<td>string</td>
<td>The tooltip position. Possible values are: 'left','right','top','bottom'.</td>
<td>bottom</td>
</tr>
<tr>
<td>content</td>
<td>string</td>
<td>The tooltip content.</td>
<td>null</td>
</tr>
<tr>
<td>trackMouse</td>
<td>boolean</td>
<td>True to make tooltip move along with the mouse.</td>
<td>false</td>
</tr>
<tr>
<td>deltaX</td>
<td>number</td>
<td>The horizontal distance from the tooltip position.</td>
<td>0</td>
</tr>
<tr>
<td>deltaY</td>
<td>number</td>
<td>The vertical distance from the tooltip position.</td>
<td>0</td>
</tr>
<tr>
<td>showEvent</td>
<td>string</td>
<td>The event that cause the tooltip to appear.</td>
<td>mouseenter</td>
</tr>
<tr>
<td>hideEvent</td>
<td>string</td>
<td>The event that cause the tooltip to disappear.</td>
<td>mouseleave</td>
</tr>
<tr>
<td>showDelay</td>
<td>number</td>
<td>The time delay to show tooltip.</td>
<td>200</td>
</tr>
<tr>
<td>hideDelay</td>
<td>number</td>
<td>The time delay to hide tooltip.</td>
<td>100</td>
</tr>
</table>

<h4>Events</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onShow</td>
<td>e</td>
<td>Fires when show tooltip.</td>
</tr>
<tr>
<td>onHide</td>
<td>e</td>
<td>Fires when hide tooltip.</td>
</tr>
<tr>
<td>onUpdate</td>
<td>content</td>
<td>Fires when tooltip content is updated.</td>
</tr>
<tr>
<td>onPosition</td>
<td>left,top</td>
<td>Fires when tooltip position is changed.</td>
</tr>
<tr>
<td>onDestroy</td>
<td>none</td>
<td>Fires when tooltip is destroyed.</td>
</tr>
</table>

<h4>Methods</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>options</td>
<td>none</td>
<td>Return the options property.</td>
</tr>
<tr>
<td>tip</td>
<td>none</td>
<td>Return the tip object.</td>
</tr>
<tr>
<td>arrow</td>
<td>none</td>
<td>Return the arrow object.</td>
</tr>
<tr>
<td>show</td>
<td>e</td>
<td>Display the tooltip.</td>
</tr>
<tr>
<td>hide</td>
<td>e</td>
<td>Hide the tooltip.</td>
</tr>
<tr>
<td>update</td>
<td>content</td>
<td>Update the tooltip content.</td>
</tr>
<tr>
<td>reposition</td>
<td>none</td>
<td>Reset the tooltip position.</td>
</tr>
<tr>
<td>destroy</td>
<td>none</td>
<td>Destroy the tooltip.</td>
</tr>
</table>


</div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
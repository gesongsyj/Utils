<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>linkbutton - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-linkbutton"]').each(function(){
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

<h3>LinkButton</h3>
<p>Override defaults with $.fn.linkbutton.defaults.</p>
<p>
The linkbutton is used to create a hyperlink button. It is a representation of a normal &lt;a&gt; tag.
It can display both an icon and text, or only the icon or text.
The button width can dynamic and shrink/expand to fit its text labels.
</p>
<img src="images/linkbutton.png"/>

<h4>Usage Example</h4>
<h5>Create linkbutton</h5>
<p>
Create a linkbutton from markup is more easily.
</p>
<textarea name="code-linkbutton" class="html">
<a id="btn" href="#" class="easyui-linkbutton" data-options="iconCls:'icon-search'">easyui</a>
</textarea>
<p>
Create a linkbutton programmatically is also allowed.
</p>
<textarea name="code-linkbutton" class="js">
<a id="btn" href="#">easyui</a>
$('#btn').linkbutton({
	iconCls: 'icon-search'
});
</textarea>

<h5>Process clicking on linkbutton.</h5>
<p>Clicking on linkbutton will send the user to other page.</p>
<textarea name="code-linkbutton" class="html">
<a href="otherpage.php" class="easyui-linkbutton" data-options="iconCls:'icon-search'">easyui</a>
</textarea>
<p>The example below will alert a message.</p>
<textarea name="code-linkbutton" class="html">
<a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-search'"
		onclick="javascript:alert('easyui')">easyui</a>
</textarea>
<p>Bind click handler using jQuery.</p>
<textarea name="code-linkbutton" class="html">
<a id="btn" href="#" class="easyui-linkbutton" data-options="iconCls:'icon-search'">easyui</a>
</textarea>
<textarea name="code-linkbutton" class="js">
$(function(){
	$('#btn').bind('click', function(){
		alert('easyui');
	});
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
<td>id</td>
<td>string</td>
<td>The id attribute of this component.</td>
<td>null</td>

</tr>
<tr>
<td>disabled</td>
<td>boolean</td>
<td>True to disable the button</td>
<td>false</td>
</tr>
<tr>
<td>toggle</td>
<td>boolean</td>
<td>
True to enable the user to switch its state to selected or unselected.
This property is available since version 1.3.3.
</td>
<td>false</td>
</tr>
<tr>
<td>selected</td>
<td>boolean</td>
<td>Defines if the button's state is selected. This property is available since version 1.3.3.</td>
<td>false</td>
</tr>
<tr>
<td>group</td>
<td>string</td>
<td>
The group name that indicates what buttons belong to.
This property is available since version 1.3.3.
</td>
<td>null</td>
</tr>
<tr>
<td>plain</td>
<td>boolean</td>
<td>True to show a plain effect.</td>

<td>false</td>
</tr>
<tr>
<td>text</td>
<td>string</td>
<td>The button text.</td>
<td>''</td>
</tr>
<tr>
<td>iconCls</td>
<td>string</td>

<td>A CSS class to display a 16x16 icon on left.</td>
<td>null</td>
</tr>
<tr>
<td>iconAlign</td>
<td>string</td>
<td>
Position of the button icon. Possible values are: 'left','right'.
This property is available since version 1.3.2.
</td>
<td>left</td>
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
<td>Return options property.</td>
</tr>
<tr>
<td>disable</td>
<td>none</td>

<td>
Disable the button.
<p>Code example:</p>
<pre>
$('#btn').linkbutton('disable');
</pre>
</td>
</tr>
<tr>
<td>enable</td>
<td>none</td>
<td>
Enable the button.
<p>Code example:</p>
<pre>
$('#btn').linkbutton('enable');
</pre>
</td>
</tr>
<tr>
<td>select</td>
<td>none</td>
<td>Select the button. This method is available since version 1.3.3.</td>
</tr>
<tr>
<td>unselect</td>
<td>none</td>
<td>Unselect the button. This method is available since version 1.3.3.</td>
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
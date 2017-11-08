<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>combo - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-combo"]').each(function(){
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

<h3>Combo</h3>
<p>Extend from $.fn.validatebox.defaults. Override defaults with $.fn.combo.defaults.</p>
<p>
The combo display a editable text box and drop-down panel on html page.
It is the base component for building other complex combo components such as combobox, combotree, combogrid, etc.
</p>
<img src="images/combo.png"/>

<h4>Dependencies</h4>
<ul>
	<li>validatebox</li>
	<li>panel</li>
</ul>

<h4>Usage</h4>
<p>
The combo can be created from a &lt;select&gt; or &lt;input&gt; element using javascript.
Notice that creating combo from markup is not valid.
</p>
<textarea name="code-combo" class="html">
<input id="cc" value="001">
</textarea>
<textarea name="code-combo" class="js">
$('#cc').combo({
	required:true,
	multiple:true
});
</textarea>

<h4>Properties</h4>
<p>The properties extend from validatebox, below is the added properties for combo.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>

<td>width</td>
<td>number</td>
<td>The width of the component.</td>
<td>auto</td>
</tr>
<tr>
<td>height</td>
<td>number</td>
<td>The height of the component. This property is available since version 1.3.2.</td>
<td>22</td>
</tr>
<tr>
<td>panelWidth</td>
<td>number</td>
<td>The drop down panel width.</td>
<td>null</td>

</tr>
<tr>
<td>panelHeight</td>
<td>number</td>
<td>The drop down panel height.</td>
<td>200</td>
</tr>
<tr>
<td>multiple</td>
<td>boolean</td>
<td>Defines if support multiple selection.</td>

<td>false</td>
</tr>
<tr>
<td>selectOnNavigation</td>
<td>boolean</td>
<td>
Defines if to select an item when navigating items with keyboard.
This property is available since version 1.3.3.
</td>
<td>true</td>
</tr>
<tr>
<td>separator</td>
<td>string</td>
<td>The separator char for text when multiple selection.</td>
<td>,</td>
</tr>
<tr>
<td>editable</td>
<td>boolean</td>

<td>Defines if user can type text directly into the field.</td>
<td>true</td>
</tr>
<tr>
<td>disabled</td>
<td>boolean</td>
<td>Defines if to disable the field.</td>
<td>false</td>
</tr>
<tr>
<td>readonly</td>
<td>boolean</td>
<td>
Defines if the component is read-only.
This property is available since version 1.3.3.
</td>
<td>false</td>
</tr>
<tr>
<td>hasDownArrow</td>

<td>boolean</td>
<td>Defines if to display the down arrow button.</td>
<td>true</td>
</tr>
<tr>
<td>value</td>
<td>string</td>
<td>The default value.</td>
<td></td>
</tr>
<tr>
<td>delay</td>
<td>number</td>
<td>Delay to do searching from the last key input event.</td>
<td>200</td>
</tr>
<tr>

<td>keyHandler</td>
<td>object</td>
<td>
A function called when user press key. The default keyHandler is defined as:
<pre>
keyHandler: {
	up: function(){},
	down: function(){},
	enter: function(){},
	query: function(q){}
}
</pre>
</td>
<td></td>
</tr>
</table>

<br/>
<h4>Events</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>

</tr>
<tr>
<td>onShowPanel</td>
<td>none</td>
<td>Fires when drop down panel show.</td>
</tr>
<tr>
<td>onHidePanel</td>
<td>none</td>
<td>Fires when drop down panel hide.</td>
</tr>

<tr>
<td>onChange</td>
<td>newValue, oldValue</td>
<td>Fires when the field value is changed.</td>
</tr>
</table>

<br/>
<h4>Methods</h4>
<p>The methods extend from validatebox, below is the added methods for combo.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>options</td>
<td>none</td>
<td>Return the options object.</td>

</tr>
<tr>
<td>panel</td>
<td>none</td>
<td>Return the drop down panel object.</td>
</tr>
<tr>
<td>textbox</td>
<td>none</td>
<td>Retun the textbox object.</td>
</tr>

<tr>
<td>destroy</td>
<td>none</td>
<td>Destroy the component.</td>
</tr>
<tr>
<td>resize</td>
<td>width</td>
<td>Resize the component width.</td>
</tr>
<tr>

<td>showPanel</td>
<td>none</td>
<td>Show the drop down panel.</td>
</tr>
<tr>
<td>hidePanel</td>
<td>none</td>
<td>Hide the drop down panel.</td>
</tr>
<tr>
<td>disable</td>

<td>none</td>
<td>Disable the component.</td>
</tr>
<tr>
<td>enable</td>
<td>none</td>
<td>Enable the component.</td>
</tr>
<tr>
<td>readonly</td>
<td>mode</td>
<td>
Enable/Disable readonly mode. This method is available since version 1.3.3.<br/>
<p>Usage Example:</p>
<pre>
$('#cc').combo('readonly');		// enable readonly mode
$('#cc').combo('readonly', true);	// enable readonly mode
$('#cc').combo('readonly', false);	// disable readonly mode
</pre>
</td>
</tr>
<tr>
<td>validate</td>
<td>none</td>

<td>Validate the input value.</td>
</tr>
<tr>
<td>isValid</td>
<td>none</td>
<td>Return the validate result.</td>
</tr>
<tr>
<td>clear</td>
<td>none</td>
<td>Clear the component value.</td>

</tr>
<tr>
<td>reset</td>
<td>none</td>
<td>Reset the component value. This method is available since version 1.3.2.</td>
</tr>
<tr>
<td>getText</td>
<td>none</td>
<td>Get the input text.</td>
</tr>
<tr>
<td>setText</td>
<td>text</td>
<td>Set the text value.</td>
</tr>

<tr>
<td>getValues</td>
<td>none</td>
<td>Get the component value array.</td>
</tr>
<tr>
<td>setValues</td>
<td>values</td>
<td>Set the component value array.</td>
</tr>
<tr>

<td>getValue</td>
<td>none</td>
<td>Get the component value.</td>
</tr>
<tr>
<td>setValue</td>
<td>value</td>
<td>Set the component value.</td>
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
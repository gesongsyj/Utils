<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>messager - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-messager"]').each(function(){
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

<h3>Messager</h3>
<p>Override defaults with $.messager.defaults.</p>
<p>
the messager provide different styles of message boxes, including alert, confirm, prompt, progress, etc.
All the messager boxes are asynchronous.
Users can use the callback function to do something after interacting with messager.
</p>
<img src="images/messager.png"/>

<h4>Dependencies</h4>
<ul>
	<li>window</li>
	<li>linkbutton</li>
	<li>progressbar</li>
</ul>

<h4>Usage</h4>
<textarea name="code-messager" class="js">
$.messager.alert('Warning','The warning message');
$.messager.confirm('Confirm','Are you sure you want to delete record?',function(r){
	if (r){
		alert('ok');
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
<td>ok</td>
<td>string</td>

<td>The Ok button text.</td>
<td>Ok</td>
</tr>
<tr>
<td>cancel</td>
<td>string</td>
<td>The Cancel button text.</td>
<td>Cancel</td>
</tr>
</table>

<h4>Methods</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>

<td>$.messager.show</td>
<td>options</td>
<td>Show a message window on right bottom of screen. The options parameter is a configuration object:<br />
showType: Defines how the message window to be showed. Available values are: null,slide,fade,show. Defaults to slide.<br />
showSpeed: Defines the time in milliseconds message window finishs show. Defaults to 600.<br />
width: Defines the width of message window. Defaults to 250.<br />
height: Defines the height of message window. Defaults to 100.<br />
title: The title text to be showed on header panel.<br />
msg: The message text to be showed.<br />
style: Defines the custom dpecification style for message window.<br />
timeout: If defines to 0, the message window will not close unless user close it. Defines to unzero, the message window will be auto closed when timeout. Defaults to 4 seconds.
<p>Code example:</p>
<pre>
$.messager.show({
	title:'My Title',
	msg:'Message will be closed after 5 seconds.',
	timeout:5000,
	showType:'slide'
});
// show message window on top center
$.messager.show({
	title:'My Title',
	msg:'Message will be closed after 4 seconds.',
	showType:'show',
	style:{
		right:'',
		top:document.body.scrollTop+document.documentElement.scrollTop,
		bottom:''
	}
});
</pre>
</td>
</tr>
<tr>
<td>$.messager.alert</td>
<td>title, msg, icon, fn</td>
<td>Show an alert window. Parameters:<br />
title: The title text to be showed on header panel.<br />
msg: The message text to be showed.<br />
icon: The icon image to be showed. Available value are: error,question,info,warning.<br />
fn: The callback function triggered when window closed.
<p>Code example:</p>
<pre>
$.messager.alert('My Title','Here is a info message!','info');
</pre>
</td>

</tr>
<tr>
<td>$.messager.confirm</td>
<td>title, msg, fn</td>
<td>Show a confirmation message window with Ok and Cancel buttons. Parameters:<br />
title: The title text to be showed on header panel.<br />
msg: The message text to be showed.<br />
fn(b): The callback function, when user click Ok button, pass a true value to function, otherwise pass a false to it.
<p>Code example:</p>
<pre>
$.messager.confirm('Confirm', 'Are you sure to exit this system?', function(r){
	if (r){
		// exit action;
	}
});
</pre>
</td>
</tr>
<tr>
<td>$.messager.prompt</td>

<td>title, msg, fn</td>
<td>Show a message window with Ok and Cancel buttons prompting user to enter some text. Parameters:<br />
title: The title text to be showed on header panel.<br />
msg: The message text to be showed.<br />
fn(val): The callback function with a value parameter user entered.
<p>Code example:</p>
<pre>
$.messager.prompt('Prompt', 'Please enter your name:', function(r){
	if (r){
		alert('Your name is:' + r);
	}
});
</pre>
</td>
</tr>
<tr>
<td>$.messager.progress</td>
<td>options or method</td>
<td>
Show a progress message window. <br/>
The options is defined as:<br/>
title: The title text to be showed on header panel, default ''. <br/>
msg: The message box body text, default ''. <br/>
text: The text to display in the progress bar, default undefined. <br/>
interval: The length of time in milliseconds between each progress update, default 300. <br/>
<br/>
The method is defined as:<br/>
bar: Get the progressbar object. <br/>
close: Close the progress window. <br/>
<p>Code example:</p>
Show progress message window. <br/>
<pre>
	$.messager.progress(); 
</pre>
Now close the message window. <br/>
<pre>
	$.messager.progress('close');
</pre>

</td>
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
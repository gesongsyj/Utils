<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>form - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-form"]').each(function(){
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

<h3>Form</h3>
<p>Override defaults with $.fn.form.defaults.</p>
<p>
The form provides various methods to perform actions with form fields such as ajax submit, load, clear, etc.
When submiting the form, the 'validate' method can be called to check whether or not a form is valid.
</p>
<h4>Usage</h4>
<p>
Create a simple HTML form. Construct this as you normally would with and id, action and method values.
</p>
<textarea name="code-form" class="html">
<form id="ff" method="post">
	<div>
		<label for="name">Name:</label>
		<input class="easyui-validatebox" type="text" name="name" data-options="required:true" />
	</div>
	<div>
		<label for="email">Email:</label>
		<input class="easyui-validatebox" type="text" name="email" data-options="validType:'email'" />
	</div>
	...
</form>
</textarea>
<p>To make the form become ajax submit form</p>
<textarea name="code-form" class="js">
$('#ff').form({
	url:...,
	onSubmit: function(){
		// do some check
		// return false to prevent submit;
	},
	success:function(data){
		alert(data)
	}
});
// submit the form
$('#ff').submit();
</textarea>
<p>To do a submit action</p>
<textarea name="code-form" class="js">
// call 'submit' method of form plugin to submit the form
$('#ff').form('submit', {
	url:...,
	onSubmit: function(){
		// do some check
		// return false to prevent submit;
	},
	success:function(data){
		alert(data)
	}
});
</textarea>
<p>Submit with extra parameters</p>
<textarea name="code-form" class="js">
$('#ff').form('submit', {
	url:...,
	onSubmit: function(param){
		param.p1 = 'value1';
		param.p2 = 'value2';
	}
});
</textarea>

<h5>Handle submit response</h5>
<p>
Submitting an ajax form is very simple. Users can get the response data when the submission is finished.
Notice that the response data is the raw data from server.
A parse action to the response data is required to get the correct data.
</p>
<p>
For example, response data is assumed to be JSON, a typical response data may look like this:
</p>
<textarea name="code-form" class="js">
{
	"success": true,
	"message": "Message sent successfully."
}
</textarea>
<p>Now handle the JSON string in 'success' callback function.</p>
<textarea name="code-form" class="js">
$('#ff').form('submit', {
	success: function(data){
		var data = eval('(' + data + ')');  // change the JSON string to javascript object
		if (data.success){
			alert(data.message)
		}
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
<td>url</td>
<td>string</td>
<td>The form action URL to submit</td>
<td>null</td>
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
<td>onSubmit</td>
<td>param</td>

<td>Fires before submit, return false to prevent submit action.</td>
</tr>
<tr>
<td>success</td>
<td>data</td>
<td>Fires when the form is submitted successfuly.</td>
</tr>
<tr>
<td>onBeforeLoad</td>
<td>param</td>
<td>Fires before a request is made to load data. Return false to cancel this action.</td>

</tr>
<tr>
<td>onLoadSuccess</td>
<td>data</td>
<td>Fires when the form data is loaded.</td>
</tr>
<tr>
<td>onLoadError</td>
<td>none</td>
<td>Fires when some errors occur while loading form data.</td>
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
<td>submit</td>
<td>options</td>
<td>
Do the submit action, the options parameter is an object which contains following properties:<br />
url: the action URL<br />
onSubmit: callback function before submit<br />
success: callback function after submit successfuly<br />
<p>The example below shows how to submit a valid form and avoid duplicate submiting the form.</p>
<pre>
$.messager.progress();	// display the progress bar
$('#ff').form('submit', {
	url: ...,
	onSubmit: function(){
		var isValid = $(this).form('validate');
		if (!isValid){
			$.messager.progress('close');	// hide progress bar while the form is invalid
		}
		return isValid;	// return false will stop the form submission
	},
	success: function(){
		$.messager.progress('close');	// hide progress bar while submit successfully
	}
});
</pre>
</td>
</tr>
<tr>
<td>load</td>

<td>data</td>
<td>
Load records to fill the form.
The data parameter can be a string or a object type, when string acts as a remote URL, otherwise acts as a local record.
<p>Code example:</p>
<pre>
$('#ff').form('load','get_data.php');	// load from URL
</pre>
<pre>
$('#ff').form('load',{
	name:'name2',
	email:'mymail@gmail.com',
	subject:'subject2',
	message:'message2',
	language:5
});
</pre>
</td>
</tr>
<tr>
<td>clear</td>
<td>none</td>
<td>Clear the form data.</td>
</tr>
<tr>
<td>reset</td>
<td>none</td>
<td>Reset the form data. This method is available since version 1.3.2.</td>
</tr>
<tr>
<td>validate</td>

<td>none</td>
<td>Do the form fields validation, return true when all fields is valid. The method is used with the validatebox plugin.</td>
</tr>
<tr>
<td>enableValidation</td>
<td>none</td>
<td>Enable validation. This method is available since version 1.3.4.</td>
</tr>
<tr>
<td>disableValidation</td>
<td>none</td>
<td>Disable validation. This method is available since version 1.3.4.</td>
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
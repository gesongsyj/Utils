<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>validatebox - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-validatebox"]').each(function(){
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
			
<div style="padding:10px"><h3>ValidateBox</h3><p>Override defaults with $.fn.validatebox.defaults.</p><p>The validatebox is designed to validate the form input fields.If users enter invalid values, it will change the background color, display the alarm icon and a tooltip message.The validatebox can be integrated with form plugin and will prevent invalid fields from submission.</p><img src="images/validatebox.png"/><h4>Dependencies</h4><ul>	<li>tooltip</li></ul><h4>Usage</h4><p>Create validatebox from markup.</p><textarea name="code-validatebox" class="html"><input id="vv" class="easyui-validatebox" data-options="required:true,validType:'email'"></textarea><p>Create validatebox using javascript.</p><textarea name="code-validatebox" class="html"><input id="vv"></textarea><textarea name="code-validatebox" class="js">$('#vv').validatebox({	required: true,	validType: 'email'});</textarea><p>To check password and retype password are same.</p><textarea name="code-validatebox" class="js">// extend the 'equals' rule$.extend($.fn.validatebox.defaults.rules, {	equals: {		validator: function(value,param){			return value == $(param[0]).val();		},		message: 'Field do not match.'	}});</textarea><textarea name="code-validatebox" class="html"><input id="pwd" name="pwd" type="password" class="easyui-validatebox" data-options="required:true"><input id="rpwd" name="rpwd" type="password" class="easyui-validatebox" 	required="required" validType="equals['#pwd']"></textarea><h4>Validate Rule</h4><p>The validate rule is defined by using required and validType property, here are the rules already implemented:</p><ul>	<li>email: Match email regex rule.</li>	<li>url: Match URL regex rule.</li>	<li>length[0,100]: Between x and x characters allowed.</li>	<li>remote['http://.../action.do','paramName']: Send ajax request to do validate value, return 'true' when successfully.</li></ul><p>To custom validate rule, override $.fn.validatebox.defaults.rules that defines a validator function and invalid message. For example, to define a minLength valid type:</p><textarea name="code-validatebox" class="js">$.extend($.fn.validatebox.defaults.rules, {	minLength: {		validator: function(value, param){			return value.length >= param[0];		},		message: 'Please enter at least {0} characters.'	}});</textarea><p>Now you can use the minLength validtype to define an input box that should be inputed at least 5 characters:</p><textarea name="code-validatebox" class="html"><input class="easyui-validatebox" data-options="validType:'minLength[5]'"></textarea><h4>Properties</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>required</td><td>boolean</td><td>Defines if the field should be inputed.</td><td>false</td></tr><tr><td>validType</td><td>string,array</td><td>Defines the field valid type, such as email, url, etc. Possible values are:<br/>1) a valid type string, apply a single validate rule.<br/>2) an valid type array, apply multiple validate rules.The multiple validate rules on a field are available since version 1.3.2.<p>Code example:</p><pre>&lt;input class="easyui-validatebox" data-options="required:true,validType:'url'"&gt;&lt;input class="easyui-validatebox" data-options="	required:true,	validType:['email','length[0,20]']"&gt;</pre></td><td>null</td></tr><tr><td>delay</td><td>number</td><td>Delay to validate from the last inputting value.This property is available since version 1.3.2.</td><td>200</td></tr><tr><td>missingMessage</td><td>string</td><td>Tooltip text that appears when the text box is empty.</td><td>This field is required.</td></tr><tr><td>invalidMessage</td><td>string</td><td>Tooltip text that appears when the content of text box is invalid.</td><td>null</td></tr><tr><td>tipPosition</td><td>string</td><td>Defines the position of tip message when the content of text box is invalid. Possible values: 'left','right'.This property is available since version 1.3.2.</td><td>right</td></tr><tr><td>deltaX</td><td>number</td><td>Tooltip offset in the X direction. This property is available since version 1.3.3.</td><td>0</td></tr><tr><td>novalidate</td><td>boolean</td><td>True to turn off validation. This property is available since version 1.3.4.</td><td>false</td></tr></table><h4>Methods</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>destroy</td><td>none</td><td>Remove and destroy the component.</td></tr><tr><td>validate</td><td>none</td><td>Do the validation to determine whether the content of text box is valid.</td></tr><tr><td>isValid</td><td>none</td><td>Call validate method and return the validation result, true or false.</td></tr><tr><td>enableValidation</td><td>none</td><td>Enable validation. This method is available since version 1.3.4.</td></tr><tr><td>disableValidation</td><td>none</td><td>Disable validation. This method is available since version 1.3.4.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
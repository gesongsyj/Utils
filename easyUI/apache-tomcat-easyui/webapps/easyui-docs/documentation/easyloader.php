<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>easyloader - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-easyloader"]').each(function(){
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

<h3>EasyLoader</h3>
<h4>Usage</h4>
<h5>Load EasyUI module</h5>
<textarea name="code-easyloader" class="js">
easyloader.base = '../';    // set the easyui base directory
easyloader.load('messager', function(){        // load the specified module
    $.messager.alert('Title', 'load ok');
});
</textarea>
<h5>Load script from an absolute url</h5>
<textarea name="code-easyloader" class="js">
using('http://code.jquery.com/jquery-1.4.4.min.js', function(){
    // ...
});
</textarea>
<h5>Load script from relative url</h5>
<textarea name="code-easyloader" class="js">
// the script path relative to easyui directory
using('./myscript.js', function(){
    // ...
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
<td>modules</td>
<td>object</td>
<td>Predefined modules.</td>
<td></td>
</tr>
<tr>
<td>locales</td>

<td>object</td>
<td>Predefined locales.</td>
<td></td>
</tr>
<tr>
<td>base</td>
<td>string</td>
<td>The easyui base directory, must end with '/'.</td>
<td>The base directory will be auto setted relative to easyload.js</td>
</tr>
<tr>

<td>theme</td>
<td>string</td>
<td>The name of theme that defined in 'themes' directory</td>
<td>default</td>
</tr>
<tr>
<td>css</td>
<td>boolean</td>
<td>Defines if loading css file when loading module</td>
<td>true</td>

</tr>
<tr>
<td>locale</td>
<td>string</td>
<td>The locale name</td>
<td>null</td>
</tr>
<tr>
<td>timeout</td>
<td>number</td>
<td>Timeout value in milliseconds. Fires if a timeout occurs.</td>

<td>2000</td>
</tr>
</table>

<h4>Defined locales</h4>
<ul>
<li>af</li>
<li>bg</li>
<li>ca</li>
<li>cs</li>
<li>cz</li>
<li>da</li>
<li>de</li>
<li>en</li>
<li>es</li>
<li>fr</li>
<li>nl</li>
<li>tr</li>
<li>zh_CN</li>
<li>zh_TW</li>
</ul>

<h4>Events</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onProgress</td>
<td>name</td>

<td>Fires when a module is loaded successfully.</td>
</tr>
<tr>
<td>onLoad</td>
<td>name</td>
<td>Fires when a module and it's dependencies are loaded successfully.</td>
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
<td>load</td>
<td>module, callback</td>

<td>Load the specified module. When load success a callback function will be called.<br />
The module parameter valid type are:<br />
a single module name<br />
an module array<br />
a css file that end with '.css'<br />
a js file that end with '.js'</td>
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
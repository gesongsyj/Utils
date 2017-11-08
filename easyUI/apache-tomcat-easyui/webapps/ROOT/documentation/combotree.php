<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>combotree - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-combotree"]').each(function(){
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
			
<div style="padding:10px"><h3>ComboTree</h3><p>Extend from $.fn.combo.defaults and $.fn.tree.defaults. Override defaults with $.fn.combotree.defaults.</p><p>The combotree combines the selection control with drop-down tree.It is similar to combobox but replace the list with tree component.The combotree supports a tree with tree-state checkboxes for convenient multiple selection.</p><img src="images/combotree.png"/><h4>Dependencies</h4><ul>	<li>combo</li>	<li>tree</li></ul><h4>Usage</h4><p>Create combotree from markup.</p><textarea name="code-combotree" class="html"><select id="cc" class="easyui-combotree" style="width:200px;"		data-options="url:'get_data.php',required:true"></select></textarea><p>Create combotree using javascript.</p><textarea name="code-combotree" class="html"><input id="cc" value="01"></textarea><textarea name="code-combotree" class="js">$('#cc').combotree({	url: 'get_data.php',	required: true});</textarea><h4>Properties</h4><p>The properties extend from combo and tree, below is the overridden properties for combotree.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>editable</td><td>boolean</td><td>Defines if user can type text directly into the field.</td><td>false</td></tr></table><h4>Events</h4><p>The events extend from combo and tree.</p><h4>Methods</h4><p>The methods extend from combo, below is the added and overridden methods for combotree.</p><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the options object.</td></tr><tr><td>tree</td><td>none</td><td>Return the tree object.The example below shows how to get the selected tree node.<pre>var t = $('#cc').combotree('tree');	// get the tree objectvar n = t.tree('getSelected');		// get selected nodealert(n.text);</pre></td></tr><tr><td>loadData</td><td>data</td><td>Load the locale tree data.<p>Code example:</p><pre>$('#cc').combotree('loadData', [{	id: 1,	text: 'Languages',	children: [{		id: 11,		text: 'Java'	},{		id: 12,		text: 'C++'	}]}]);</pre></td></tr><tr><td>reload</td><td>url</td><td>Request the remote tree data again. Pass the 'url' parameter to override the original URL value.</td></tr><tr><td>clear</td><td>none</td><td>Clear the component value.</td></tr><tr><td>setValues</td><td>values</td><td>Set the component value array.<p>Code example:</p><pre>$('#cc').combotree('setValues', [1,3,21]);</pre></td></tr><tr><td>setValue</td><td>value</td><td>Set the component value.<p>Code example:</p><pre>$('#cc').combotree('setValue', 6);</pre></td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
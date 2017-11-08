<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>jQuery EasyUI - helps you build your web pages easily</title>
        <link rel="stylesheet" href="/css/main.css" type="text/css" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
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

<style type="text/css">
	li{
		list-style-type:circle;
	}
	a{
		text-decoration:none;
		color:#0E2D5F;
	}
	a:hover{
		color:#E26B1D;
	}
	.item-p{
		width:150px;
		height:25px;
		line-height:25px;
		float:left;
		margin-right:20px;
		padding-left:20px;
		background:url('css/images/gears.png') no-repeat 0 center;
	}
	.e-btn{
		display:inline-block;
		background:#ddd;
		padding:3px 4px;
		text-decoration:none;
		border:1px solid #ccc;
		border-radius:6px;
		color:#006600;
	}
	.e-title{
		background:url('css/images/bg.png');
		padding:10px;
	}
</style>

<div class="e-title">
<h3>Welcome to jQuery EasyUI</h3>
<img src="images/easyui.png" style="float:right"/>
<p style="font-size:14px">jQuery EasyUI framework helps you build your web pages easily.</p>
<ul>
<li>easyui is a collection of user-interface plugin based on jQuery.</li>
<li>easyui provides essential functionality for building modern, interactive, javascript applications.</li>
<li>using easyui you don't need to write many javascript code, you usually defines user-interface by writing some HTML markup.</li>
<li>complete framework for HTML5 web page.</li>
<li>easyui save your time and scales while developing your products.</li>
<li>easyui is very easy but powerful.</li>
</ul>
</div>

<div style="height:20px"></div>
<h4>Easy to use on jQuery and HTML5</h4>
<img src="images/html5.gif" style="float:right;width:200px" />
<p>
jQuery EasyUI provides easy to use components for web developers, which is built on the popular jQuery core and HTML5.
These make your applications suitable for today's web.
There are two ways to declare ui components:
</p>
<p>1. Declare components directly within HTML.</P>
<div style="padding-left:20px;background:#fafafa;">
<pre style="color:#006600">
&lt;div class="easyui-dialog" style="width:400px;height:200px"
    data-options="title:'My Dialog',collapsible:true,iconCls:'icon-ok',onOpen:function(){}"&gt;
        dialog content.
&lt;/div&gt;
</pre>
</div>
<p>2. Write JavaScript code to create components.</p>
<div style="padding-left:20px;background:#fafafa;">
<pre style="color:#006600">
&lt;input id="cc" style="width:200px" /&gt;
</pre>
<pre style="color:#006600">
$('#cc').combobox({
	url: ...,
	required: true,
	valueField: 'id',
	textField: 'text'
});
</pre>
</div>

<div style="height:20px"></div>
<table>
<tr>
<td style="padding-right:40px">
<img src="images/demos.jpg" style="width:300px">
</td>
<td style="vertical-align:top">
<h4>Tutorials and Demos are Ready</h4>
<p>
Lots of tutorials and demos applications help you learn more about this framework.
</p>
<p>
jQuery EasyUI provides everything you need for building your web page.
These tutorials will show you step-by-step how to create your application.
Enjoy and hopefully you can learn from them.
</p>
<p style="margin-top:40px">
<a href="demo/main/index.php" class="e-btn">See Demos</a>
</p>
</td>
</tr>
</table>



<div style="height:20px"></div>
<h4>All Plugins</h4>
<p>
jQuery EasyUI offers a full collection of components including powerful datagrid, treegrid, panel, combo and more for building cross-browser web page.
Users can use them all together, or just use some components he wants.
</p>

<div class="item-p">
<a href="/documentation/parser.php">parser</a></div>
<div class="item-p">
<a href="/documentation/easyloader.php">easyloader</a></div>
<div class="item-p">
<a href="/documentation/draggable.php">draggable</a></div>
<div class="item-p">
<a href="/documentation/droppable.php">droppable</a></div>
<div class="item-p">
<a href="/documentation/resizable.php">resizable</a></div>
<div class="item-p">
<a href="/documentation/pagination.php">pagination</a></div>
<div class="item-p">
<a href="/documentation/searchbox.php">searchbox</a></div>
<div class="item-p">
<a href="/documentation/progressbar.php">progressbar</a></div>
<div class="item-p">
<a href="/documentation/tooltip.php">tooltip</a></div>
<div class="item-p">
<a href="/documentation/panel.php">panel</a></div>
<div class="item-p">
<a href="/documentation/tabs.php">tabs</a></div>
<div class="item-p">
<a href="/documentation/accordion.php">accordion</a></div>
<div class="item-p">
<a href="/documentation/layout.php">layout</a></div>
<div class="item-p">
<a href="/documentation/menu.php">menu</a></div>
<div class="item-p">
<a href="/documentation/linkbutton.php">linkbutton</a></div>
<div class="item-p">
<a href="/documentation/menubutton.php">menubutton</a></div>
<div class="item-p">
<a href="/documentation/splitbutton.php">splitbutton</a></div>
<div class="item-p">
<a href="/documentation/form.php">form</a></div>
<div class="item-p">
<a href="/documentation/validatebox.php">validatebox</a></div>
<div class="item-p">
<a href="/documentation/combo.php">combo</a></div>
<div class="item-p">
<a href="/documentation/combobox.php">combobox</a></div>
<div class="item-p">
<a href="/documentation/combotree.php">combotree</a></div>
<div class="item-p">
<a href="/documentation/combogrid.php">combogrid</a></div>
<div class="item-p">
<a href="/documentation/numberbox.php">numberbox</a></div>
<div class="item-p">
<a href="/documentation/datebox.php">datebox</a></div>
<div class="item-p">
<a href="/documentation/datetimebox.php">datetimebox</a></div>
<div class="item-p">
<a href="/documentation/calendar.php">calendar</a></div>
<div class="item-p">
<a href="/documentation/spinner.php">spinner</a></div>
<div class="item-p">
<a href="/documentation/numberspinner.php">numberspinner</a></div>
<div class="item-p">
<a href="/documentation/timespinner.php">timespinner</a></div>
<div class="item-p">
<a href="/documentation/slider.php">slider</a></div>
<div class="item-p">
<a href="/documentation/window.php">window</a></div>
<div class="item-p">
<a href="/documentation/dialog.php">dialog</a></div>
<div class="item-p">
<a href="/documentation/messager.php">messager</a></div>
<div class="item-p">
<a href="/documentation/datagrid.php">datagrid</a></div>
<div class="item-p">
<a href="/documentation/propertygrid.php">propertygrid</a></div>
<div class="item-p">
<a href="/documentation/tree.php">tree</a></div>
<div class="item-p">
<a href="/documentation/treegrid.php">treegrid</a></div>

<div style="clear:both"/>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
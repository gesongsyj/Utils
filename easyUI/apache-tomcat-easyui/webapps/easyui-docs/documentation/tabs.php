<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>tabs - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-tabs"]').each(function(){
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

<h3>Tabs</h3>
<p>Override defaults with $.fn.tabs.defaults.</p>
<p>
The tabs display a collection of panel. It shows only one tab panel at a time.
Each tab panel has the header title and some mini button tools, including close button and other customized buttons.
</p>
<img src="images/tabs.png"/>

<h4>Dependencies</h4>
<ul>
	<li>panel</li>
	<li>linkbutton</li>
</ul>

<h4>Usage Example</h4>
<h5>Create tabs</h5>
<p>1. Create tabs via markup</p>
<p>
Create tabs from markup is even easier, we don't need to write any JavaScript code.
Remember to add 'easyui-tabs' class to &lt;div/&gt; markup.
Each tab panel is created via sub &lt;div/&gt; markup, the usage is same as panel.
</p>
<textarea name="code-tabs" class="html">
<div id="tt" class="easyui-tabs" style="width:500px;height:250px;">
	<div title="Tab1" style="padding:20px;display:none;">
		tab1
	</div>
	<div title="Tab2" data-options="closable:true" style="overflow:auto;padding:20px;display:none;">
		tab2
	</div>
	<div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="padding:20px;display:none;">
		tab3
	</div>
</div>
</textarea>

<p>2. Create tabs programatically</p>
<p>Now we create tabs programatically, we catch the 'onSelect' event also.</p>
<textarea name="code-tabs" class="js">
$('#tt').tabs({
	border:false,
	onSelect:function(title){
		alert(title+' is selected');
	}
});
</textarea>

<h5>Add new tab panel</h5>
<p>
Add a new tab panel with mini tools, the mini tools icon(8x8) is placed before the close button.
</p>
<textarea name="code-tabs" class="js">
// add a new tab panel
$('#tt').tabs('add',{
	title:'New Tab',
	content:'Tab Body',
	closable:true,
	tools:[{
		iconCls:'icon-mini-refresh',
		handler:function(){
			alert('refresh');
		}
	}]
});
</textarea>
<h5>Get the selected Tab</h5>
<textarea name="code-tabs" class="js">
// get the selected tab panel and its tab object
var pp = $('#tt').tabs('getSelected');
var tab = pp.panel('options').tab;    // the corresponding tab object	
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
<td>width</td>

<td>number</td>
<td>The width of tabs container.</td>
<td>auto</td>
</tr>
<tr>
<td>height</td>
<td>number</td>
<td>The height of tabs container.</td>
<td>auto</td>
</tr>

<tr>
<td>plain</td>
<td>boolean</td>
<td>True to render the tab strip without a background container image.</td>
<td>false</td>
</tr>
<tr>
<td>fit</td>
<td>boolean</td>
<td>True to set the size of tabs container to fit it's parent container.</td>

<td>false</td>
</tr>
<tr>
<td>border</td>
<td>boolean</td>
<td>True to show tabs container border.</td>
<td>true</td>
</tr>
<tr>
<td>scrollIncrement</td>
<td>number</td>

<td>The number of pixels to scroll each time a tab scroll button is pressed.</td>
<td>100</td>
</tr>
<tr>
<td>scrollDuration</td>
<td>number</td>
<td>The number of milliseconds that each scroll animation should last.</td>
<td>400</td>
</tr>
<tr>
<td>tools</td>

<td>array,selector</td>
<td>
The toolbar placed on left or right side of header. Possible values:<br/>
1. An array indicate the tools, each tool options is same as linkbutton.<br/>
2. A selector point to the &lt;div/&gt; that contains the tools.<br/>
<br/>
Code example:
<p>Define tools with an array.</p>
<pre>
$('#tt').tabs({
	tools:[{
		iconCls:'icon-add',
		handler:function(){
			alert('add')
		}
	},{
		iconCls:'icon-save',
		handler:function(){
			alert('save')
		}
	}]
});
</pre>
<p>Define tools with a exist DOM container.</p>
<pre>
$('#tt').tabs({
	tools:'#tab-tools'
});
&lt;div id="tab-tools"&gt;
	&lt;a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-add"&gt;&lt;/a&gt;
	&lt;a href="#" class="easyui-linkbutton" plain="true" iconCls="icon-save"&gt;&lt;/a&gt;
&lt;/div&gt;
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>toolPosition</td>
<td>string</td>
<td>
The toolbar position. Possible values: 'left','right'.
This property is available since version 1.3.2.
</td>
<td>right</td>
</tr>
<tr>
<td>tabPosition</td>
<td>string</td>
<td>
The tab position. Possible values: 'top','bottom','left','right'.
This property is available since version 1.3.2.
</td>
<td>top</td>
</tr>
<tr>
<td>headerWidth</td>
<td>number</td>
<td>
The tab header width, it is valid only when tabPosition is set to 'left' or 'right'.
This property is available since version 1.3.2.
</td>
<td>150</td>
</tr>
<tr>
<td>tabWidth</td>
<td>number</td>
<td>The width of tab strip. This property is available since version 1.3.4.</td>
<td>auto</td>
</tr>
<tr>
<td>tabHeight</td>
<td>number</td>
<td>The height of tab strip. This property is available since version 1.3.4.</td>
<td>27</td>
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
<td>onLoad</td>
<td>panel</td>
<td>Fires when an ajax tab panel finish loading remote data.</td>
</tr>
<tr>

<td>onSelect</td>
<td>title,index</td>
<td>Fires when user select a tab panel.</td>
</tr>
<tr>
<td>onBeforeClose</td>
<td>title,index</td>
<td>
Fires before the tab panel is closed, return false to cancel this close action.
The example below shows how to show confirm dialog before closing tab panel.
<pre>
$('#tt').tabs({
  onBeforeClose: function(title){
	return confirm('Are you sure you want to close ' + title);
  }
});
// using the async confirm dialog
$('#tt').tabs({
  onBeforeClose: function(title,index){
	var target = this;
	$.messager.confirm('Confirm','Are you sure you want to close '+title,function(r){
		if (r){
			var opts = $(target).tabs('options');
			var bc = opts.onBeforeClose;
			opts.onBeforeClose = function(){};  // allowed to close now
			$(target).tabs('close',index);
			opts.onBeforeClose = bc;  // restore the event function
		}
	});
	return false;	// prevent from closing
  }
});
</pre>
</td>
</tr>
<tr>
<td>onClose</td>

<td>title,index</td>
<td>Fires when user close a tab panel.</td>
</tr>
<tr>
<td>onAdd</td>
<td>title,index</td>
<td>Fires when a new tab panel is added.</td>
</tr>
<tr>
<td>onUpdate</td>
<td>title,index</td>

<td>Fires when a tab panel is updated.</td>
</tr>
<tr>
<td>onContextMenu</td>
<td>e, title,index</td>
<td>Fires when a tab panel is right clicked.</td>
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

<td>Return the tabs options.</td>
</tr>
<tr>
<td>tabs</td>
<td>none</td>
<td>Return all tab panels.</td>
</tr>
<tr>
<td>resize</td>
<td>none</td>
<td>Resize the tabs container and do layout.</td>

</tr>
<tr>
<td>add</td>
<td>options</td>
<td>
Add a new tab panel, the options parameter is a config object, see tab panel properties for more details.
When adding a new tab panel, it will become selected. <br/>
To add a unselected tab panel, remember to set 'selected' property to false.
<pre>
// add a unselected tab panel
$('#tt').tabs('add',{
	title: 'new tab',
	selected: false
	//...
});
</pre>
</td>
</tr>
<tr>
<td>close</td>
<td>which</td>
<td>Close a tab panel, the 'which' parameter can be the title or index of tab panel to be closed.</td>
</tr>

<tr>
<td>getTab</td>
<td>which</td>
<td>Get the specified tab panel, the 'which' parameter can be the title or index of tab panel.</td>
</tr>
<tr>
<td>getTabIndex</td>
<td>tab</td>
<td>Get the specified tab panel index</td>
</tr>
<tr>
<td>getSelected</td>
<td>none</td>
<td>
Get the selected tab panel. The example below shows how to get the index of selected tab panel.
<pre>
var tab = $('#tt').tabs('getSelected');
var index = $('#tt').tabs('getTabIndex',tab);
alert(index);
</pre>
</td>
</tr>
<tr>

<td>select</td>
<td>which</td>
<td>Select a tab panel, the 'which' parameter can be the title or index of tab panel.</td>
</tr>
<tr>
<td>exists</td>
<td>which</td>
<td>Indicate if the special panel is exists, the 'which' parameter can be the title or index of tab panel.</td>
</tr>
<tr>
<td>update</td>

<td>param</td>
<td>
Update the specified tab panel, the param parameter contains two properties:<br />
tab: the tab panel to be updated.<br />
options: the panel options.<br/>
<br/>
Code example:
<pre>
// update the selected panel with new title and content
var tab = $('#tt').tabs('getSelected');  // get selected panel
$('#tt').tabs('update', {
	tab: tab,
	options: {
		title: 'New Title',
		href: 'get_content.php'  // the new content URL
	}
});
</pre>
<pre>
// call 'refresh' method for tab panel to update its content
var tab = $('#tt').tabs('getSelected');  // get selected panel
tab.panel('refresh', 'get_content.php');
</pre>
</td>
</tr>
<tr>
<td>enableTab</td>
<td>which</td>
<td>
Enable the specified tab panel, the 'which' parameter can be the title or index of tab panel.
This method is available since version 1.3.
<p>Code example:</p>
<pre>
$('#tt').tabs('enableTab', 1);	// enable the second tab panel
$('#tt').tabs('enableTab', 'Tab2');	enable the tab panel that has 'Tab2' title
</pre>
</td>
</tr>
<tr>
<td>disableTab</td>
<td>which</td>
<td>
Disable the specified tab panel, the 'which' parameter can be the title or index of tab panel.
This method is available since version 1.3.
<p>Code example:</p>
<pre>
$('#tt').tabs('disableTab', 1);	// disable the second tab panel.
</pre>
</td>
</tr>
<tr>
<td>scrollBy</td>
<td>deltaX</td>
<td>
Scroll the tab header by the specified amount of pixels,
negative values scroll to the right, positive values scroll to the left.
This method is available since version 1.3.2.
<p>Code example:</p>
<pre>
// scroll the tab header to left
$('#tt').tabs('scroll', 10);
</pre>
</td>
</tr>
</table>

<h4>Tab Panel</h4>
<p>The tab panel properties is defined in panel component, below is some common properties.</p>
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
<td>The id attribute of tab panel.</td>
<td>null</td>
</tr>
<tr>
<td>title</td>

<td>string</td>
<td>The tab panel title text.</td>
<td></td>
</tr>
<tr>
<td>content</td>
<td>string</td>
<td>The tab panel content.</td>
<td></td>
</tr>
<tr>
<td>href</td>

<td>string</td>
<td>A URL to load remote content to fill the tab panel.</td>
<td>null</td>
</tr>
<tr>
<td>cache</td>
<td>boolean</td>
<td>True to cache the tab panel, valid when href property is setted.</td>
<td>true</td>
</tr>

<tr>
<td>iconCls</td>
<td>string</td>
<td>An icon CSS class to show on tab panel title.</td>
<td>null</td>
</tr>
<tr>
<td>width</td>
<td>number</td>
<td>The width of tab panel.</td>

<td>auto</td>
</tr>
<tr>
<td>height</td>
<td>number</td>
<td>The height of tab panel.</td>
<td>auto</td>
</tr>
</table>

<p>Some added properties.</p>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>
<th><strong>Default</strong></th>
</tr>
<tr>

<td>closable</td>
<td>boolean</td>
<td>When set to true, the tab panel will show a closable button which can click to close the tab panel.</td>
<td>false</td>
</tr>
<tr>
<td>selected</td>
<td>boolean</td>
<td>When set to true, tab tab panel will be selected.</td>
<td>false</td>

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
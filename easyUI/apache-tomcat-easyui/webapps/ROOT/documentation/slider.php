<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>slider - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-slider"]').each(function(){
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
			
<div style="padding:10px"><h3>Slider</h3><p>Override defaults with $.fn.slider.defaults.</p><p>The slider enables the user to choose a numeric value from a finite range.When moving the thumb control along the track, a tip will display to represent the current value.The user can customize slider by setting its properties.</p><img src="images/slider.png"/><h4>Dependencies</h4><ul>	<li>draggable</li></ul><h4>Usage Example</h4><p>When using as a form field, create slider from &lt;input&gt; markup.</p><textarea name="code-slider" class="html"><input class="easyui-slider" value="12"  style="width:300px"		data-options="showTip:true,rule:[0,'|',25,'|',50,'|',75,'|',100]"></textarea><p>Create slider from &lt;div/&gt; is also allowed but the 'value' attribute is invalid.</p><textarea name="code-slider" class="html"><div class="easyui-slider" data-options="min:10,max:90,step:10" style="width:300px"></div></textarea><p>Create slider programatically.</p><textarea name="code-slider" class="html"><div id="ss" style="height:200px"></div></textarea><textarea name="code-slider" class="js">$('#ss').slider({	mode: 'v',	tipFormatter: function(value){		return value + '%';	}});</textarea><h4>Properties</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Type</strong></th><th><strong>Description</strong></th><th><strong>Default</strong></th></tr><tr><td>width</td><td>number</td><td>The width of slider.</td><td>auto</td></tr><tr><td>height</td><td>number</td><td>The height of slider.</td><td>auto</td></tr><tr><td>mode</td><td>string</td><td>Indicate what type of slider. Possible values: 'h'(horizontal),'v'(vertical).</td><td>h</td></tr><tr><td>reversed</td><td>boolean</td><td>Set to true the minimum value and maximum value will switch their positions.This property is available since version 1.3.2.</td><td>false</td></tr><tr><td>showTip</td><td>boolean</td><td>Defines if to display value information tip.</td><td>false</td></tr><tr><td>disabled</td><td>boolean</td><td>Defines if to disable slider.</td><td>false</td></tr><tr><td>value</td><td>number</td><td>The default value.</td><td>0</td></tr><tr><td>min</td><td>number</td><td>The minimum allowed value.</td><td>0</td></tr><tr><td>max</td><td>number</td><td>The maximum allowed value.</td><td>100</td></tr><tr><td>step</td><td>number</td><td>The value to increase or descrease.</td><td>1</td><tr><td>rule</td><td>array</td><td>Display labels beside slider, '|' — show just line.</td><td>[]</td></tr><tr><td>tipFormatter</td><td>function</td><td>A function to format slider value. Return string value that will display as tip.</td><td></td></tr></table><h4>Events</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameters</strong></th><th><strong>Description</strong></th></tr><tr><td>onChange</td><td>newValue,oldValue</td><td>Fires when the field value is changed.</td></tr><tr><td>onSlideStart</td><td>value</td><td>Fires when begin to drag slider.</td></tr><tr><td>onSlideEnd</td><td>value</td><td>Fires when end to drag slider.</td></tr><tr><td>onComplete</td><td>value</td><td>Fires when the slider value is changed by user, no matter dragged or clicked the slider.This event is available since version 1.3.4.</td></tr></table><h4>Methods</h4><table class="doc-table"><tr><th><strong>Name</strong></th><th><strong>Parameter</strong></th><th><strong>Description</strong></th></tr><tr><td>options</td><td>none</td><td>Return the slider options.</td></tr><tr><td>destroy</td><td>none</td><td>Destroy the slider object.</td></tr><tr><td>resize</td><td>param</td><td>Set slider size. The 'param' parameter contains following properties:<br/>width: the new slider width<br/>height: the new slider height</td></tr><tr><td>getValue</td><td>none</td><td>Get slider value.</td></tr><tr><td>setValue</td><td>value</td><td>Set slider value.</td></tr><tr><td>enable</td><td>none</td><td>Enable the slider component.</td></tr><tr><td>disable</td><td>none</td><td>Disable the slider component.</td></tr></table></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
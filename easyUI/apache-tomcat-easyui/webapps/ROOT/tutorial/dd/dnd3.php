<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Creating a School Timetable - jQuery EasyUI</title>
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

<h3>Creating a School Timetable</h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Creating a School Timetable
</p>

<p>
This tutorial will show you how to create a school timetable using jQuery EasyUI. 
We will build two tables: school subjects on the left and timetable on the right. 
You could drag school subject and drop it on a timetable cell. 
The school subject is a &lt;div class="item"&gt; element while timetable cell is a &lt;td class="drop"&gt; element.
</p>
<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/dnd/dnd3_1.png"/>
<div>
	<a href="dnd3_demo.html" target="_blank">View Demo</a>
</div>

<h4>Displaying school subjects</h4>
<textarea name="code" class="html">
	<div class="left">
		<table>
			<tr>
				<td><div class="item">English</div></td>
			</tr>
			<tr>
				<td><div class="item">Science</div></td>
			</tr>
			<!-- other subjects -->
		</table>
	</div>
</textarea>

<h4>Displaying timetable</h4>
<textarea name="code" class="html">
	<div class="right">
		<table>
			<tr>
				<td class="blank"></td>
				<td class="title">Monday</td>
				<td class="title">Tuesday</td>
				<td class="title">Wednesday</td>
				<td class="title">Thursday</td>
				<td class="title">Friday</td>
			</tr>
			<tr>
				<td class="time">08:00</td>
				<td class="drop"></td>
				<td class="drop"></td>
				<td class="drop"></td>
				<td class="drop"></td>
				<td class="drop"></td>
			</tr>
			<!-- other cells -->
		</table>
	</div>
</textarea>

<h4>Drag the school subject on the left</h4>
<textarea name="code" class="js">
	$('.left .item').draggable({
		revert:true,
		proxy:'clone'
	});
</textarea>

<h4>Drop the school subject on timetable cell</h4>
<textarea name="code" class="js">
	$('.right td.drop').droppable({
		onDragEnter:function(){
			$(this).addClass('over');
		},
		onDragLeave:function(){
			$(this).removeClass('over');
		},
		onDrop:function(e,source){
			$(this).removeClass('over');
			if ($(source).hasClass('assigned')){
				$(this).append(source);
			} else {
				var c = $(source).clone().addClass('assigned');
				$(this).empty().append(c);
				c.draggable({
					revert:true
				});
			}
		}
	});
</textarea>

<p>
As you can see the code above, when users drag the school subject on the left and drop it to the timetable cell, 
the onDrop callback function will be called. We clone the source element dragged from left and append it on timetable cell. 
When dragging school subject from timetable cell to another cell, simply move it.
<p>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-timetable-demo.zip">easyui-timetable-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
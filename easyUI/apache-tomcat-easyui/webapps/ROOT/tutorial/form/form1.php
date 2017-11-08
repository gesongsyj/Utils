<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Submit a form with Ajax - jQuery EasyUI</title>
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

<h3>Submit a form with Ajax </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Submit a form with Ajax 
</p>

<p>This tutorial will show you how to submit a form with easyui. We create an example form with name, email and phone field. By using easyui form plugin we change the form to Ajax form. The form submits all the fields to the background server, the server processes and sends some data back to the front page. We receive the back data and show it out.</p>

<img src="images/form1.png"/>
<div>
	<a href="form1_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create Form</h4>
<textarea name="code" class="html">
	<div style="padding:3px 2px;border-bottom:1px solid #ccc">Ajax Form</div>
	<form id="ff" action="form1_proc.php" method="post">
		<table>
			<tr>
				<td>Name:</td>
				<td><input name="name" type="text"></input></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input name="email" type="text"></input></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input name="phone" type="text"></input></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></input></td>
			</tr>
		</table>
	</form>
</textarea>

<h4>Change to Ajax form</h4>
<textarea name="code" class="js">
	$('#ff').form({
		success:function(data){
			$.messager.alert('Info', data, 'info');
		}
	});
</textarea>

<h4>The Server Code</h4>
<div>form1_proc.php</div>
<textarea name="code" class="js">
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	echo "Your Name: $name <br/> Your Email: $email <br/> Your Phone: $phone";
</textarea>


<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-form1-demo.zip">easyui-form-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
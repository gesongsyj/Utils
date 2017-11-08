<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI works well on mobile devices as the demo shows.">
		<title>Live Demo - jQuery EasyUI</title>
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
<link rel="stylesheet" type="text/css" href="/easyui/themes/metro-gray/easyui.css"><link rel="stylesheet" type="text/css" href="/easyui/themes/icon.css"><link rel="stylesheet" type="text/css" href="/easyui/demo/demo.css"><link rel="stylesheet" href="/css/main.css" type="text/css" /><link rel="stylesheet" href="/css/demo1.css" type="text/css" /><link type="text/css" rel="stylesheet" href="../../prettify/prettify.css"></link><script src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript" src="/easyui/jquery.easyui.min.js"></script><script type="text/javascript" src="/easyui/datagrid-groupview.js"></script><style type="text/css">	.device{		width: 400px;		height: 760px;		margin:10px 0 0 170px;		background:url('../images/phone.png') no-repeat;		position:relative;	}	.demo-wrap{		position:absolute;		width:321px;		height:458px;		background: #ccc;		top:155px;		left:36px;	}</style><div class="submenu" style="margin-bottom:-10px;padding-left:20px">	<a href="../../demo/main/index.php">Web Demos</a>	<a href="../../demo-mobile/main/index.php">Mobile Demos</a>	<a href="../../themebuilder/index.php">Theme Builder</a></div><div style="position:relative;width:20px;height:20px;left:206px;top:1px">	<div class="submenu-arrow"></div>	<div class="submenu-arrow-inner"></div></div><div class="plugins" style="height:38px">	<ul>	<li><a href='javascript:void(0)' onclick="open2('LinkButton')">LinkButton</a></li><li><a href='javascript:void(0)' onclick="open2('Tabs')">Tabs</a></li><li><a href='javascript:void(0)' onclick="open2('DataGrid')">DataGrid</a></li><li><a href='javascript:void(0)' onclick="open2('Layout')">Layout</a></li><li><a href='javascript:void(0)' onclick="open2('Menu')">Menu</a></li><li><a href='javascript:void(0)' onclick="open2('Tree')">Tree</a></li><li><a href='javascript:void(0)' onclick="open2('ListView')">ListView</a></li><li><a href='javascript:void(0)' onclick="open2('DateBox')">DateBox</a></li>	</ul></div><div>	<div style="width:742px;float:right;background:#fff;border:1px solid #ddd;">		<div class="device">			<div class="demo-wrap">				<div id="demo" style="overflow:hidden;min-height:300px" data-options="						href:'../../easyui/demo-mobile/linkbutton/basic.html',						fit:true,						border:false,						extractor: function(data){	// define how to extract the content from ajax response, return extracted data							var pattern = /<body[^>]*>((.|[\n\r])*)<\/body>/im;							var matches = pattern.exec(data);							if (matches){								var cc = matches[1];	// only extract body content								if (matches[0].match(/body class=\Weasyui-layout\W/im)){									cc = '<div class=\'easyui-layout\' fit=true>'+cc+'</div>'								}								return cc;							} else {								return data;							}						},						onLoad:onLoad">				</div>			</div>		</div>		<div style="height:40px;line-height:40px;padding:0 20px;background:#fafafa;border:1px solid #ddd;border-width:1px 0">			<h2 style="margin:0">Source Code</h2>		</div>		<div id="code" style="height:260px;overflow:auto;direction:ltr;"></div>	</div>	<div>		<h3 style="border-bottom:1px solid #ddd;padding:18px 0 0 10px">LinkButton</h3>		<ul class='pitem'><li><a href='javascript:void(0)' onclick="open1('../../easyui/demo-mobile/linkbutton/basic.html',this)">Basic</a></li><li><a href='javascript:void(0)' onclick="open1('../../easyui/demo-mobile/linkbutton/group.html',this)">Button Group</a></li></ul>	</div>	<div style="clear:both"></div></div><div id="setting" style="position:absolute;">	<table>		<tr>			<td><span style="color:#999">Themes:</span></td>			<td>				<select id="cb-theme" data-options="editable:false,panelHeight:'auto',onChange:onChangeTheme">					<option value='black' >Black</option><option value='bootstrap' >Bootstrap</option><option value='metro' >Metro</option><option value='metro-blue' >Metro Blue</option><option value='metro-gray' selected>Metro Gray</option><option value='metro-green' >Metro Green</option><option value='metro-orange' >Metro Orange</option><option value='metro-red' >Metro Red</option>				</select>			</td>		</tr>	</table></div><script>	$(function(){		$('#demo').panel();		$('#cb-theme').combobox();		var dp = $('#demo').offset();		if ($('#ck-rtl').is(':checked')){			$('body').addClass('demo-rtl');			$('#setting').css({				left: (dp.left+15),				top: (dp.top+18)			});		} else {			$('#setting').css({				left: (dp.left+$('#demo').outerWidth()-$('#setting').outerWidth()+200),				top: (dp.top-150)			});		}	});	function onLoad(data){		data = data.replace(/(\r\n|\r|\n)/g, '\n');		data = data.replace(/\t/g, '    ');		$('#code').html('<pre name="code" class="prettyprint linenums" style="border:0"></pre>');		$('#code').find('pre').text(data);		prettyPrint();	}	function onChangeTheme(theme){		var link = $('#content').find('link:first');		link.attr('href', '/easyui/themes/'+theme+'/easyui.css');	}	var currPlugin = 'LinkButton';	var currPageItem = 'Basic';	function open1(url,a){		currPageItem = $(a).text();		$('body>div.menu-top').menu('destroy');		$('body>div.window>div.window-body').window('destroy');		$('#demo').panel('refresh',url);	}	function open2(plugin){		if (plugin){			currPlugin = plugin;			currPageItem = '';		}		var href = '?plugin=' + currPlugin + '&theme=' + $('#cb-theme').combobox('getValue');		href += '&dir=' + ($('#ck-rtl').is(':checked')?'rtl':'ltr');		href += '&pitem=' + currPageItem;		location.href = href;	}</script>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
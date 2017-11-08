<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Documentation - jQuery EasyUI</title>
		<link rel="stylesheet" type="text/css" href="/easyui/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="/easyui/jquery.easyui.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#tt').tabs({
					onLoad:function(panel){
						var plugin = panel.panel('options').title;
						panel.find('textarea[name="code-'+plugin+'"]').each(function(){
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
					}
				});
			});
			function open1(plugin){
				if ($('#tt').tabs('exists',plugin)){
					$('#tt').tabs('select', plugin);
				} else {
					$('#tt').tabs('add',{
						title:plugin,
						href:plugin+'.php',
						closable:true,
						extractor:function(data){
							data = $.fn.panel.defaults.extractor(data);
							var tmp = $('<div></div>').html(data);
							data = tmp.find('#content').html();
							tmp.remove();
							return data;
						}
					});
				}
			}
		</script>
	</head>
	<body class="easyui-layout" style="text-align:left">
		<div region="north" border="false" style="background:#666;text-align:center">
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
		<div region="west" border="false" split="true" title="Plugins" style="width:250px;padding:5px;">
			<ul class="easyui-tree">
				<li iconCls="icon-base"><span>Base</span><ul><li iconCls="icon-gears"><a href="#" onclick="open1('parser')">parser</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('easyloader')">easyloader</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('draggable')">draggable</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('droppable')">droppable</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('resizable')">resizable</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('pagination')">pagination</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('searchbox')">searchbox</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('progressbar')">progressbar</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('tooltip')">tooltip</a></li></ul></li><li iconCls="icon-layout"><span>Layout</span><ul><li iconCls="icon-gears"><a href="#" onclick="open1('panel')">panel</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('tabs')">tabs</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('accordion')">accordion</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('layout')">layout</a></li></ul></li><li iconCls="icon-menu"><span>Menu and Button</span><ul><li iconCls="icon-gears"><a href="#" onclick="open1('menu')">menu</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('linkbutton')">linkbutton</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('menubutton')">menubutton</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('splitbutton')">splitbutton</a></li></ul></li><li iconCls="icon-form"><span>Form</span><ul><li iconCls="icon-gears"><a href="#" onclick="open1('form')">form</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('validatebox')">validatebox</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('combo')">combo</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('combobox')">combobox</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('combotree')">combotree</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('combogrid')">combogrid</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('numberbox')">numberbox</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('datebox')">datebox</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('datetimebox')">datetimebox</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('calendar')">calendar</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('spinner')">spinner</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('numberspinner')">numberspinner</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('timespinner')">timespinner</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('slider')">slider</a></li></ul></li><li iconCls="icon-window"><span>Window</span><ul><li iconCls="icon-gears"><a href="#" onclick="open1('window')">window</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('dialog')">dialog</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('messager')">messager</a></li></ul></li><li iconCls="icon-datagrid"><span>DataGrid and Tree</span><ul><li iconCls="icon-gears"><a href="#" onclick="open1('datagrid')">datagrid</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('propertygrid')">propertygrid</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('tree')">tree</a></li><li iconCls="icon-gears"><a href="#" onclick="open1('treegrid')">treegrid</a></li></ul></li>			</ul>
		</div>
		<div region="center" border="false">
			<div id="tt" class="easyui-tabs" fit="true" border="false" plain="true">
				<div title="welcome" href="welcome.php"></div>
			</div>
		</div>
	</body>
</html>



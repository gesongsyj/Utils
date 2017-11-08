<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Enable DataGrid Inline Editing - jQuery EasyUI</title>
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

<h3>Enable DataGrid Inline Editing </h3>
<p>
	<a href="/tutorial/index.php">Tutorial</a> » Enable DataGrid Inline Editing 
</p>

<p>The editable feature was recently added to the datagrid. It enable the user to add a new row to the datagrid. The user may also update one or more rows. </p>
<p>This tutorial shows how to create a datagrid with inline editing.</p>

<img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/datagrid/datagrid12_1.png"/>
<div>
	<a href="datagrid12_demo.html" target="_blank">View Demo</a>
</div>

<h4>Create DataGrid</h4>
<textarea name="code" class="js">
	$(function(){
		$('#tt').datagrid({
			title:'Editable DataGrid',
			iconCls:'icon-edit',
			width:660,
			height:250,
			singleSelect:true,
			idField:'itemid',
			url:'datagrid_data.json',
			columns:[[
				{field:'itemid',title:'Item ID',width:60},
				{field:'productid',title:'Product',width:100,
					formatter:function(value){
						for(var i=0; i<products.length; i++){
							if (products[i].productid == value) return products[i].name;
						}
						return value;
					},
					editor:{
						type:'combobox',
						options:{
							valueField:'productid',
							textField:'name',
							data:products,
							required:true
						}
					}
				},
				{field:'listprice',title:'List Price',width:80,align:'right',editor:{type:'numberbox',options:{precision:1}}},
				{field:'unitcost',title:'Unit Cost',width:80,align:'right',editor:'numberbox'},
				{field:'attr1',title:'Attribute',width:150,editor:'text'},
				{field:'status',title:'Status',width:50,align:'center',
					editor:{
						type:'checkbox',
						options:{
							on: 'P',
							off: ''
						}
					}
				},
				{field:'action',title:'Action',width:70,align:'center',
					formatter:function(value,row,index){
						if (row.editing){
							var s = '<a href="#" onclick="saverow(this)">Save</a> ';
							var c = '<a href="#" onclick="cancelrow(this)">Cancel</a>';
							return s+c;
						} else {
							var e = '<a href="#" onclick="editrow(this)">Edit</a> ';
							var d = '<a href="#" onclick="deleterow(this)">Delete</a>';
							return e+d;
						}
					}
				}
			]],
			onBeforeEdit:function(index,row){
				row.editing = true;
				updateActions(index);
			},
			onAfterEdit:function(index,row){
				row.editing = false;
				updateActions(index);
			},
			onCancelEdit:function(index,row){
				row.editing = false;
				updateActions(index);
			}
		});
	});
	function updateActions(index){
		$('#tt').datagrid('updateRow',{
			index: index,
			row:{}
		});
	}
</textarea>

<p>To enable editing in datagrid, you should add a editor property to the columns. The editor tells datagrid how to edit the field and how to save the field value. As you can see we define three editor:text,combobox and checkbox.</p>
<textarea name="code" class="js">
	function getRowIndex(target){
		var tr = $(target).closest('tr.datagrid-row');
		return parseInt(tr.attr('datagrid-row-index'));
	}
	function editrow(target){
		$('#tt').datagrid('beginEdit', getRowIndex(target));
	}
	function deleterow(target){
		$.messager.confirm('Confirm','Are you sure?',function(r){
			if (r){
				$('#tt').datagrid('deleteRow', getRowIndex(target));
			}
		});
	}
	function saverow(target){
		$('#tt').datagrid('endEdit', getRowIndex(target));
	}
	function cancelrow(target){
		$('#tt').datagrid('cancelEdit', getRowIndex(target));
	}
</textarea>

<h4>Download the EasyUI example:</h4>
<div style="padding-left:50px">
	<div><a class="download-link" href="downloads/easyui-datagrid12-demo.zip">easyui-datagrid-demo.zip</a></div>
	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>Building a drag-drop shopping cart - jQuery EasyUI</title>
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
<h3>Building a drag-drop shopping cart</h3><p>	<a href="/tutorial/index.php">Tutorial</a> » Building a drag-drop shopping cart </p><p>If you can easily implement drag and drop with your web application, then you know you've got something special. With jQuery EasyUI, we have drag-drop capabilities in web application.</p><p>In this tutorial, we will show you how to build a shopping cart page which enables users to drag and drop the products they wish to buy. The shopping basket items and the price will be updated.</p><img src="http://jquery-easyui.googlecode.com/svn/trunk/share/tutorial/dnd/shopping.jpg" /><div>	<a href="dnd2_demo.html" target="_blank">View Demo</a></div><h4>Displaying products on the page:</h4><textarea name="code" class="html">	<ul class="products">		<li>			<a href="#" class="item">				<img src="images/shirt1.gif"/>				<div>					<p>Balloon</p>					<p>Price:$25</p>				</div>			</a>		</li>		<li>			<a href="#" class="item">				<img src="images/shirt2.gif"/>				<div>					<p>Feeling</p>					<p>Price:$25</p>				</div>			</a>		</li>		<!-- other products -->	</ul></textarea><p>As you can see in the code above, we add a &lt;ul&gt; element that contains some &lt;li&gt; elements to display the products. Every product has name and price properties which is contained inside the &lt;p&gt; element.</p><h4>Build the cart:</h4><textarea name="code" class="html">	<div class="cart">		<h1>Shopping Cart</h1>		<table id="cartcontent" style="width:300px;height:auto;">			<thead>				<tr>					<th field="name" width=140>Name</th>					<th field="quantity" width=60 align="right">Quantity</th>					<th field="price" width=60 align="right">Price</th>				</tr>			</thead>		</table>		<p class="total">Total: $0</p>		<h2>Drop here to add to cart</h2>	</div></textarea><p>We use the datagrid to show the shopping basket items.</p><h4>Dragging the cloned product:</h4><textarea name="code" class="js">	$('.item').draggable({		revert:true,		proxy:'clone',		onStartDrag:function(){			$(this).draggable('options').cursor = 'not-allowed';			$(this).draggable('proxy').css('z-index',10);		},		onStopDrag:function(){			$(this).draggable('options').cursor='move';		}	});</textarea><p>Notice that we set the draggable property 'proxy' to 'clone', so the dragged element will has clone effect.</p><h4>Dropping the selected product in the cart</h4><textarea name="code" class="js">	$('.cart').droppable({		onDragEnter:function(e,source){			$(source).draggable('options').cursor='auto';		},		onDragLeave:function(e,source){			$(source).draggable('options').cursor='not-allowed';		},		onDrop:function(e,source){			var name = $(source).find('p:eq(0)').html();			var price = $(source).find('p:eq(1)').html();			addProduct(name, parseFloat(price.split('$')[1]));		}	});	var data = {"total":0,"rows":[]};	var totalCost = 0;	function addProduct(name,price){		function add(){			for(var i=0; i<data.total; i++){				var row = data.rows[i];				if (row.name == name){					row.quantity += 1;					return;				}			}			data.total += 1;			data.rows.push({				name:name,				quantity:1,				price:price			});		}		add();		totalCost += price;		$('#cartcontent').datagrid('loadData', data);		$('div.cart .total').html('Total: $'+totalCost);	}	</textarea><p>When dropping the product, we get the product name and price first, then call 'addProduct' function to update shopping basket.</p><h4>Download the EasyUI example:</h4><div style="padding-left:50px">	<div><a class="download-link" href="downloads/easyui-shopping-demo.zip">easyui-shopping-demo.zip</a></div>	<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css"><script type="text/javascript" src="../../prettify/prettify.js"></script><script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script><script type="text/javascript">	$(function(){		$('textarea[name="code"]').each(function(){			var data = $(this).val();			data = data.replace(/(\r\n|\r|\n)/g, '\n');			if (data.indexOf('\t') == 0){				data = data.replace(/^\t/, '');				data = data.replace(/\n\t/g, '\n');			}			data = data.replace(/\t/g, '    ');			var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);			pre.text(data);			$(this).remove();		});		prettyPrint();	});</script><style scoped="scoped">	pre.prettyprinted{		overflow-x:auto;	}</style></div>﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>
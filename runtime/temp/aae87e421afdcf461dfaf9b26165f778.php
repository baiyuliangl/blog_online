<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"/home/www/blog/public/../application/admin/view/index/welcome.html";i:1541666314;s:56:"/home/www/blog/application/admin/view/layout/layout.html";i:1540972208;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>

﻿<body>
<div class="page-container">
	<p class="f-20 text-success">欢迎使用 BMH
	
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>服务器IP地址</td>
				<td><?php echo \think\Request::instance()->server('SERVER_ADDR'); ?></td>
			</tr>
			<tr>
				<td>服务器域名</td>
				<td><?php echo \think\Request::instance()->server('SERVER_NAME'); ?></td>
			</tr>
			<tr>
				<td>服务器端口 </td>
				<td><?php echo \think\Request::instance()->server('SERVER_PORT'); ?></td>
			</tr>
			<tr>
				<td>web服务器 </td>
				<td><?php echo \think\Request::instance()->server('SERVER_SOFTWARE'); ?></td>
			</tr>
			<tr>
				<td>根目录 </td>
				<td><?php echo \think\Request::instance()->server('SERVER_ROOT'); ?></td>
			</tr>
			<tr>
				<td>服务器操作系统 </td>
				<td><?php echo PHP_OS; ?></td>
			</tr>
			<tr>
				<td>php版本 </td>
				<td><?php echo PHP_VERSION; ?></td>
			</tr>
		</tbody>
	</table>
</div>

<!--此乃百度统计代码，请自行删除-->
<!--/此乃百度统计代码，请自行删除-->
</body>
</html>
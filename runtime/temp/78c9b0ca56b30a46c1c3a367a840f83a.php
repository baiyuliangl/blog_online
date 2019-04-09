<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"/home/www/blog/public/../application/admin/view/article/index.html";i:1551837029;s:56:"/home/www/blog/application/admin/view/layout/layout.html";i:1540972208;}*/ ?>
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

﻿<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 文章管理 <span class="c-gray en">&gt;</span> 文章列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加文章" data-href="<?php echo url('admin/article/create'); ?>" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加文章</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th>文章标题</th>
					<th width="80">文章分类</th>
					<th width="240">发布时间</th>
					<th width="75">浏览次数</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td><?php echo $i; ?></td>
					<td class="text-l"><?php echo $value['title']; ?></td>
					<td><?php echo $value['cat_name']; ?></td>
					<td><?php echo date('Y-m-d H:i:s',$value['created_at']); ?></td>
					<td><?php echo $value['views']; ?></td>
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="ml-5"  href="<?php echo url('/admin/article/'.$value['id'].'/edit'); ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						 <a style="text-decoration:none" class="ml-5" onClick="delArt(<?php echo $value['id']; ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div class="col-offset-10">
			<?php echo $res->render(); ?>
		</div>
	</div>
</div>


</body>
</html>

<script>
	function delArt(id){
		layer.confirm('你确定要删除吗',function(){
			$.ajax({
				type : 'DELETE',
				dateType : 'json',
				url : "../admin/article/"+id,
				success : function(data){
					if(data.status=='success'){
				
						layer.msg(data.info,{icon:1,time:1000},function(){
							location.href="<?php echo url('/admin/article'); ?>";	
						});
					}else{
						layer.msg(data.info,{icon:2,time:1000},function(){
							location.href="<?php echo url('/admin/article'); ?>"; 	
						});
					
					}
				}
			});
		});
	}

</script>

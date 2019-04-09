<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"/home/www/blog/public/../application/admin/view/Pic/index.html";i:1541658792;s:56:"/home/www/blog/application/admin/view/layout/layout.html";i:1540972208;}*/ ?>
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

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="<?php echo url('/admin/pic/create'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加图片</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">图片</th>
					<th>幻灯片标题</th>
					<th width="150">跳转地址</th>
					<th width="60">发布状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($pic) || $pic instanceof \think\Collection || $pic instanceof \think\Paginator): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo $i; ?></td>
					<td><img width="210" class="picture-thumb" src="/<?php echo $vo['img_url']; ?>"></td>
					<td class="text-l"><?php echo $vo['title']; ?></td>
					<td class="text-c"><?php echo $vo['url']; ?></td>
					<td class="td-status">
						<?php if(($vo['is_show']==1)): ?>
						<span class="label label-success radius">已发布</span>
						<?php else: ?>
						<span class="label label-fail radius">已发布</span>
						<?php endif; ?>
					</td>
					<td class="td-manage">
						<a style="text-decoration:none" class="ml-5" href="<?php echo url('/admin/pic/'.$vo['id'].'/edit'); ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						 <a style="text-decoration:none" class="ml-5" onClick="delPic(<?php echo $vo['id']; ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
</body>
</html>
<script>
	function delPic(id){
		$.ajax({
			type : 'delete',
			dataType : 'json',
			url  : '/admin/pic/'+id,
			success:function(data){
				if(data.status=='success'){
					layer.msg(data.info,{'icon':1},function(){
						location.href = '/admin/pic';
					});
				}else{
					layer.msg(data.info,{'icon':2},function(){
						location.href = '/admin/pic';
					});
				}
			}
		});
	}
</script>
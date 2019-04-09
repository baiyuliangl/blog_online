<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:64:"/home/www/blog/public/../application/index/view/index/index.html";i:1551325800;s:56:"/home/www/blog/application/index/view/layout/layout.html";i:1540960762;s:56:"/home/www/blog/application/index/view/layout/header.html";i:1551326156;s:54:"/home/www/blog/application/index/view/layout/side.html";i:1551437001;s:56:"/home/www/blog/application/index/view/layout/footer.html";i:1551328506;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta http-equiv="Cache-Control" content="no-transform" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <title><?php echo $sys['site_title']; ?></title> 
  <meta name="description" content="网站描述" /> 
  <meta name="keywords" content="网站关键词" /> 
  <!--[if lt IE 9]>
<script src="/static/home/js/html5.js"></script>
<script src="/static/home/js/css3-mediaqueries.js"></script>
<![endif]--> 
  <link rel="stylesheet" id="crayon-font-mydream-css" href="/static/home/css/mydream.css" type="text/css" media="all" /> 
  <link rel="stylesheet" id="style-css" href="/static/home/css/style.css" type="text/css" media="all" /> 
  <link rel="stylesheet" id="swiper-css-css" href="/static/home/css/swiper.min.css" type="text/css" media="all" /> 
  <script type="text/javascript" src="/static/home/js/jquery.min.js"></script> 
  <script src="/static/home/js/swipe.jquery.min.js"></script> 
  <link rel='stylesheet' id='iconfont-css'  href='/static/home/css/font.css' type='text/css' media='all' />
<script type='text/javascript' src='/static/home/js/superfish.js'></script>
 </head> 
 <body> 
  <header id="masthead" class="site-header"> 
   <div id="fix-header"></div> 
   <div id="menu-box"> 
    <div id="main-menu"> 
     <!-- <hgroup class="logo-sites"> 
      <h1 class="site-title"> <a href="www.lampol-blog.com/"><img src="/static/home/images/logo.png" alt="lampol" /></a> </h1> 
     </hgroup>  -->
     <div id="sidr-close"> 
      <a href="#sidr-close" class="toggle-sidr-close">&times;</a> 
     </div> 
     <a href="#sidr-main" id="navigation-toggle" class="bars"><i class="iconfont icon-viewheadline"></i></a> 
     <div id="site-nav-wrap"> 
      <nav id="site-nav" class="main-nav"> 
       <div class="menu-container"> 
        <ul id="menu" class="down-menu nav-menu"> 
          <?php if(isset($cur)): ?>
         <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="/"><i class="iconfont icon-home"></i>首页</a></li> 
         <?php else: ?>
         <li class="menu-item menu-item-type-custom menu-item-object-custom current_page_item"><a href="/"><i class="iconfont icon-home"></i>首页</a></li> 
         <?php endif; if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if((isset($cid) && $vo['id']==$cid)): ?>
         <li class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-has-children"><a href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['cat_name']; ?></a> </li> 
         <?php else: ?>
         <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children"><a href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['cat_name']; ?></a> </li>
         <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul> 
       </div> 
      </nav> 
     </div> 
    </div> 
    <div class="clear"></div> 
   </div> 
  </header> 
  

﻿<div class="breadcrumb"> 
   <div class="bull"> 
    <i class="iconfont icon-bullhorn" aria-hidden="true"></i> 
   </div> 
   <div id="scrolldiv"> 
    <div class="scrolltext"> 
     <ul> 
      <li>这应该是一个公告的位置吧嗯。。。。！</li> 
      <li>欢迎向本主题提供修改意见！</li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <div id="content"> 
   <!-- 幻灯片调用begin --> 
   <div id="slider" class="swiper-container"> 
    <div class="swiper-wrapper"> 
     <!-- 自定义栏目幻灯片show --> 
     <!-- 随机幻灯片--> 
     <?php if(is_array($pic) || $pic instanceof \think\Collection || $pic instanceof \think\Paginator): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
     <div class="swiper-slide"> 
      <div class="swiper-slide-image"> 
       <a href="<?php echo $vo['url']; ?>"><img src="/<?php echo $vo['img_url']; ?>" alt="<?php echo $vo['title']; ?>" /></a> 
      </div> 
      <div class="swiper-slide-text"> 
       <h2><a href="<?php echo $vo['url']; ?>" rel="bookmark"><?php echo $vo['title']; ?></a></h2> 
       <p> <a href="<?php echo $vo['url']; ?>" target="_blank" rel="bookmark"><?php echo $vo['title']; ?></a> </p> 
      </div> 
     </div> 
     <?php endforeach; endif; else: echo "" ;endif; ?> 
     <!-- 自定义幻灯片 --> 
    </div> 
    <div class="swiper-pagination"></div> 
    <div class="swiper-button-next"></div> 
    <div class="swiper-button-prev"></div> 
   </div> 
   <!-- 幻灯片调用end --> 

   <div id="primary" class="content-area"> 

      <!-- 文章内容开始 --> 
      <?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <article id="post-167" class="post-167 post type-post status-publish format-standard hentry category-au3 tag-ie11 tag-wmic tag-101"> 
     <div class="art-desc"> 
      <h3 class="art-t"> <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>" rel="bookmark" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a> </h3> 
      <div class="more"> 
        <a href="javascript:0;" rel="bookmark"><i class="iconfont icon-import"></i></a> 
      </div> 
      <div class="clear"></div> 
      <div style="min-height:150px;margin:20px"> 
       <div class="art-img"> 
         <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><img src="/<?php echo $vo['img_url']; ?>" alt="<?php echo $vo['title']; ?>" /></a> 
       </div> 
       <span class="art-main"><?php echo $vo['summary']; ?></span> 
      </div> 
      <div class="clear"></div> 
     </div> 
     <div class="art_ft"> 
      <div class="art-pub"> 
       <div class="views"> 
        <i class="iconfont icon-chartbar"></i> <?php echo $vo['views']; ?> 
       </div> 
       <div class="cmnt"> 
	       <a href='javascript:0;'> <i class="iconfont icon-messageprocessing"></i><?php echo $vo['comments']; ?></a>
       </div> 
      </div> 
      <div class="art-info"> 
       <span class="archive"><i class="iconfont icon-archive" aria-hidden="true"></i> <?php echo $vo['author']; ?></span> 
       <span class="data"><i class="iconfont icon-calendartext"></i> <?php echo date('Y-m-d H:i:s',$vo['created_at']); ?></span> 
       <span class="tag"><i class="iconfont icon-tagmultiple"></i><a href='javascript:0;'> <?php echo $vo['tag']; ?></a></span> 
      </div> 
     </div> 
     <div class="clear"></div> 
    </article> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- 文章内容结束 --> 
  
 <!-- 分页开始 --> 
    <nav class="navigation pagination" role="navigation"> 
     <?php echo $articles->render(); ?>
    </nav> 
 <!-- 分页结束--> 
   </div> 

   <script>

if($(window).width()>'533'){
        $('.pagination .active').addClass('page-numbers').addClass('current');
        $('.pagination').css('width','300px');
        $('.pagination li').css('float','left');
}else{

        $('.pagination li').addClass('page-numbers');
        if($('.active').text()=='1'){
                        
                $('.pagination li').last().addClass('current').css('margin-left','45%');
        }else{
                $('.pagination li').first().addClass('current').css('margin-left','45%');
        }
        $('.pagination li a').addClass('screen-reader-text');
}
</script>


<link rel="stylesheet" type="text/css" href="/static/admin/lib/Validform_v5.3.2/css/style.css">
<!-- 右侧开始--> 
   <div id="sidebar" class="widget-area"> 
<!-- 右侧搜索框开始--> 
    <aside id="search-2" class="widget widget_search"> 
     <div id="searchbar"> 
	     <form method="post" id="searchform" action="<?php echo url('/search'); ?>"> 
       <input type="text" datatype='hz|zm' errormsg='请输入2-10位的文字或字母'  name="words" id="s" placeholder="输入搜索内容"  /> 
       <button type="submit" id="searchsubmit">搜索</button> 
       <span class='Validform_checktip'></span>
	 </form> 
     </div> 
     <div class="clear"></div> 
    </aside> 
<!-- 右侧搜索框结束--> 
<!-- 右侧分类开始--> 
    <aside id="categories-2" class="widget widget_categories"> 
     <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>分类目录</h3> 
     <ul> 
      <?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <li class="cat-item cat-item-47"><a href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['cat_name']; ?></a> </li> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
     </ul> 
     <div class="clear"></div> 
    </aside> 
  <!-- 右侧分类结束--> 

  <!-- 近期文章开始--> 
    <aside id="recent-posts-2" class="widget widget_recent_entries"> 
     <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>近期文章</h3> 
     <ul> 
      <?php if(is_array($new_article) || $new_article instanceof \think\Collection || $new_article instanceof \think\Paginator): $i = 0; $__LIST__ = $new_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <li> <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['title']; ?></a> </li> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
     </ul> 
     <div class="clear"></div> 
    </aside> 
<!-- 近期文章结束--> 
    <aside id="img_cat-2" class="widget img_cat"> 
     <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>最多评论</h3> 
     <div class="img_cat"> 
      <ul> 
	      <?php if(is_array($most_comments) || $most_comments instanceof \think\Collection || $most_comments instanceof \think\Paginator): if( count($most_comments)==0 ) : echo "" ;else: foreach($most_comments as $key=>$value): ?>
	<div class="img-box"> 
        <div class="img-x2"> 
         <figure class="insets"> 
		 <a href="<?php echo url('/detail/',['aid'=>encrypt($value['id'])]); ?>"><img src="/<?php echo $value['img_url']; ?>" style="width:160px;height:100px;"  alt="<?php echo $value['title']; ?>" /></a> 
          <div class="img-title"> 
		  <a href="<?php echo url('/detail/',['aid'=>encrypt($value['id'])]); ?>" rel="bookmark"><?php echo $value['title']; ?></a> 
          </div> 
         </figure> 
        </div> 
       </div>
       <?php endforeach; endif; else: echo "" ;endif; ?> 
       <div class="clear"></div> 
      </ul> 
     </div> 
     <div class="clear"></div> 
    </aside> 

    <!-- 人们标签开始--> 
    <div class="sidebar-roll"> 
     <aside id="tag_cloud-2" class="widget tag_cloud"> 
      <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>热门标签</h3> 
      <div class="tagcloud"> 
       <?php if(is_array($hot_tag) || $hot_tag instanceof \think\Collection || $hot_tag instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <a href="javascript:;" class="tag-cloud-link tag-link-16 tag-link-position-2" style="color:#63e40e;font-size: 15px;;"><?php echo $vo; ?></a> 
       <?php endforeach; endif; else: echo "" ;endif; ?>
       <div class="clear"></div> 
      </div> 
      <div class="clear"></div> 
     </aside> 
    </div> 
  <!-- 热门标签结束--> 
   </div> 
   <div class="clear"></div> 
  </div>
  <script type="text/javascript" src="/static/admin/lib/Validform_v5.3.2/js/Validform_v5.3.2_min.js"></script>  
  <script>
$("#searchform").Validform({
        datatype:{
		"hz":/^[\u4e00-\u9fa5]{2,10}$/,
		"zm":/^[a-zA-Z]{2,10}$/	
	},
	tiptype:3

}); 

  </script>


  <!-- 友情链接 --> 
  <div id="links"> 
   <ul> 
    <li id="linkcat-25" class="linkcat"><h2>博友</h2> 
     <ul class="xoxo blogroll"> 
      <?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <span class="lx7"><span class="link-f"><a href="<?php echo $vo['site_url']; ?>" target="_blank"><?php echo $vo['site_name']; ?></a></span></span> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
     </ul> </li> 
    
   </ul> 
   <div class="clear"></div> 
  </div> 
  <!-- 版权说明 --> 
  <footer id="footer"> 
   <div id="contentinfo">
     Copyright &copy; 2007-2019 <?php echo $sys['site_right']; ?> All rights reserved. | Theme by  <?php echo $sys['site_no']; ?> 
   </div> 
  </footer> 
  <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true, /**循环**/
        autoplayDisableOnInteraction: false,
        direction: 'vertical',  /**切换方向**/  
        speed: 500,  /**幻灯片切换时间**/
        autoplay: 5000, /**设置，自动播放开启，并设置停留时间**/
        paginationClickable: true, /**导航可以点击**/
        effect: 'flip', /**切换效果**/  
    });
</script> 
 </body>
</html>
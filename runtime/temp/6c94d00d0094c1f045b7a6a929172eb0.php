<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"/home/www/blog/public/../application/index/view/Article/detail.html";i:1551540328;s:56:"/home/www/blog/application/index/view/layout/layout.html";i:1540960762;s:56:"/home/www/blog/application/index/view/layout/header.html";i:1551326156;s:54:"/home/www/blog/application/index/view/layout/side.html";i:1551437001;s:56:"/home/www/blog/application/index/view/layout/footer.html";i:1551328506;}*/ ?>
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
  

﻿    <div class="clear"></div> 
   </div> 
   <div class="breadcrumb"> 
    <a class="crumbs" title="返回首页" href="<?php echo url('/'); ?>">返回首页</a>
   </div> 
   <div id="content"> 
    <div id="primary" class="single-area"> 
     <main id="main" class="site-main" role="main"> 
      <!-- 文章内容 --> 
      <article id="post-93" class="post-93 post type-post status-publish format-standard hentry category-web-technology tag-ssl tag-startssl tag-43"> 
       <header class="entry-header"> 
        <div class="single-meta"> 
         <span><i class="iconfont icon-calendartext"></i>&nbsp;<?php echo date('Y-m-d H:i:s',$article['created_at']); ?></span> 
         <span><i class="iconfont icon-chartbar"></i>&nbsp;<?php echo $article['views']; ?></span> 
	 <span><a href="www.lampol-blog.com/93.html#comments"><i class="iconfont icon-messageprocessing"></i><?php echo $article['comments']; ?></a></span> 
        </div> 
        <div class="clear"></div> 
        <h1 class="entry-title"><?php echo $article['title']; ?></h1> 
        <div class="single-tag">
         <i class="iconfont icon-tagmultiple"></i>&nbsp;标签：
         <a href="javascript:0" rel="tag"><?php echo $article['tag']; ?></a>&nbsp;&nbsp;
        </div> 
        <div class="clear"></div> 
       </header> 
       <div class="single-content">
            <?php echo $article['contents']; ?>
       </div> 
       <!-- 文章点赞分享 --> 
       <div class="clear"></div> 
       <div id="social"> 
        <div class="social-main"> 
         <span class="share-sd"> <span class="share-s"><a href="javascript:void(0)" id="share-s" title="分享"><i class="iconfont icon-sharevariant"></i>分享</a></span> 
          <div id="share"> 
           <ul class="bdsharebuttonbox"> 
            <li><a title="分享到QQ空间" class="iconfont icon-kongjian" data-cmd="qzone"></a></li> 
            <li><a title="分享到QQ好友" class="iconfont icon-qq0" data-cmd="sqq"></a></li> 
            <li><a title="分享到新浪微博" class="iconfont icon-sina" data-cmd="tsina"></a></li> 
            <li><a title="分享到微信" class="iconfont icon-weixin0" data-cmd="weixin"></a></li> 
           </ul> 
          </div> </span> 
         <div class="clear"></div> 
        </div> 
       </div> 
      </article> 
      <div id="copyright"> 
       <img alt="" src="/static/home/images/nick.jpg" class="avatar avatar-72" width="72" height="72" /> 
       <ul class="spostinfo"> 
        <li>原文链接：<a target="_blank" rel="nofollow" href="<?php echo url('/detail',['aid'=>encrypt($article['id'])],'',true); ?>">原文链接</a></li>
        <li>版权声明：本站原创文章，于<?php echo date('Y-m-d H:i:s',$article['created_at']); ?>，由<span title="由skysmile发布" rel="author"><?php echo $article['author']; ?></span>发表。</li> 
        <li>转载请注明：<span rel="bookmark" title="本文固定链接 www.lampol-blog.com/93.html"><?php echo $article['title']; ?></span></li> 
       </ul> 
      </div> 
      <div id="related-img"> 
       <!--如果存在tag标签，列出tag相关文章 --> 
       <!-- 如果tag相关文章少于10篇，那么继续以分类作为相关因素列出相关文章 --> 
       <?php if(is_array($randArticle) || $randArticle instanceof \think\Collection || $randArticle instanceof \think\Paginator): $i = 0; $__LIST__ = $randArticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <div class="r4"> 
        <div class="related-site"> 
         <figure class="related-site-img"> 
          <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><img src="/<?php echo $vo['img_url']; ?>" alt="<?php echo $vo['title']; ?>" /></a> 
         </figure> 
         <div class="related-title">
          <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><?php echo $vo['title']; ?></a>
         </div> 
        </div> 
       </div> 
       <?php endforeach; endif; else: echo "" ;endif; ?>
       <div class="clear"></div> 
      </div> 
      <!-- 上下文 --> 
      <nav class="nav-single"> 
        <?php if((is_array($upArticle))): ?>
       <a href="<?php echo url('/detail',['aid'=>encrypt($upArticle['id'])]); ?>" rel="prev"><span class="meta-nav"><span class="post-nav"><i class="iconfont icon-chevronleft"></i> 上一篇</span><br /><?php echo $upArticle['title']; ?></span></a>
       <?php else: ?>
       <span class="meta-nav"><span class="post-nav">没有了<br /></span><?php echo $upArticle; ?></span> 
       <?php endif; if((is_array($nextArticle))): ?>
       <a href="<?php echo url('/detail',['aid'=>encrypt($nextArticle['id'])]); ?>" rel="prev"><span class="meta-nav"><span class="post-nav"><i class="iconfont icon-chevronleft"></i> 下一篇</span><br /><?php echo $nextArticle['title']; ?></span></a>
       <?php else: ?>
       <span class="meta-nav"><span class="post-nav">没有了<br /></span><?php echo $nextArticle; ?></span> 
       <?php endif; ?>
       <div class="clear"></div> 
      </nav>
      <!-- 文章评论 --> 
      <!-- 引用 --> 
      <div id="comments" class="comments-area"> 
	      <?php if(is_array($new_comments)): ?>
	      <h2 class="comments-title"> <?php echo $article['comments']; ?> 条留言 </h2> 
       <ol class="comment-list"> 
	       <?php if(is_array($new_comments) || $new_comments instanceof \think\Collection || $new_comments instanceof \think\Paginator): if( count($new_comments)==0 ) : echo "" ;else: foreach($new_comments as $key=>$value): ?>
	 <li class="comment even thread-even depth-1 parent" id="comment-34"> 
         <div id="div-comment-34" class="comment-body"> 
          <div class="comment-author vcard"> 
           <img alt="" src="/static/home/images/tx-2.jpg" class="avatar avatar-48" width="48" height="48" /> 
           <!--<cite class="fn">卡珊德拉</cite> <span class="says">:</span>--> 
           <strong> 匿名用户 </strong> 
	   <span class="comment-meta commentmetadata"> <br /> <span class="comment-aux">  <?php echo date("Y-m-d H:i:s",$key); ?> <span class="floor"> &nbsp;沙发 </span> </span> </span> 
          </div> 
	  <p><?php echo $value; ?></p> 
         </div> 
 </li>
 <?php endforeach; endif; else: echo "" ;endif; ?>
       </ol>
	<?php else: ?>
	<h2 class="comments-title"> <?php echo $new_comments; ?> </h2>
	<?php endif; ?>
       <div id="respond" class="comment-respond"> 
        <h3 id="reply-title" class="comment-reply-title">给我留言<small><a rel="nofollow" id="cancel-comment-reply-link" href="/93.html#respond" style="display:none;">取消回复</a></small></h3> 
	<form action="<?php echo url('/comment'); ?>" method="post" id="commentform"> 
         <input type='hidden' name='id' value='<?php echo $article['id']; ?>'/>
		<?php echo token(); ?>
	 <div class="clear"></div> 
         <p class="comment-tool"> 
		 <span class="smiley-box">
	评论内容
</span> </p> 
         <p class="comment-form-comment"><textarea id="comment" name="comments" rows="4" tabindex="4"></textarea></p> 
	 <div style="margin-left:50%;padding:10px"> <input type="text" name="captcha" placeholder='请输入验证码'  value="" />
	 <img src="/captcha.html" onclick="this.src='/captcha.html?' + Math.random();" style=""></div
	 
	 <p class="form-submit"> <input id="submit" name="submit" type="submit" tabindex="5" value="提&nbsp;交" /> <input id="reset" name="reset" type="reset" tabindex="6" value="重&nbsp;写" /> <input type="hidden" name="comment_post_ID" value="93" id="comment_post_ID" /> <input type="hidden" name="comment_parent" id="comment_parent" value="0" /> </p> 
        </form> 

       </div> 
      </div> 
      <!-- #comments --> 
     </main> 
    </div> 
   <!-- 返回顶部 --> 
   <ul id="scroll"> 
    <li><a class="hidden-widget" href="javascript:hiddenwidget()" title="隐藏侧边栏"><i class="iconfont icon-windowclose"></i></a></li> 
    <li><a class="scroll-top" title="返回顶部"><i class="iconfont icon-chevronup"></i></a></li> 
    <li><a class="scroll-bottom" title="转到底部"><i class="iconfont icon-chevrondown"></i></a></li> 
   </ul> 
  </header>
 </body>
</html>
<script>
  $('#share-s').click(function(){
    $('#share').toggle();
  });
  window._bd_share_config = {
    common : {
      bdText : '<?php echo $article['title']; ?>', 
      bdDesc : '<?php echo $article['summary']; ?>', 
      bdUrl :  window.location.href,   
      bdPic :  '<?php echo $host; ?>/<?php echo $article['img_url']; ?>'
    },
    share : [{
      "bdSize" : 16
    }],
  }
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='<?php echo $host; ?>/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
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
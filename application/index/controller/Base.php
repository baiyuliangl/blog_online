<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\View;
class Base extends Controller
{
    public function _initialize(){
    	//查询分类
    	$cat = Db::name('category')->select();
    	//查询最新的文章
    	$new_article = Db::name('article')->field(['id','title'])->order('created_at DESC')->limit(10)->select()->toArray();
    	//获取热门标签
    	$hot_tag = Db::name('article')->order('views DESC')->distinct(true)->limit(20)->column('tag');
	//查询最多评论
	$most_comments = Db::name('article')->field(['id','title','img_url'])->order('comments DESC')->limit(4)->select()->toArray();
        //获取友情链接
        $link = Db::name('link')->order('order_by')->select()->toArray();
        //获取系统配置信息
        $sys = Db::name('sys')->find();
        
	View::share('most_comments',$most_comments);
        View::share('cat',$cat);
        View::share('sys',$sys);
        View::share('link',$link);
        View::share('new_article',$new_article);
        View::share('hot_tag',$hot_tag);
    }
}
;

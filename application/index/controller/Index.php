<?php
namespace app\index\controller;

use app\index\controller\Base;
use app\index\model\Article;
use think\Db;
class Index extends Base
{
    public function index()
    {
        $Article = new Article();
    	$articles = $Article->getAllArticle();
    	$pic = Db::name('pic')->where('is_show',1)->select()->toArray();
    	$this->assign('pic',$pic);
    	$this->assign('articles',$articles);
    	$this->assign('cur','cur');
        return $this->fetch();
    }

}

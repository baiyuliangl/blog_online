<?php
namespace app\index\controller;

use app\index\controller\Base;
use think\Db;
use think\Request;
use Predis\Client as Redis;
use think\Config;
class Article extends Base
{
		public function list($cid){
			$cid = decrypt($cid);
			$article = Db::name('article')->where('cat_id',$cid)->field(['id','title','author','img_url','summary','tag','created_at','views'])->paginate(10);

			$cat_name = Db::name('category')->where('id',$cid)->value('cat_name');
			$this->assign('article',$article);
			$this->assign('cid',$cid);
			$this->assign('cat_name',$cat_name);
			return $this->fetch('Article/list');
		}

		public function detail($aid){
			$id = decrypt($aid);
			$host = Request::instance()->domain();
			$article = Db::name('article')->find($id);
			$scan_num = Db::name('article')->where('id',$id)->setInc('views',5);
			$cat_id = Db::name('article')->where('id',$id)->value('cat_id');
			$randArticle = Db::name('article')->where('cat_id',$cat_id)->field(['id','img_url','title'])->orderRaw('rand()')->limit(2)->select()->toArray();
			//上一篇文章
			$upArticle = Db::name('article')->field(['id','title'])->where('id','<',$id)->orderRaw('id DESC')->limit(1)->find();
			if(empty($upArticle)){
				$upArticle ='已是最新文章';
			}
			//下一篇文章
			$nextArticle = Db::name('article')->field(['id','title'])->where('id','>',$id)->orderRaw('id ASC')->limit(1)->find();
			if(empty($nextArticle)){
				$nextArticle ='已是最后文章';
			}
			//点击量
			$scan_num = Db::name('article')->where('id',$id)->setInc('views',5);
			
			//把评论存入redis中
			$config = Config::get('redis');                                                         
			$redis = new Redis($config);
			$key = 'article-'.$id;
			$comments = $redis->SMEMBERS($key);

			foreach($comments as &$v){
				list($comment,$time) = explode('==|==',$v);
				$new_comments[$time] = $comment;
				krsort($new_comments);	
			}
			if(empty($new_comments)){
				$new_comments = '此文章没有评论内容。';
			}
			$this->assign('new_comments',$new_comments);
			$this->assign('article',$article);
			$this->assign('host',$host);
			$this->assign('randArticle',$randArticle);
			$this->assign('nextArticle',$nextArticle);
			$this->assign('upArticle',$upArticle);
			return $this->fetch('Article/detail');
		}
		public function comment(Request $request){
			$validate = validate('UserValidate');
			$check = $request->only(['captcha','__token__']);

			if(!$validate->check($check)){
                             $this->error($validate->getError());
			}
			$time = time();
			$comment = $request->param('comments','','htmlspecialchars,trim');	
			$config = Config::get('redis');
			$redis = new Redis($config);
			$id = $request->param('id');
			$key = 'article-'.$id;
			$value = $comment.'==|=='.$time;
			$res = $redis->SADD($key,$value);
			if(!$res){
				return $this->error();
			}
			$comment_num = Db::name('article')->where('id',$id)->setInc('comments');
			return $this->success('评论成功');
		}
}

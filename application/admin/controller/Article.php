<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
use app\admin\model\Article as Articles;
use app\admin\model\Category;
class Article extends Base
{
    public function index()
    {
    	$res = Db::name('article')->alias('a')->field('a.id,a.title,a.views,a.created_at,c.cat_name')->join('category c','a.cat_id=c.id')->paginate(10);
        $count = Db::name('article')->count();

        return $this->fetch('',[
        	'res' => $res,
            'count'=>$count
        ]);
    }

    public function create(){
    	$res = Db::name('category')->select();
	return $this->fetch('article/add',[
    		'res' => $res
    	]);
    }

    public function save(Request $request){
	$data = $request->except(['file']);
    	$article = new Articles;
    	$res = $article->AddArt($data);
    	if($res['status']=='success'){
    		return $this->success($res['info'],\think\Url::build('/admin/article'));
    	}else{
    		return $this->error($res['info'],\think\Url::build('/admin/article'));
    	}
    }

    public function edit($id){
    	
    	$res = Db::name('article')->alias('a')->field('a.id,a.title,a.summary,a.tag,a.author,a.img_url,a.contents,c.cat_name,a.cat_id')->join('category c','a.cat_id=c.id','LEFT')->where('a.id',$id)->select();
        $cats = DB::name('category')->select()->toArray();
    	return $this->fetch('',[
            'res' => $res,
    		'cats' => $cats
    	]);
    }

    public function update(Request $request, $id){
    	$data = $request->except(['_method','file']);
    	$res = Db::name('article')->where('id',$id)->update($data);

    	if($res){
    		return 	$this->success('更新成功',\think\Url::build('/admin/article'));
    	}else{
    		return 	$this->error('更新失败',\think\Url::build('/admin/article'));
    	}
    }


    public function delete($id){
    	$delete = Db::name('article')->where('id',$id)->delete();
    	if($delete){
			$delete = ['status'=>'success','info'=>'删除文章内容成功'];	
		}else{
			$delete = ['status'=>'error','info'=>'删除文章内容失败'];
		}
    	return json($delete);
    }
    
}

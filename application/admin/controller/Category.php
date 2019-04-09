<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Category as Cat;
class Category extends Base
{
	public function index(){
		$res = Db::name('category')->select();
		return $this->fetch('Category/index',['res'=>$res]);
	}

	public function save(Request $request){
		// echo "<pre>";
		// print_r($request->param());exit;
		$validate = validate('CatValidate');

		if(!$validate->check($request->param())){
			return $this->error($validate->getError(),\think\Url::build('/admin/cat'));
		}
		$cat_name = $request->param('cat_name','trim');
		$cat_desc = $request->param('cat_desc','trim');

		$cat = new Cat;
		$res = $cat->AddCat($cat_name,$cat_desc);

		if($res['status']=='error'){
			return $this->error($res['info'],\think\Url::build('/admin/cat'));
		}
		return $this->success($res['info'],\think\Url::build('/admin/cat'));
	}

	public function edit($id){
		$res = Db::name('category')->select();
		$one = Db::name('category')->where('id',$id)->select();
		return $this->fetch('Category/index',[
			'res'=>$res,
			'one'=>$one
		]);
	}

	public function update(Request $request,$id){
		$validate = validate('CatValidate');

		if(!$validate->check($request->param())){
			return $this->error($validate->getError(),\think\Url::build('/admin/cat'));
		}
		$data = ['cat_name'=>$request->param('cat_name'),'cat_desc'=>$request->param('cat_desc')];
		$update = Db::name('category')->where('id',$id)->update($data);
		if($update){
			return $this->success('更新成功',\think\Url::build('/admin/cat'));
		}else{
			return $this->error('更新失败',\think\Url::build('/admin/cat'));
		}
	}

	public function delete($id){
		$res = Db::name('article')->where('cat_id',$id)->find();
		if($res){
			$delete = ['status'=>'error','info'=>'分类下面还有文章不能删除'];
			return json($delete);
		}

		$delete = Db::name('category')->where('id',$id)->delete();
		if($delete){
			// return $this->success('删除成功',\think\Url::build('/admin/cat'));
			$delete = ['status'=>'success','info'=>'删除成功'];
		}else{
			// return $this->error('删除失败',\think\Url::build('/admin/cat'));
			$delete = ['status'=>'error','info'=>'删除失败'];
		}
		dump($delete);exit;
		return json($delete);
	}
}

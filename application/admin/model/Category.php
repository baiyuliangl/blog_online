<?php
namespace app\admin\model;

use think\Model;

class Category extends Model
{
	public function AddCat($cat_name,$cat_desc){
		$save = $this->save([
			'cat_name' => $cat_name,
			'cat_desc' => $cat_desc
		]);
		if($save){
			$res = ['status'=>'success','info'=>'添加分类成功'];
		}else{
			$res = ['status'=>'error','info'=>'添加分类失败'];
		}
		return $res;
	}
}

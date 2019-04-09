<?php
namespace app\admin\model;

use think\Model;

class Article extends Model
{	
	protected $autoWriteTimestamp = true;
	// 定义时间戳字段名
	protected $createTime = 'created_at';
	protected $updateTime = 'updated_at';

	public function AddArt($data){
		if($this->save($data)){
			$res = ['status'=>'success','info'=>'添加成功'];
		}else{
			$res = ['status'=>'error','info'=>'添加失败'];
		}
		return $res;
	}
}
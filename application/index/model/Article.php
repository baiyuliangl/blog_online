<?php
namespace app\index\model;

use think\Model;

class Article extends Model
{
	public function getAllArticle(){
		$data = $this->field(['id','title','author','img_url','summary','tag','created_at','views','comments'])->paginate(12);
		return $data;
	}
}

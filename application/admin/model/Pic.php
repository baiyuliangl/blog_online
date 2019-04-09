<?php

namespace app\admin\Model;
use think\Model;
class Pic extends Model
{
	public function addPic($data){
		return $this->save($data);
	}
}


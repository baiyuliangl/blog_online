<?php
namespace app\admin\model;
use think\Model;

class Admin extends Model
{
	public function checkLogin($username,$password){
		$admin = $this->where('username',$username)->find();
		if($admin){
			$user = $admin->toArray();
			if($user['password']==$password){
				$res = ['status'=>'success','info'=>'登陆成功'];
			}else{
				$res = ['status'=>'error','info'=>'密码不正确'];
			}
		}else{
			$res = ['status'=>'error','info'=>'用户名不存在'];
		}

		return $res;
	}
}
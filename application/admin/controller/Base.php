<?php
namespace app\admin\Controller;

use think\Controller;
use think\Requset;
use think\Session;

class Base extends Controller
{
	public function _initialize(){
		if(!Session::get('username')){
			return $this->redirect(\think\Url::build('/admin/login'));
		}
	}
}
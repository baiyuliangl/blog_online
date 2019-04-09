<?php
namespace app\admin\controller;
use think\Controller;
use think\captcha\Captcha;
use think\Config;
use think\Request;
use think\Session;
use app\admin\model\Admin;
class Login extends Controller
{
	public function Index(Request $request){
		if($request->isPost()){
			$validate = validate('UserValidate');
			$check = $request->only(['captcha','__token__']);
			if(!$validate->check($check)){
				return $this->error($validate->getError(),'login');
			}
			$username = $request->param('username','trim');
			$password = $request->param('password','trim');

			$admin = new Admin;
			$res = $admin->checkLogin($username,$password);
			if($res['status']=='error'){
				return $this->error($res['info'],'login');
			}
			Session::set('username',$username);
			return $this->success($res['info'],\think\Url::build('/admin/index'));
		}elseif($request->isGET()){
			return $this->fetch('login/login');
		}
	}

	public function captcha(){
		$config = config::get('captcha');
		$captcha = new captcha($config);
		return $captcha->entry();
	}

	public function loginout(){
		Session::delete('username');
		return $this->redirect(\think\Url::build('/admin/login'));
	}
}
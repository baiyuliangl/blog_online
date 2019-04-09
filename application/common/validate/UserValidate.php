<?php
namespace app\common\validate;

use think\validate;

class UserValidate extends validate
{
	protected $rule = ['captcha|验证码'=>'require|length:4|captcha|token'];
}
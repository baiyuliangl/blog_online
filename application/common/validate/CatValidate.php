<?php
namespace app\common\validate;

use think\Validate;

class CatValidate extends Validate
{
	protected $rule = ['cat_name|分类名称'=>'require|length:2,6|token','cat_desc|分类描述'=>'require|length:4,12'];

}


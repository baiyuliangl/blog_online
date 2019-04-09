<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\controller\Base;
use lampol\SphinxClient;
use think\Config;
class Search extends Base
{
	public function search(Request $request){
		$sc = new SphinxClient ();
		$words = $request->param('words','trim');
		$host = 'localhost';
		$port = 9312;
		$index = "article";
		//设置 sphinx服务以及端口 默认是localhost 端口9312
		
		$sc->SetServer ( $host, $port );
		
		////设置连接的超时时间
		
		$sc->SetConnectTimeout ( 1 );
		
		//返回数组的数据格式
		$sc->SetArrayResult ( true );
		//开始查询
		$res = $sc->Query ( $words, $index );
		//
		$this->assign('words',$words);
		if(isset($res['matches'])){
			$this->assign('res',$res['matches']);
		}else{
			$this->assign('res','没有匹配的数据');
		}
		return $this->fetch('list');
	}

}

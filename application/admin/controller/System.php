<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Sys;
class System extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $res = Db::name('sys')->find();
        $this->assign('res',$res);
        return $this->fetch('');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($request->param());exit;
        $request = $request->except(['_method','file']);
        $sys = new sys;
        $save = $sys->where('id',$id)->update($request);
        if($save){
            return $this->success('修改成功','/admin/system');
        }else{
            return $this->error('修改失败','/admin/system');
        }
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}

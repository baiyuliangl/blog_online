<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Link as Link_model;
use app\admin\controller\Base;
class Link extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $link = new Link_model;
        $res = $link->select()->toArray();
        $this->assign('res',$res);
        return $this->fetch('Link/index');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch('Link/Add');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $request = $request->param();
        $link = new Link_model;
        $save = $link->save($request);
        if($save){
            return $this->success('添加成功','/admin/link');
        }else{
            return $this->error('添加失败','/admin/link');
        }
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
        $link = new Link_model;
        $res = $link->where('id',$id)->find()->toArray();
        $this->assign('res',$res);
        return $this->fetch('Link/edit');
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
        $data = $request->except(['_method','fiele']);
        $link = new Link_model;
        $save = $link->where('id',$id)->update($data);
        if($save){
            return $this->success('添加成功','/admin/link');
        }else{
            return $this->error('添加失败','/admin/link');
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
        $Link = new Link_model;
        $delete = $Link->where('id',$id)->delete();
        if($delete){
            $res = ['status'=>'success','info'=>'删除友情链接成功'];
        }else{
            $res = ['status'=>'fail','info'=>'删除友情链接失败'];
        }
        return json($res);
    }
}

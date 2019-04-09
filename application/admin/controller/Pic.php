<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Pic as Pics;

class Pic extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $pic = Db::name('pic')->field(['summary'],true)->select()->toArray();
        $this->assign('pic',$pic);
        return $this->fetch('Pic/index');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch('Pic/Add');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->except('file');
        $picture = new Pics;
        $savePic = $picture->addPic($data);

        if($savePic){
            return $this->success('添加成功','/admin/pic');
        }else{
            return $this->success('添加失败','/admin/pic');
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
        $edit = Db::name('pic')->where('id',$id)->find();
        $this->assign('edit',$edit);
        return $this->fetch('Pic/edit');
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
        $data = $request->except(['_method','file']);
        $save = Db::name('pic')->where('id',$id)->update($data);
        if($save){
            return $this->success('修改成功','/admin/pic');
        }else{
            return $this->error('修改失败','/admin/pic');
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
        $picture = new Pics;
        $delete = $picture->where('id',$id)->delete();
        if($delete){
            $res = ['status'=>'success','info'=>'删除幻灯片成功'];
        }else{
            $res = ['status'=>'fail','info'=>'删除幻灯片失败'];
        }
        return json($res);
    }
}

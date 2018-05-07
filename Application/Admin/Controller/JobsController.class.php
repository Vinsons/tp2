<?php
namespace Admin\Controller;
use Think\Controller;
class JobsController extends Controller {
	//显示职位信息
    public function index(){
     	$Jobs = M('Jobs');
     	$count = $Jobs->count();
     	$list = $Jobs ->select();
     	dump($list);
     	$this->assign('list',$list);
     	$this->display();
     }

     //新增职位信息
     public function insert()
     {	
     	//获取新增表格数据
     	$data = $_POST;
     	//如果新增数据为空的话
     	if (empty($data)) {
     		
     	}else{
     		$Jobs = M('Jobs');
     		$Jobs ->create();
     		$result = $Jobs->add();
     		if ($result) {
     			$this->success('新增成功',U('Jobs/index'));
     		}else{
     			$this->error('新增失败',U('Jobs/insert'));
     		}
     	}

     }

     //获取要编辑的职位信息
     public function edit()
     {
     	$Jobs = M('Jobs');
     	$id = I('get.id');
     	$list = $Jobs->where('id=$id')->find();
     	$this ->assign('list',$list);
     	$this ->assign('title','显示编辑信息');
     	$this->display();

     }
     //将编辑的数据写入数据库
     public function update()
     {
     	$Jobs = M('Jobs');
     	if ($Jobs->create()) {
     		if ($insertid = $Jobs->save()) {//保存数据
    			$this->success('更新成功，受影响的行数是：'.$insertid,U('Jobs/index'));
    		}else{
    			$this->error('更新失败');
     	}
     }
     //物理上删除
     public function delete($id)
     {
     	$id = I('get.id');//获取id值
     	$Jobs = M('Jobs');//实例化数据
     	$result = $Jobs->delete($id);//直接删除编号
     	if ($result) {
     		$this->success('删除成功',U('Jobs/index'));
     	}else{
     		$this->error('删除失败',U('Jobs/index'));
     	}
     }
     //逻辑上删除,改变status状态值
     public function del($id)
     {
     	$id = I('get.id');//获取要改变值得id
     	$Jobs = M('Jobs');//数据库实例化
     	$data['status'] = '0';//获取要更改数据库的信息
     	$result = $Jobs -> where('id = $id') ->save($data); //执行要改变值得编号数据，并保存
     	if ($result) {
     		$this->success('删除成功',U('Jobs/index'));
     	}else{
     		$this->error('删除失败',U('Jobs/index'));
     		
     	}
     }



}
<?php
namespace Admin\Controller;
use Think\Controller;
class AddressController extends Controller {
    public function index(){
      $Address = M('Address');
      $count = $Address->count();
      $page=new \Org\Bjy\Page($count,5);
      $list=$Address->limit($page->firstRow.','.$page->listRows)->select();
    //    dump($list);
      $show=$page->show();
       // dump($show);
      $this ->assign('list',$list);
      $this ->assign('count',$count);
      $this ->assign('page',$show);
      $this -> display();
    }
    //增加
    public function insert()
    {
    	$data = $_POST;
    	if (empty($data)) {
    		
    	}else{
    		$Address = M('Address');
    		$Address ->create();
     		$result = $Address->add();
     		if ($result) {
     			$this->success('新增成功',U('Jobs/index'));
     		}else{
     			$this->error('新增失败',U('Jobs/insert'));
     		}	

    	}
    }
    //获取编辑数据
    public function edit()
    {
    	$Address = M('Address');
    	$id = I('get.id');
    	$list = $Address->where('id=$id')->select();
    	$this->assign('list',$list);
    	$this ->assign('title','显示编辑信息');
    	$this->display();
    	
    }

    //更新数据
    public function update()
    {
    	$Address = M('Address');
    	if ($Address->create()) {//创建数据对象
     		if ($insertid = $Address->save()) {//保存到数据库
    			$this->success('更新成功，受影响的行数是：'.$insertid,U('Address/index'));
    		}else{
    			$this->error('更新失败');
     	}
     }
    }

    public function delete()
    {
    	$Address = ('Address');
    	$id = I('get.id');
    	$result= $Address->delete($id);
    	if ($result) {
    		$this->success('删除成功',U('Address/index'));
    	}else{
    		$this->error('删除失败');
    	}
    }


    public function del()
    {
    	$Address = M('Address');
    	$id = I('get.id');
    	$Address['status'] = '0';
    	$result = $Address-> where('id=$id')->save($data);
    	if ($result) {
    		$this->success('删除成功',U('Address/index'));
    	}else{
    		$this->error('删除失败');
    	}
    }



}
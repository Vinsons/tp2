<?php
namespace Admin\Controller;
use Think\Controller;
class ContextController extends Controller {
    public function index(){
       $Context = M('Context');
       $count = $Context->count();
       $list = $Context->select();
       dump($count);
       dump($list);
       $this ->assign('list',$list);
       }

       public function insert()
       {
       	# code..
       	$data = $_POST;
       
       	if (empty($data)) {
       		# code...
       	}else{
       		$Context = M('Context');
       		$Context->create();
       		$result = $Context->add();
       		if ($result) {
       			$this->success('新增数据成功',U('Context/index'));
       			
       		}else{
       			$this->error();
       		}
       	}
       }

       public function edit()
       {
       		$id = I('get.id');
       		$Context = M('Context');
       		$list = $Context->where('id=$id')->find();
       		$this->assign('list',$list);
       		$this->assign('title','编辑信息');
       		$this->display();
       }
       public function update()
       {
       	$Context = M('Context');
       	if ($Context->create()) {
       		if ($insertid = $Context->save()) {
       			 $this->success('更新成功，受影响的行数是：'.$insertid,U('Context/index'));
        }else{
          $this->error('更新失败');
       	}
       }
       public function delete($id)
       {
       		$id = I('get.id');
       		$Context = M('Context');
       		$result = $Context->delete($id);
       		if ($result) {
       			$this->success('删除数据成功',U('Context/index'));
       		}else{
       			$this->error('删除数据失败');
       		}
       }
       public function del($id)
       {
       		$id = I('get.id');
       		$Context=M('Context');
       		$data['status'] = '0';
       		$result = $Context->where('id=$id')->save($data);
       		if ($result) {
       			$this->success('删除数据成功',U('Context/index'));

       		}else{
       			$this->error('删除数据失败');
       		}
       }
}
<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    	$User = M("User");
      $count = $User->count();
    	$list = $User->select();
    	$this ->assign('list',$list);
    	//dump($list);
      $this->display();

       }
    public function insert()
       {
       $data = $_POST;

       if (empty($data)) {
         # code...
       }else{
        $User = M('User');
        $User->create();
        $result = $User->add();
        if ($result) {
          # code...
          $this->success('新增数据成功',U('User/index'));
        }else{
          $this->error('新增数据失败',U('User/insert'));
        }
       }
       }
   public function edit()//编辑框，获得id值返回id的详细内容
   {
     # code...
     $id=I('get.id');
     $User = M('User');
     $list=$User->where('id=$id')->find();
     $this->assign('list',$list);
     $this ->assign('title','显示编辑信息');
     $this->display();
   }
    public function update()
    {
    	$User = M('User');//实例化模型
      if ($User->create()) { //如果数据被创建
        if ($insertid = $User->save()) {//则执行保存数据
          $this->success('更新成功，受影响的行数是：'.$insertid,U('User/index'));
        }else{
          $this->error('更新失败');
      }

    }


     public function delete($id)
        {
          $id = I('get.id');
          $User = M('User');
          $result = $User->delete($id);
          if ($result) {
            $this->success('删除数据成功',U('User/index'));
          }else{
            $this->error('删除失败');
          }
        }
        public function del($id)
        {
          # code...
          $id=I('get.id');
          $User = M('User');
          $data['status'] = '0';
          $result = $User->where('id=$id')->save($data);
          if ($result) {
            # code...
            this->success('删除数据成功',U('User/index'));
          }else{
            $this->error('删除数据失败');
          }
        }
}
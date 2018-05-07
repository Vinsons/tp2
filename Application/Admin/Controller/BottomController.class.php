<?php
namespace Admin\Controller;
use Think\Controller;
class BottomController extends Controller {
    public function index(){
       	$Bottom = M('Bottom');
       	$count = $Bottom->count();
       	$list = $Bottom->select();
       	dump($list);
       	$this->assign('list',$list);

       }
       public function insert()
       {
       		$data = $_POST;
       		if ($data) {
       			# code...
       		}else{
       			$Bottom = M('Bottom');
       			$Bottom->create();
       			$result =$Bottom->add();
       			if ($result) {
       				$this->success('新增数据成功',U('Bottom/index'));
       			}else{
       				$this->error('新增数据失败');
       			}
       		}
       }
}
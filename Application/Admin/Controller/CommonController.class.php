<?php 
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize() {
       if (!isset($_SESSION['id'])) {
			$this->error('对不起,您还没有登录!请先登录!', U('Admin/Login/index'), 1);
			}
			    }
}


 ?>
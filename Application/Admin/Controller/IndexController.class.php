<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends CommonController {
	 public function _initialize() {
	   		 parent::_initialize();  // 调用父类的构造方法
	}
    public function index(){
    	
        $this->display('index');
    }
	

    public function welcome()
    {   
         $d = $_SERVER['DOCUMENT_ROOT']; 
        dump($d) ;
        $win=  $_SERVER["SERVER_SOFTWARE"];
        dump($win);
    	// $ip = get_client_ip(1);
     //    dump('ip是：'.$ip);
        //对接ip库
        $ip = "http://ip.taobao.com/service/getIpInfo.php?ip=".get_client_ip();
        //获取ip信息
        $IpInfo = json_decode(file_get_contents($ip));
        //获取省份
        $province = $IpInfo->data->region;
        dump($ip);
    	$this->assign('ip',$ip);
    	$this->display();
    }
    //退出登录
    public function Logout(){
        session(null);
        $this -> success('退出成功',U('Admin/Login/index'),3);
    }

}
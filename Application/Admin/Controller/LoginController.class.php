<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
      	$this->display('login');
    }
     //检查登录
   public function checkLogin(){
        //获取从前台传过来的post数组
        $post = I('post.');//dump($post);
        
       // dump($result);
        //先检测验证码的正确性
       
            //建立模型
            $model = M('User');
            //删除前端获取的验证码
           
            //从数据库查找与post匹配的值，只返回一条
            $data = $model -> where($post) -> find();
           
          //  dump($data);
            if($data){
                //如果存在，则session保存编号，用户名
                session('id',$data['id']);
                session('username',$data['username']);
                $data['logintime']=date("Y-m-d H:i:s");
                session('datetime',$data['logintime']);
                //  dump(date("Y-m-d H:i:s"));
                $data['numbers'] = $data['numbers']+1;
                session('numbers',$data['numbers']);
                $model ->where($post) -> save($data); 
                //返回成功页面，并等待3s
                $this -> success('登录成功',U('Index/index'),3);
            }else{
                $this ->error('用户名账号或密码错误');
            }
        

    }
    
}
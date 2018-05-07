<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
   
 	 public function index() {
        $img=M('upload_img');
        $sel=$img->order('create_time desc')->find();
        $this->assign('data', $sel);
        $this->display();
    }
    public function upload(){
         $upload_img=M('upload_img');
          if(!empty($_FILES)){
              //上传单个图像
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     1*1024*1024 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =      'Public/Uploads/'; // 设置附件上传根目录
                $upload->savePath  =      ''; // 设置附件上传（子）目录
                $upload->saveName=array('uniqid','');//上传文件的保存规则
                $upload->autoSub  = true;//自动使用子目录保存上传文件 
                $upload->subName  = array('date','Ymd');
                // 上传单个图片
                $info   =   $upload->uploadOne($_FILES['image']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                     $img_url=$info['savepath'].$info['savename'];
                     $data['img_url']=$img_url;
                     $data['img_name']=$info['savename'];
                     $data['create_time']=NOW_TIME;
                     $upload_img->create($data);
                     $result=$upload_img->add();
                     if(!$result){
                         $this->error('上传失败！');
                     }else{
                         $this->success('上传成功');
                     }
                }
          }
    }
}
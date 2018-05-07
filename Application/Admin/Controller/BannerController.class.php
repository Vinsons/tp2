<?php
namespace Admin\Controller;
use Think\Controller;
class BannerController extends Controller {
    
	//显示所有数据
    public function index(){
      	 
  //       分页第二种
        $Banner = M('Banner');
        $count=$Banner->count();
     //   dump($count);
        $page=new \Org\Bjy\Page($count,3);
        $list=$Banner->limit($page->firstRow.','.$page->listRows)->select();
    //    dump($list);
        $show=$page->show();
       // dump($show);
        $this ->assign('list',$list);
        $this ->assign('count',$count);
        $this ->assign('page',$show);
  
        $this->display('picture-list');
    }
   //添加数据
    public function insert()
    {
    	

    	$data = $_POST;
    	dump($data);

    	if (empty($data)) {
    				


    	} else {
    		$Banner = M('Banner');

    		$Banner ->create();
    		$result=$Banner ->add();
    		if ($result) {
    			
    			$this->success('数据添加成功',U('Banner/index'));
    		}else{
    			$this->error('数据添加失败');
    		}
    	}

    	$this->display('picture-add');


    	
    }

    //编辑数据
    public function edit()
    {
    	
    	
		$Banner = M('Banner');
    	$id =I('get.id');
    	//dump($id);

    	$list=$Banner->where("id=$id")->find(); //获取编号的数据并显示到编辑页面
    	$this->assign('list',$list);
   //     dump($list);
    	$this->assign('title','显示编辑信息');
    	$this->display('picture-edit');
    	
    }
    //将更新数据写入数据库
    public function update()
    {
    	$Banner = M('Banner');
      //  dump(I('get.content'));
    	if ($Banner->create()) {//创建新数据
    		if ($insertid = $Banner->save()) { //保存数据
    			$this->success('更新成功，受影响的行数是：'.$insertid);
    		}else{
    			$this->error('更新失败');
    		}
    	}
    	
    }




    //删除数据
    public function delete($id)
    {
    	# code...
    	$id = I('get.id');

    	$Banner = M('Banner');
    	
    	$result= $Banner -> delete($id);
    	dump($result);
    	if ($result) {
    		# code...
    		$this ->success('删除成功',U('Banner/index'));
    	}else{
    		$this ->error('删除失败');
    	}
    }

    public function del($id)
    {
        $id = I('get.id');
        $Banner = M('Banner');
        $data['status'] = '0';
        dump($data['status']);
        dump('id='.$id);
       $result = $Banner -> where('id='.$id) -> save($data); 
        if ($result) {
            $this -> success('启用成功',U('Banner/index'));
        }else{
            $this -> error('启用失败',U('Banner/index'));
        }
    }


    public function upload()
    {
    	$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  =      './Public/Uploads/'; // 设置附件上传根目录
			$upload->savePath  =      ''; // 设置附件上传（子）目录
			$upload->thumb     = 		true;//图片预览
			// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息
			    $this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息
			    foreach($info as $file){
			        echo $file['savepath'].$file['savename'];
			    }
			}
    }
}
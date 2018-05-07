<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        $Article = M('Article');
        $count = $Article->count();
        dump($count);
        $list = $Article->select();
        dump($list);
        $this ->assign('list',$lsit);
        }
}
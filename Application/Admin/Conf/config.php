<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'=>1, // 如果你的环境不支持PATHINFO 请设置为3
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'test',
	'DB_USER'=>'root',
	'DB_PWD'=>'root',
	'DB_PORT'=>'3306',
	'DB_PREFIX'=>'',
	'APP_DEBUG' => 1,
	
	//显示跟踪项目
	'SHOW_PAGE_TRACE'  => true,
   
 	'TMPL_PARSE_STRING'=>array(
      	 '__UPLOAD__'=>__ROOT__.'/Public/Uploads',
    ),
     'UPLOAD_CONFIG' => array(  
        'mimes'         =>  array(), //允许上传的文件MiMe类型  
        'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)  
        'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀  
        'autoSub'       =>  true, //自动子目录保存文件     
        'subName'       =>  array('date','Ymd'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组       
        'rootPath'      =>  './Public/upload/', //保存根路径          
        'savePath'      =>  '', //保存路径  
        'saveName'      =>  'time', //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组  
        'saveExt'       =>  'jpg', //文件保存后缀，空则使用原后缀  
        'replace'       =>  true, //存在同名是否覆盖  
        'hash'          =>  true, //是否生成hash编码  
        //'callback'      =>  false, //检测文件是否存在回调，如果存在返回文件信息数组  
        //'driver'        =>  'Local', // 文件上传驱动  
        //'driverConfig'  =>  array(), // 上传驱动配置  
    ),  
    
);
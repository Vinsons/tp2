<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            #img{height:22px; border:#000 2px solid}
            #button{height:30px; width:100px;}
        </style>
    </head>
    <body>
        <div><notemply name="data">
                <img src="/tp2/Public/Uploads/<?php echo ($data['img_url']); ?>" width="200" height="100"/>
            </notemply></div>
        <div class="result" >上传允许文件类型：'jpg', 'gif', 'png', 'jpeg'图像文件后</div><br>
        <form action="<?php echo U('upload/Upload');?>" method="post" enctype="multipart/form-data">
            <input type="file" name="image"/>
            <input type="submit" value="上传" id="button">
        </form>
    </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/tp2/Public/static/css/page.css" />
	<title>Document</title>
</head>
<body>


	<table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
    <a href="/tp2/index.php/Admin/Banner/insert.html">新增</a>
      <tr class="text-c">
       
        <th width="80">ID</th>
        <th width="100">标题</th>
        <th width="150">封面</th>
        <th width="150">时间</th>
        <th width="150">浏览数量</th>
        <th width="150">作者</th>
        <th width="150">发布状态</th>
        <!-- <th width="150">文章</th> -->
        <th width="150">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
        
        <td ><?php echo ($vol["id"]); ?></td>
        <td ><?php echo ($vol["title"]); ?></td>
        <td ><?php echo ($vol["banner-pic"]); ?></td>
        <td ><?php echo ($vol["time"]); ?></td>
        <td ><?php echo ($vol["number"]); ?></td>
        <td ><?php echo ($vol["author"]); ?></td>
        <td ><?php echo ($vol["status"]); ?></td>
        <!-- <td><?php echo (htmlspecialchars_decode($vol["content"])); ?></td> -->
        <td ><a href="/tp2/index.php/Admin/Banner/del/id/<?php echo ($vol["id"]); ?>">启用</a>|<a href="/tp2/index.php/Admin/Banner/edit/id/<?php echo ($vol["id"]); ?>">编辑</a>|<a href="/tp2/index.php/Admin/Banner/delete/id/<?php echo ($vol["id"]); ?>"onClick="return confirm('确定要删除吗?')">删除</a></td>
      	
      	</tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </tbody>

  </table>
    <div ><?php echo ($page); ?></div>
</body>
</html>
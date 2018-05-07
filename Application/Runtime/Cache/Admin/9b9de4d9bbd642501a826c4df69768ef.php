<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form id="form1" action="/tp2/index.php/Admin/Banner/update"  method="post">
	<input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
	title:<input type="text" name="title" value="<?php echo ($list["title"]); ?>"> <br>
	banner-pic:<input type="text" name="banner-pic" value="<?php echo ($list["banner-pic"]); ?>"><br>
	time:<input type="date" name="time" value="<?php echo ($list["time"]); ?>"><br>
	number:<input type="text" name="number" value="<?php echo ($list["number"]); ?>"><br>
	author:<input type="text" name="author" value="<?php echo ($list["author"]); ?>"><br>
	content:<input type="text" name = "content" value="<?php echo ($list["content"]); ?>"><br>
	status:<input type="text" name="status" value="<?php echo ($list["status"]); ?>"><br>
	<input type="submit" name="" value="修改" />
	</form>
</body>
</html>
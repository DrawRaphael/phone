<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <form action="<?php echo U('Admin/Index/api_upload');?>" enctype="multipart/form-data">
        <label>标题：</label><br/>
        <input type="text" name="title" required><br/>
        <label>介绍：</label><br/>
        <textarea name="info" cols="30" rows="10"></textarea><br/>
        <label>上传接口文档：</label><br/>
        <input type="file" name="file"><br/>
        <input type="submit" style="margin-top: 20px">
    </form>
</div>
</body>
</html>
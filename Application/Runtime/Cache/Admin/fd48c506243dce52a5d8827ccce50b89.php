<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <form action="<?php echo U('Admin/Index/cooper_upload');?>" method="post" enctype="multipart/form-data">
        <label>标题：</label><br/>
        <input type="text" name="title" required><br/>
        <label>LOGO:</label><br/>
        <input type="file" name="file"><br/>
        <input type="submit" style="margin-top: 20px">
    </form>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>
    <form action="<?php echo U('Admin/Index/case_upload');?>" method="post" enctype="multipart/form-data" class="">
        <label>大标题：</label><br/>
        <input type="text" name="title" required><br/>
        <label>小标题：</label><br/>
        <input type="text" name="key_word" required><br/>
        <label>介绍：</label><br/>
        <textarea name="info" cols="30" rows="10" required></textarea><br/>
        <input type="file" class="file"><br/>
        <input type="submit" style="margin-top: 20px;">
    </form>
</div>
</body>
</html>
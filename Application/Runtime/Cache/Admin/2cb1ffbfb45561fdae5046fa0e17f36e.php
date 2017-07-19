<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="<?php echo U('Admin/Index/header_upload');?>" enctype="multipart/form-data" method="post">
    <label>介绍:</label><br/>
    <textarea rows="10" cols="30" class="info" name="info" required><?php echo ($header["info"]); ?></textarea><br/>
    <label>上传图片:</label><br/>
    <input type="file" name="file"><br/>
    <input type="submit" style="margin-top: 20px;">
</form>
<script>
</script>
</body>
</html>
<!DOCTYPE html>
<?php include('function/logcheck.php'); ?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<meta name="description" content="">
<meta name="author" content="">
<link  rel="stylesheet" type="text/css" href="css/all.css" >
<title>登陆界面</title>
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="css/formcheck.js"></script>
</head>
<body>
<div class="bigbox">
<div class="loginbox">
    <h1><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>后台管理系统</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onSubmit="return logincheck()">
        <div class="input-group"><span class="input-group-addon">姓 名</span>
        <input type="text" id="name" name="name" class="form-control" placeholder="请输入你的姓名"></div><br>
        <div class="input-group"><span class="input-group-addon">密 码</span>
        <input type="password" id="password" name="password" class="form-control" placeholder="请输入你的密码"></div><br>
        <center><a href="frontIndex.php" class="btn btn-ls btn-primary">返回首页</a>&nbsp;&nbsp;
        <input type="submit" name="login" value="登 陆" class="btn btn-ls btn-primary"></center>
    </form>
</div>
</div>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
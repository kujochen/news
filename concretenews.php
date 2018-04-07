<!doctype html>
<html>
<?php
include('function/fix.php');
header('Content-Type:text/html;charset=utf-8'); 
if($_SERVER["REQUEST_METHOD"] == "POST"&&isset($_POST["fix"])&&$_POST["fix"]=="修 改"){ 
	$imgfix=fixPic();
	fixData($_POST["id"],$_POST["title"],$_POST['date'],$_POST["reporter"],$_POST["content"],$imgfix);		  
	  }    
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<meta name="description" content="">
<meta name="author" content="">
<title>详细新闻</title>
<link  rel="stylesheet" type="text/css" href="css/all.css" >
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="css/formcheck.js"></script>
<script chaset="UTF-8" type="text/javascript" src="css/placeImage.js"></script>
<script>
function cancelFile(){
	var pic = document.getElementById("preview");
	var file = document.getElementById("img");
	file.value="";
	alert("取消修改图片");
	history.go(0);
	}
</script>
</head>

<body>
<br>
<div class="left">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
 enctype="multipart/form-data" method="post" onSubmit="return addcheck()">
	<div class="input-group">
		<span class="input-group-addon">标 题</span>
		<input id="title" name="title" type="text" value="<?php echo $title;?>" class="form-control">
    </div>
    <p><span id="titleinfo" class="label label-danger" /></p><br>
    
    <div class="input-group">
		<span class="input-group-addon">日 期</span>
		<input id="date" name="date" type="datetime-local" value="<?php echo str_replace(" ","T",$time); ?>" class="form-control">
		<span class="input-group-addon" id="basic-addon1">状态</span>
		<input type="text" disabled="disabled" value="<?php echo $check; ?>" class="form-control">
	</div>
    <p><span id="dateinfo" class="label label-danger" /></p><br>
    
    <div class="input-group">
			<span class="input-group-addon">作 者</span>
		    <input type="text" id="reporter" name="reporter" value="<?php echo $repo; ?>" class="form-control">
    </div>
    <p><span id="repoinfo" class="label label-danger" /></p><br>
    
    <div class="input-group"><span class="input-group-addon" id="basic-addon1">图 片</span>
		<input type="file" id="img" name="img" class="form-control" onchange="return change()" />
    </div>
		<p class="help-block"><span id="show">&nbsp;***如要添加或修改图片，请选择/.jpg/.jpeg或者.png的图片文件***</span></p>
    
    <div class="input-group">
			<span class="input-group-addon">内 容</span>
			<textarea id="content" name="content"  class="form-control" rows="6"><?php echo $content; ?></textarea>
    </div>
    <p><span id="contentinfo" class="label label-danger" /></p>
    <input type="hidden" name="id" value="<?php echo $id ?>"><br>
    
  <a onclick="javascript:history.back(-1);" class="btn btn-default"  role="button">返回</a>
  <input type="submit" name="fix" value="修 改" class="btn btn-default">
</form>
</div>
<img id="preview" alt="" name="pic"  class="right" onclick="cancelFile()" src="<?php echo $_SESSION['img']; ?>"/>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
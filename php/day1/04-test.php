<?php
	//文件编码:ansi unicode utf-8
	//浏览器解码：GBK/GB2312/GB18030    utf-8
	//数据库编码 utf-8  json_encode  urlencode  base64_encode
	//echo "中国";  
	// isset  unset  empty
	/*
	$a=array(1,2,3);
	var_dump($a);
	echo "<br />";
	unset($a);
	var_dump($a);*/

	if(isset($_POST['sub'])){
		//var_dump($_POST);
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$arr=array('&','=','%');
		$flag=true;
		for($i=0;$i<strlen($name);$i++){
			for($j=0;$j<count($arr);$j++){
				if($name[$i]==$arr[$j]){
					$flag=false;
				}
			}
		}
		if($flag==false){
			echo "<script>alert('用户名非法')</script>";
		}

		/*
		if($name=="admin" && $pass="12345"){
			echo "<script>alert('登录成功')</script>";
		}else{
			echo "error";
		}*/

		//echo $name."||".$pass;
	}

?>

<meta charset="utf-8">
<form action="04-test.php" method="post">
	用户名:<input type="text" name="name"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="注册">
</form>
<?php 
	if(isset($_POST['sub'])){
		$url=$_POST['url'];
		$str=substr($url,10);
		$http=base64_decode($str);
		echo $http;

		//echo $url;
		//$str=base64_encode($url);
		//echo $str;
		//$thunder="thunder://".$str;
		//echo $thunder;


		//thunder://aHR0cDovL3d3dy4xNjMuY29tLzEucm12Yg==
	}


?>

<meta charset="utf-8">
<form action="02-test.php" method="post">
	url:<input type="text" name="url">
	<input type="submit" name="sub" value="转换">
</form>
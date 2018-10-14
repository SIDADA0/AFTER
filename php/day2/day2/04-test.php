<?php
	//$arr=array(1,2,3,4,5);
	$user['id']=1;
	//$user[9]=66;
	$user['name']="laoshan";
	$user['age']=19;
	$user['gender']="male";
	//$user[]=77;
	$user['email']="laoshan@163.com";
	$user['arr']=array(1,2);

	//foreach(数组名 as 变量键名=>变量值名)
	foreach($user as $k=>$v){
		//echo $k."=>".$v;
		//echo "<br />";
		echo "\$user[$k]".'='.$v;
		echo "<br />";
	}

	//$user['id']=1

	/*
	echo "<pre>";
	print_r($user);
	echo "</pre>";*/

?>
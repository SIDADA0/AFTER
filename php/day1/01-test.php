<?php
	$a=12;
	$A=20;
	echo $a;
	echo "<br />";

	pHpInFo();
	/*
	$a=123;
	echo $a;
	echo "<br />";
	//echo "laoshan loves laoxie";
	echo "<script></script>"*/
	/*
	$num="laoshan";
	var_dump($num);
	echo "<br />";

	$arr=array(1,2,3,4,5); //索引数组 关联数组

	//echo "<pre>";
	var_dump($arr);
	//echo "</pre>";*/

	//类型转换
	/*
	$num=123;
	var_dump($num);
	$str="$num";
	var_dump($str);

	$str="123";
	$xx="a56bc";
	$num=$str+$xx;
	echo $num;*/
	/*
	$str="123";
	//$num=(int)$str;
	settype($str,"integer");
	var_dump($str);*/

	$arr=array(1,2,3,4,5);  //1-2-3-4-5  12345
	$str="";
	for($i=0;$i<count($arr);$i++){
		$str.=$arr[$i];
	}

	echo $str;

	$str=12345;
	$arr=array();
	for($i=0;$i<strlen($str);$i++){
		$arr[$i]=$str[$i];
	}

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	//string object  object string  序列化与反序列化
	//json_encode json_decode
	//urlencode urldecode
	//base64_encode  base64_decode








?>
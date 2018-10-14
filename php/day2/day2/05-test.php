<?php
	$arr=array(
		'id'=>1,
		'name'=>'laoshan',
		'age'=>19,
		'gender'=>'male',
		);

	each($arr);
	
	$arr=next($arr);
	//next()  prev() current() reset() end()
	echo "<pre>";
	print_r($arr);
	echo "</pre>";


	/*

	while(list($key,$value)=each($arr)){
		//echo $a['key']."=>".$a['value'];
		echo $key."=>".$value;
		echo "<br />";
	}

	$b=array(1,2,3);
	list($m,$n,$l)=$b;
	echo $n;

	echo "<br />";*/

	/*
	echo "<pre>";
	print_r(each($arr));
	echo "</pre>";*/
	//each()  list()
	/*
	$ip="192.168.0.1";
	list($a,$b,$c,$d)=explode('.',$ip);
	echo $a;*/


?>
<?php
	/*
	aa(567,34);
	function aa($a,$b=1){
		echo $a;
		echo "<br />";
		echo $b;
		//echo "12345";
	}*/
	//aa();
	/*
	function bb(){
		static $a=1;
		$b=++$a;
		echo $b;
		echo "<br />";
		return $b;
		echo $a;
	}

	bb();
	bb();*/

	$a=100;
	$b=&$a;

	$b="laoshan";

	echo $a;
	echo "<br />";
	echo $b;
?>
<?php
	$a=123;

	function demo(){
		global $a;
		$b=1;
		$c=$a+$b;
		echo $c;
	}

	demo();

?>
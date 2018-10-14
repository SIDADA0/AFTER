<?php
	/*
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo $i." * ".$j." = ".($i*$j)."&nbsp;";
		}
		echo "<br />";
	}*/

	$arr=array(1,2,3,4,5);
	/*
	$i=0;
	for(;$i<count($arr);){
		echo $arr[$i];
		echo "<br />";
		$i++;
	}*/
	/*
	$i=0;
	while($i<count($arr)){
		echo $arr[$i];
		echo "<br />";
		$i++;
	}*/


	echo "<table width=800 align='center' border=1>";
	echo "<caption><h3>第一种乘法表</h3></caption>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j);
			echo "</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

	echo "<br />";

	echo "<table width=800 align='center' border=1>";
	echo "<caption><h3>第一种乘法表</h3></caption>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		//先打空格
		for($j=1;$j<=9-$i;$j++){
			echo "<td>"."&nbsp;"."</td>";
		}
		//再打算式
		for($k=1;$k<=$i;$k++){
			echo "<td>";
			echo $i." * ".$k." = ".($i*$k);
			echo "</td>";
		}
		
		echo "</tr>";
	}


	echo "</table>";

?>
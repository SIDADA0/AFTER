<?php
	$info=array(
		array(1,'zhangan',19),
		array(2,'lisi',20),
		array(3,'wangwu',34),
	);

	//echo $info[1][1];
	echo "<table width=500 align='center' border='1'>";
	echo "<caption><h3>user</h3></caption>";
	foreach($info as $k=>$v){
		echo "<tr>";
		foreach($v as $value){
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

?>


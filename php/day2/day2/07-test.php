<?php
	$info=array(
		'user'=>array(
				array(1,'zhangan',19),
				array(2,'lisi',20),
				array(3,'wangwu',34),
			),
		'score'=>array(
				array(1,100,60,32),
				array(2,77,89,56),
				array(3,45,3,67),
			),
		'connect'=>array(
				array(1,'110','aa@bb.com'),
				array(2,'220','cc@dd.com'),
				array(3,'440','dd@ee.com'),
			),
		);

	foreach($info as $tablename=>$table){
	echo "<table align='center' width=500 border=1>";
	echo "<caption><h3>".$tablename."</h3></caption>";
		foreach($table as $row){
			echo "<tr>";
			foreach($row as $col){
				echo "<td>".$col."</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
	}


?>

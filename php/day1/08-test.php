<?php
	echo "<table width='800' border='1' align='center'>";
	echo "<caption><h3>隔行换色</h3></caption>";
	for($i=0;$i<100;$i++){
		if($i%2==0){
			$color='red';
		}else{
			$color='green';
		}
		echo "<tr onmouseover=lrow(this) onmouseout=lcol(this) bgColor=".$color.">";
		for($j=0;$j<10;$j++){
			echo "<td>".$j."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>


<script>
	var color="";
	function lrow(obj){
		color=obj.bgColor;
		obj.bgColor="blue";
	}

	function lcol(obj){
		obj.bgColor=color;
	}
</script>
<?php 
	if(isset($_POST['sub'])){
		$row=$_POST['row'];
		$col=$_POST['col'];
		Ta($row,$col);

	}

	function Ta($row,$col){
		echo "<table width='500' align='center' border='1'>";
		for($i=0;$i<$row;$i++){
			echo "<tr>";
			for($j=0;$j<$col;$j++){
				echo "<td>".$j."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	

?>

<meta charset="utf-8">
<form action="09-test.php" method="post">
	输入行:<input type="text" name="row"><br />
	输入列:<input type="text" name="col"><br />
	<input type="submit" name="sub" value="生成表格">&nbsp;&nbsp;
	<input type="reset" name="rst" value="重置表格">
</form>
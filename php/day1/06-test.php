<?php
	/*
	$a=20;
	$b=++$a + $a++;  //42
	$c=$b-- - --$b;  //2
	$d=$c++ + --$c;  //4
	$e=--$d - ++$d;  //-1
	echo $e;

	//++$a $b--*/
	if(isset($_GET['sub'])){
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		$ysf=$_GET['ysf'];
		$message="";
		if($num2==0 && $ysf=="/"){
			$message="除数不能为零";
			//echo "<script>alert('除数不能为零')</script>";
			//header('location:06-test.php');
			//echo "<script>location='06-test.php'</script>";
		}

		if(isset($num1) && isset($num2)){
			$message="error";
		}

		if(!is_numeric($num1) || !is_numeric($num2)){
			$message="不是数字";
			//die();
		}

		$sum=0;
		switch($ysf){
			case "+" :
				$sum=$num1+$num2;
				break;
			case "-":
				$sum=$num1-$num2;
				break;
			case "*":
				$sum=$num1*$num2;
				break;
			case "/":
				$sum=$num1/$num2;
				break;
			case "%":
				$sum=$num1%$num2;
				break;
			default:
				echo "输入不合法";
				break;
		}
	}


?>

<meta charset="utf-8">
<table width="800" border='1' align="center">
<caption><h1>计算器</h1></caption>	
<form action="06-test.php" method="get">
	<tr>
		<td>
			<input type="text" name="num1" value="<?php echo $num1?>">
		</td>
		<td>
			<select name="ysf">
				<option value="+" <?php echo $_GET['ysf']=='+'?'selected':""?>>+</option>
				<option value="-" <?php echo $_GET['ysf']=='-'?'selected':""?>>-</option>
				<option value="*" <?php echo $_GET['ysf']=='*'?'selected':""?>>×</option>
				<option value="/" <?php echo $_GET['ysf']=='/'?'selected':""?>>/</option>
				<option value="%" <?php echo $_GET['ysf']=='%'?'selected':""?>>%</option>
			</select>
		</td>
		<td>
			<input type="text" name="num2" value="<?php echo $num2?>">
		</td>
		<td>
			<input type="submit" name="sub" value="计算">
		</td>
	</tr>
	<?php
		if(isset($_GET['sub'])){
			echo "<tr>";
			echo "<td colspan='4'>结果为:".$num1." $ysf ".$num2." = ".$sum."</td>";
			echo "</tr>";
		}
	?>
</form>
</table>
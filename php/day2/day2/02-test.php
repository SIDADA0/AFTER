<?php
	if(isset($_POST['sub'])){
		$you=$_POST['you'];
		//echo $you;
		var_dump($you);
		
		switch($you){
			case 0 :
				echo "布";
				break;
			default:
				echo "没有匹配";
				break;
		}

		//rand(0,2)
	}

?>

<meta charset="utf-8">
<form action="02-test.php" method="post">
	你出拳
	<select name="you" id="" onclick=mychange(this)>
		<option value="2">拳头</option>
		<option value="1">剪子</option>
		<option value="0">布</option>
	</select>
	<img src="cq.jpg" alt="" id="myimg">
	<input type="submit" name="sub" value="猜拳">
</form>

<script>
	function mychange(obj){
		var val=obj.value;
		var myimg=document.getElementById('myimg');
		if(val==2){
			myimg.src="qt.jpg";
		}else if(val==1){
			myimg.src="jz.jpg";
		}else{
			myimg.src="b.jpg";
		}

	}
</script>
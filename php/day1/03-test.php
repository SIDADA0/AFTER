<?php 
	if(isset($_POST['num'])){
		$num=$_POST['num'];
		if($num==123){
			$arr=array(1,2,3,4,5);
			echo json_encode($arr);
		}

	}


?>
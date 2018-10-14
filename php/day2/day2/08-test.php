<?php
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		$str=$sfile['name'];
		$arr=explode('.',$str);
		$len=count($arr)-1;
		$hou=$arr[$len];
		$as=array('txt','exe','bmp');
		$flag=true;
		for($i=0;$i<count($as);$i++){
			if($hou==$as[$i]){
				$flag=false;
			}
		}

		if($flag==false){
			echo "<script>alert('上传文件非法')</script>";
		}else{
			$newname=time().'.'.$hou;
			$newurl='./upload/'.$newname;

			$b=move_uploaded_file($sfile['tmp_name'],$newurl);
			if($b){
				echo "success";
			}else{
				echo "error";
			}
		}
		//echo $arr[1];
		//var_dump($sfile);

		/*
		array(5) { ["name"]=> string(23) "11216943431d69da26o.jpg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(24) "C:\xampp\tmp\php24FA.tmp" ["error"]=> int(0) ["size"]=> int(144955) }*/
	}


?>

<meta charset="utf-8">
<form action="08-test.php" method="post" enctype="multipart/form-data">
	上传:<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
</form>
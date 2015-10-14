<?php


	$link = mysqli_connect('127.0.0.1', 'box_jxc', '123456', 'test_task_js');
	if (mysqli_connect_errno($link))
  	{
  		die('Could not connect: ' . mysql_error());
  	}
 	
 	//var_dump($_POST);
 	$insertarr['type'] = $_POST['id'];
 	if($_POST['id']==1){
 		$insertarr['mall']  = $_POST['data']['0']['value'];
 		$insertarr['area']  = $_POST['data']['1']['value'];
 		$insertarr['wifi']  = $_POST['data']['2']['value'];
 		$insertarr['analysis']  = $_POST['data']['3']['value'];
 		$insertarr['wechat']  = $_POST['data']['4']['value'];
 		$insertarr['company']  = $_POST['data']['5']['value'];
 		$insertarr['name']  = $_POST['data']['6']['value'];
 		$insertarr['telephone']  = $_POST['data']['7']['value'];
 		$insertarr['email']  = $_POST['data']['8']['value'];
		//print_r($insertarr);
 		$sql = "INSERT INTO Apply_Info (type,mall,area,wifi,analysis,wechat,company,name,telephone,email)
 			VALUES(".$insertarr['type'].",".$insertarr['mall'].",".$insertarr['area'].",".$insertarr['wifi'].",".$insertarr['analysis'].",".$insertarr['wechat'].",'".$insertarr['company']."','".$insertarr['name']."','".$insertarr['telephone']."','".$insertarr['email']."')";
 		
 		 if(mysqli_query($link,$sql)){
 		 	echo "1";
 		 }else{
 		 	echo mysql_error();
 		 }

 	}elseif($_POST['id'] == 2){

 		$insertarr['area']  = $_POST['data']['0']['value'];
 		$insertarr['company']  = $_POST['data']['1']['value'];
 		$insertarr['name']  = $_POST['data']['2']['value'];
 		$insertarr['telephone']  = $_POST['data']['3']['value'];
 		$insertarr['email']  = $_POST['data']['4']['value'];
 		//var_dump($insertarr);
 		$sql = "INSERT INTO Apply_Info (type,area,company,name,telephone,email)
 			VALUES(".$insertarr['type'].",".$insertarr['area'].",'".$insertarr['company']."','".$insertarr['name']."','".$insertarr['telephone']."','".$insertarr['email']."')";

 		
 		 if(mysqli_query($link,$sql)){
 		 	echo "1";
 		 }else{
 		 	echo mysql_error();
 		 }
 	}

 	$link->close();
	
?>
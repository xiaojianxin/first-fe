<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta http-equiv="content-type" content="text/html"/>
    <meta charset="utf-8">

    <meta name="apple-mobile-web-app-capable" content="yes"/>
   
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <script src="./resources/scripts/jquery-1.10.1.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    	<table class="table">
   			<caption>申请管理</caption>
      			<thead>
      				<tr>
      					<th>序号</th>
         				<th>公司类型</th>
         				<th>行业</th>
         				<th>业务范围</th>
         				<th>是否部署wifi</th>
         				<th>是否具备客流分析</th>
         				<th>是否需要微信平台</th>
         				<th>公司名称</th>
         				<th>联系人姓名</th>
         				<th>联系人电话</th>
         				<th>联系人邮箱</th>

      				</tr>
      			</thead>

      			<tbody>	

<?php
	$i = 1;
	$link = mysqli_connect('127.0.0.1', 'box_jxc', '123456', 'test_task_js');
	if (mysqli_connect_errno($link))
  	{
  		die('Could not connect: ' . mysql_error());
  	}

  	$sql = "SELECT * FROM Apply_Info";
  	$result = mysqli_query($link,$sql, MYSQLI_USE_RESULT);
  	while($row = $result->fetch_assoc()) {
?>

      <tr>
        <td><?php echo $i;$i++;?></td>
        <td><?php if($row['type']=="1"){
        	echo "终端用户(商场或商铺等)";
        }else if($row['type']=="2"){
        	echo "代理商(中间渠道)";
        }else if($row['type']=="3"){
        	echo "运营商";
        }?></td>
        <td><?php if($row['mall']=="1"){
        	echo "商场";
        }else if($row['mall']=="2"){
        	echo "酒店";
        }else if($row['mall']=="3"){
        	echo "餐饮";
        }else if($row['mall']=="4"){
        	echo "旅游";
        }else if($row['mall']=="5"){
        	echo "政府";
        }else if($row['mall']=="6"){
        	echo "其他";
        }?></td>
        <td><?php if($row['area']=="1"){
        	echo "华北地区";
        }else if($row['area']=="2"){
        	echo "东北地区";
        }else if($row['area']=="3"){
        	echo "华南地区";
        }else if($row['area']=="4"){
        	echo "华东地区";
        }else if($row['area']=="5"){
        	echo "西部地区";
        }else if($row['area']=="6"){
        	echo "东南地区";
        }else if($row['area']=="7"){
        	echo "中部地区";
        }?></td>
        <td><?php if($row['wifi']=="1"){
        	echo "是";
        	}elseif($row['wifi']=="2") {
        	echo "否";
        	}
        ?></td>
        <td><?php if($row['analysis']=="1"){
        	echo "是";
        	}elseif($row['analysis']=="2") {
        	echo "否";
        	}?></td>
        <td><?php if($row['wechat']=="1"){
        	echo "是";
        	}elseif($row['wechat']=="2") {
        	echo "否";
        	}?></td>
        <td><?php echo $row['company']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['telephone']?></td>
        <td><?php echo $row['email']?></td>
      </tr>
     
<?php }

?>
   </tbody>
</table>

</div>

</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
   
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./resources/css/nav.css"> 
    <link rel="stylesheet" href="./resources/css/foot.css">
    <link rel="stylesheet" href="./resources/css/flexslider.css">
    <link rel="stylesheet" href="./resources/css/index.css">
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="./resources/scripts/jquery-1.10.1.js"></script>
    <script src="./resources/scripts/jquery.flexslider-min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>


    <script src="./resources/scripts/home.js"></script>
    

  </head>
  <body>
        <?php require ('nav.php') ?>
        <div class="main">

              <?php
                if(!empty($_GET['id'])){
                   $id = $_GET['id']; 
                 }else{
                  $id = 1;
                 }
               
                if($id == 1){
                  if(!isset($_GET['r'])){
                    require('home.php');
                  }elseif($_GET['r']=="box"){
                    require('box.php');
                  }elseif ($_GET['r']=="wechat") {
                    require('wechat.php');
                  }elseif ($_GET['r']=="analysis"){
                    require('analysis.php');
                  }
                  
                }elseif ($id == 2) {
                  require('detail.php');
                }elseif ($id == 3) {
                  require('contact.php');
                }elseif ($id==4) {
                  require('buy.php');
                }elseif ($id==5) {
                  require('upDetail.php');
                }
              ?>
        </div>
        <?php require ('foot.php') ?>
  </body>
  
</html>

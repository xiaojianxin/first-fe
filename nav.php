<div style="width:100%;position:absolute;border-top: 2px solid #17dcff;">
<nav class="navbar navbar-default head-nav" role="navigation">
  <div class="container-fluid">
   <div class="navbar-header">
      <a class="navbar-brand" style="margin-left:15px;"><img src="./images/home/neotel.png"></a>
      <div><span style="margin-top:-20px;z-index:1;">悦box</span></div>
   </div>
   <div class="navbar-collapse collapse" style="float:right">
   	  <a class="btn btn-default nav-btn" href="http://www.neoap.com/login" target="_blank">登录聚商</a>
      <ul class="nav navbar-nav menu-right">
         <li class="chooseli"><a class="alink" id="1" href="#">首页</a></li>
         <li><a class="alink" id="2" href="#">系统参数</a></li>
         <li><a class="alink" id="3" href="#">联系我们</a></li>
         <li><a class="alink" id="4" href="#">试用/购买</a></li>
         
      </ul>
      

   </div>
  <div>
</nav>
</div>


<script>
$('.alink').click(function(){
   var id = $(this).attr('id');
   window.location.href = "./index.php?id="+id;
});

$.extend({       
urlGet:function()
{

    var aQuery = window.location.href.split("?");  //取得Get参数
    var aGET = new Array();
    if(aQuery.length > 1)
    {
        var aBuf = aQuery[1].split("&");
        for(var i=0, iLoop = aBuf.length; i<iLoop; i++)
        {
            var aTmp = aBuf[i].split("=");  //分离key与Value
            aGET[0] = aTmp[1];
        }
     }
     return aGET;
 }
});

var id = $.urlGet();

$('.chooseli').removeClass('chooseli');
$('#'+id).parent().addClass('chooseli');
</script>
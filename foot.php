<div class="foot">
	<div class="up-foot">
		<div class="foot-content">
			<span><a class="alink" id="1" href="#">首页 .</a></span>
			<span><a class="alink" id="2" href="#">设备参数 .</a></span>
			<span><a class="alink" id="3" href="#">联系我们 .</a></span>
			<span><a class="alink" id="4" href="#">购买 .</a></span>
			<span><a href="http://www.neoap.com/login" target="_blank">登录聚商</a></span>
		</div>
	</div>
	<div class="down-foot">
		<div class="foot-content">
			<span>隐私条款 All rights reserved by 新讯世纪</span>
			
		</div>	
	</div>
</div>

<script>
$('.alink').click(function(){
   var id = $(this).attr('id');
   window.location.href = "./index.php?id="+id;
});
</script>
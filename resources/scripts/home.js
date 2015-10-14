$(function(){
	$('.companion').hover(function(){

		var id = $(this).attr('id');
		$(this).attr('src','./images/home/'+id+"-2.png");
	},function(){
		var id = $(this).attr('id');
		$(this).attr('src','./images/home/'+id+"-1.png");
	});


});
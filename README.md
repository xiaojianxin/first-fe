第一次完全自己独立的写前端，遇到了一些问题，总结一下

问题一：首页图片导航栏，也就是home.php里面的home-back部分，这个地方一直调不对

具体：
1.在不同宽度的屏幕显示位置有问题，position: absolute;解决

2.外面div和里面的div透明度不一

   解决方法：<div class="background"></div>

   再加一个div作为背景设置透明，位置也是absolute
 
3. 大图位置，这个地方不能用absolute了，兼容性不好，而且屏幕大小也会有影响


问题二: 第二个比较痛苦的地方就是detail.php这个页面，千万不要用左右div这种方式，乖乖的用bootstrap的布局 row col-xs-*这种


其他的都没什么了


感悟：一个好的前端效果，背后一定要有一个好的美工！！

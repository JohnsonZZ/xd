<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
 <head> 

  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta http-equiv="Cache-Control" content="no-transform" /> 
  <meta name="renderer" content="webkit" /> 
  <meta name="mobile-agent" content="format=html5;url=http://m.fkxifu.icoc.cc/" /> 
  <meta name="keywords" content="蓝道夫,祥达" /> 
  <meta name="description" content="蓝道夫,祥达" /> 
  	   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="肇庆祥达鞋业有限公司">
	<meta name="description" content="肇庆祥达鞋业有限公司">
	<title>公司介绍-肇庆祥达鞋业有限公司</title> 
	<link rel="stylesheet" href="/Public/css/base.css" type="text/css" />
	<link href="/Public/images/shoye.ico" rel="shortcut icon" />
    <!-- Bootstrap 3.3.5 -->
	<meta name="viewport" content="maximum-scale=0.6">
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css" type="text/css" />
    <!-- Font Awesome -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	
	<link rel="stylesheet" href="/Public/css/main.css" type="text/css" />

 </head> 
 <body>
	<div class="nav">
	<div class="logo-nav"><a><img src="/Public/images/logo1.jpg" width=
	"110" height="107" /></a></div>
	<div class="right-nav">
		<ul class="nav-ul">
			<li class="nav-ul-li"><a class="nav-ul-li-a" href="<?php echo U('Home/Index/index');?>"> 首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>				
			<li class="nav-ul-li"><a class="nav-ul-li-a" href="<?php echo U('Home/Product/index');?>">产品展示</a></li>
			<li class="nav-ul-li"><a class="nav-ul-li-a" href="<?php echo U('Home/Brand/index');?>">品牌故事</a></li>
			<li class="nav-ul-li"><a class="nav-ul-li-a" href="<?php echo U('Home/Company/index');?>">公司介绍</a></li>
			<li class="nav-ul-li"><a class="nav-ul-li-a" href="<?php echo U('Home/Connect/index');?>">联系我们</a></li>	
		</ul>
	</div>
</div>	
<div class="slide">
	<div class="banner">
		<ul class="banner-img" >
			<?php if(is_array($banner)): foreach($banner as $key=>$val): ?><li><img  src="/Public/upload/image/<?php echo ($val['img']); ?>"/></li><?php endforeach; endif; ?>
		</ul>
		<div class="imgnum">
			<span class="glyphicon glyphicon-menu-left imgnum-left"></span>
			<span class="glyphicon glyphicon-menu-right fr imgnum-right"></span>
		</div>
	</div>
</div>
<div  class="erweima">
	<!--<span class="glyphicon glyphicon-remove erweima-remove"></span>-->
	<img width="100%" src="/Public/images/newerweima.jpg" height="249" width="120" />
</div>
	
	<div class="clear"></div>

	<div class="story">
		<div class="story-title">品牌故事</div>
		<div class="story-line"></div>
			<div class="clear"></div>
		<img src="/Public/images/brandstory.jpg"/>
	</div>
	
	<div class="clear"></div>
	<div class="footer">
	<div class="content">
		<div class="frist-list">
			<a href="<?php echo U('Home/Index/index');?>">首页</a>
			<a href="<?php echo U('Home/Index/index');?>">关于我们</a>
		</div>
		<div class="second-list">
			&copy; &nbsp;2016&nbsp;&nbsp;&nbsp;&nbsp;肇庆祥达鞋业有限公司&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;版权所有
		</div>
	</div>
</div>	
	
	
	
	<script src="/Public/js/jquery.js"></script>
	<script src="/Bootstrap/js/bootstrap.min.js"></script>
	<script src="/Plugins/layer/layer.js"></script>
	
	<script>
	     var index = 0;
		 var imgWidth = $("body").width(); ; //一个图的宽度
		 var bannerWidth = imgWidth +'px';  //banner的宽度
		 var imgLen = $(".banner-img li").length;
		 var oWidth =  imgLen * imgWidth + 'px'; //全部图的宽度
		 
		 
		 $(window).resize(function(){ 
			imgWidth = $("body").width(); ; //一个图的宽度
			bannerWidth = imgWidth +'px';  //banner的宽度
		    imgLen = $(".banner-img li").length;
		    oWidth =  imgLen * imgWidth + 'px'; //全部图的宽度
		    $(".banner-img").width(oWidth);        	 		 //ul的宽度
			$(".banner").width(bannerWidth);       			 //bannerdiv的宽度
			$(".banner-img img").width(bannerWidth);			 //图片的宽度
			imgHeight = $(".banner-img img").height();      //得到图片的高度
			$(".slide").height(imgHeight);           		     //slide的高度
			$(".banner").height(imgHeight);           		     //banner的高度
			$(".imgnum").offset({top:imgHeight*0.435+110});
		 
		 });
		 
		 
         $(function () {
		     $(".banner-img").width(oWidth);        	 		 //ul的宽度
			 $(".banner").width(bannerWidth);       			 //bannerdiv的宽度
			 $(".banner-img img").width(bannerWidth);			 //图片的宽度
			 var imgHeight = $(".banner-img img").height();      //得到图片的高度
			 $(".slide").height(imgHeight);           		     //slide的高度
			 $(".banner").height(imgHeight);           		     //banner的高度
			 $(".imgnum").offset({top:imgHeight*0.435+110});
			 $(".imgnum-left").click(function(){					
				index--;
				if(index == -1){index = imgLen-1 ;}
				iWidth=  index * imgWidth	;
				$(".banner-img").stop(true,true).animate({left:"-"+iWidth+'px'},"slow");
				
			 });		 
			 $(".imgnum-right").click(function(){		
				move();
				});		
						
         });
		 function move(){
				index++;	
				if(index == imgLen)
				{index = 0;}
				iWidth=  index * imgWidth	;
				$(".banner-img").stop(true,true).animate({left:"-"+iWidth+'px'},"slow");
				
		 }
		 setInterval("move()",3000);
		 
		 
		 

	</script>	
 </body>
</html>
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
	<title>联系我们-肇庆祥达鞋业有限公司</title> 
	<link rel="stylesheet" href="/Public/css/base.css" type="text/css" />
	<link href="/Public/images/shoye.ico" rel="shortcut icon" />
    <!-- Bootstrap 3.3.5 -->
	<meta name="viewport" content="maximum-scale=0.6">
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css" type="text/css" />
    <!-- Font Awesome -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	
	<link rel="stylesheet" href="/Public/css/main.css" type="text/css" />

	 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Abcty2d6CGtscG1TZK3K32ZFIR5bMURZ"></script>

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

	<div class="connect">
		<div class="connect-left">
			<div class="connect-title">联系我们</div>
			<div class="connect-line"></div>
			<p>联系电话：0758-6196244</p>
			<p>地址：广东省肇庆市端州八路棠下工业村(肇庆城西汽车站旁)</p>
			<p>乘车路线：可坐4路、5路、13路、16路、302路到肇庆城西汽车站即到</p>
			<p>邮编：526040</p>
		</div>
		<div class="connect-right">
			<div style="width:660px; height:550px; border:#ccc solid 1px;font-size:12px" id="map"></div>
		</div>
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
  <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(112.418216,23.082121),19);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){

      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script>

</html>
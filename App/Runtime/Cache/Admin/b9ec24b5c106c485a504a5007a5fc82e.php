<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>祥达鞋业有限公司 | 控制台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
	<!--ICO-->
	<link href="/Public/images/shoye.ico" rel="shortcut icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Plugins/fa/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/Public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/Public/css/skins.min.css">
		<link rel="stylesheet" href="/Bootstrap/css/fileinput.min.css">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>XD</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>祥达鞋业后台</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/Public/upload/image/<?php echo ($_SESSION['href']); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo ($_SESSION['account']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/Public/upload/image/<?php echo ($_SESSION['href']); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo ($_SESSION['account']); ?> - 后台管理员
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo U('Home/Index/index');?>" class="btn btn-default btn-flat">前台</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo U('Login/quit');?>" class="btn btn-default btn-flat">退出</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
            <!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主菜单</li>
            <li class="active treeview">
              <a href="<?php echo U('Index/index');?>">
                <i class="fa fa-dashboard"></i> <span>控制台</span>
              </a>
            </li>
            <li id="pList" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>产品信息</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iList"><a href="<?php echo U('Product/index');?>"><i class="fa fa-circle-o"></i> 查看产品</a></li>
                <li id="aList"><a href="<?php echo U('Product/add');?>"><i class="fa fa-circle-o"></i> 添加产品</a></li>
              </ul>
            </li>
			<li id="pBanner" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>横幅</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iBanner"><a href="<?php echo U('Banner/index');?>"><i class="fa fa-circle-o"></i> 查看横幅</a></li>
                <li id="aBanner"><a href="<?php echo U('Banner/add');?>"><i class="fa fa-circle-o"></i> 添加横幅</a></li>
              </ul>
            </li>
			<li id="pAdmin" class="treeview">
              <a href="#">
                <i class="fa fa-key"></i>
                <span>管理员组</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="iAdmin"><a href="<?php echo U('Admin/index');?>"><i class="fa fa-circle-o"></i> 管理员列表</a></li>
                <li id="aAdmin"><a href="<?php echo U('Admin/add');?>"><i class="fa fa-circle-o"></i> 添加管理员</a></li>
              </ul>
            </li>
            <li id="important"><a href="#"><i class="fa fa-circle-o text-red"></i> <span>重要信息</span></a></li>
            <li id="warning"><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告信息</span></a></li>
            <li id="info"><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>一般信息</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        管理员
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo U('Index/index');?>">
                                <i class="fa fa-dashboard">
                                </i>
                                控制台
                            </a>
                        </li>
                        <li class="active">
                            添加用户
                        </li>
                    </ol>
                </section>
                <section class="content">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                添加用户
                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form id="form" action="<?php echo U('update');?>" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="account">
                                        账号
                                    </label>
                                    <input type="text" class="form-control" name="account" id="account" placeholder="输入账号">
                                </div>
								<div class="form-group">
									<label for="account">
                                        头像(不设置或者设置错误都将使用默认图片)
                                    </label>
									<input type="file" name="photo" id="avatar" />
								</div>
                                <div class="form-group">
                                    <label for="pwd">
                                        密码
                                    </label>
                                    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="输入密码">
                                </div>
								<div class="form-group">
                                    <label for="rpwd">
                                        确认密码
                                    </label>
                                    <input type="password" class="form-control" name="rpwd" id="rpwd" placeholder="再次输入密码">
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" id="admin" class="btn btn-primary">
                                    提交
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                    <section>
            </div>
            <!-- /.content-wrapper -->
            	<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">肇庆市祥达鞋业有限公司</a>.</strong> All rights reserved.
      </footer>
        </div>
        <!-- ./wrapper -->
        	<!-- jQuery 1.1.12 -->
    <script src="/Public/js/jquery.js"></script>
	<!-- layer 2.2 -->
	<script src="/Plugins/layer/layer.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/Bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/Public/js/app.min.js"></script>
		<script src="/Bootstrap/js/fileinput.min.js"></script>
		<script src="/Bootstrap/js/fileinput_locale_zh.js"></script>
        <script>
            $('#pAdmin').addClass("active").siblings().removeClass("active");
            $('#aAdmin').addClass("active");
			$('#avatar').fileinput({
                language: 'zh', //设置语言
                allowedFileExtensions : ['jpg', 'png','gif'],//接收的文件后缀,
                showUpload: false, //是否显示上传按钮
                showCaption: false,//是否显示标题
                browseClass: "btn btn-primary", //按钮样式 
				maxFileSize: 1024,
            });
			$('#admin').click(function(){
				var pwd = $('#pwd').val();
				var rpwd = $('#rpwd').val();
				if(pwd == rpwd){
					return true;
				}else{
					layer.msg("账号密码不正确");
					return false;
				}
			});
        </script>
    </body>

</html>
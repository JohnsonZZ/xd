<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class ConnectController extends Controller {
    public function index(){
		//实例化banner
		$order = "rank asc"; 
		$Banner = M('Banner');
		$b['rank'] = array(array('gt',0),array('lt',6)) ;
		$banner = $Banner -> order($order) -> where ($b) -> select();
		$this->assign('banner',$banner);
        $this->display();
    }
}
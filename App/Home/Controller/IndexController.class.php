<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){
		
		$order = "rank asc"; 
		//实例化banner
		$Banner = M('Banner');
		$b['rank'] = array(array('gt',0),array('lt',6)) ;
		$banner = $Banner -> order($order) -> where ($b) -> select();
		
		//实例化product
		$Product = M('Product');	
		$map['rank'] = array(array('gt',0),array('lt',7)) ;
		$product = $Product -> order($order) -> where ($map)  -> select();
		
		//assign
		$this->assign('product',$product);
		$this->assign('banner',$banner);
        $this->display();
    }
}
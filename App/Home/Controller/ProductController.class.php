<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class ProductController extends Controller {
    public function index(){	
		//实例化banner
		$order = "rank asc"; 
		$Banner = M('Banner');
		$b['rank'] = array(array('gt',0),array('lt',6)) ;
		$banner = $Banner -> order($order) -> where ($b) -> select();	
		
		
        $Product = M('Product');
		$brand = I('get.brand');
		if(($brand == "蓝道夫") || ($brand == "琪珂") ){
			$where['brand'] = $brand;
			$count = $Product-> where($where) -> count(); // 查询满足要求的总记录数		
			$Page = new \Think\Page($count,21); // 实例化分页类 传入总记录数和每页显示的记录数(10)
			$product = $Product-> where($where) ->limit($Page->firstRow . ',' . $Page->listRows)->select();
		}
		else
		{
			$count = $Product->count(); 
			$Page = new \Think\Page($count,21); // 实例化分页类 传入总记录数和每页显示的记录数(10)
		    $product = $Product -> order("time desc") ->limit($Page->firstRow . ',' . $Page->listRows)->select();
		}

		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('product',$product);
		$this->assign('banner',$banner);
        $this->display();
    }
}
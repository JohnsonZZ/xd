<?php
namespace Xdmin\Controller;
use Xdmin\Controller\ComController;
header("Content-type:text/html;charset=utf-8");
class ProductController extends ComController {
    public function index(){
		$Product = M('Product');
		$keyword = I('get.keyword');
		$brand = I('get.brand');
		$time = I('get.order');
		if(empty($keyword)){
			$order = empty($time)? 'time desc' : "time $time";
			if(($brand == "蓝道夫") || ($brand == "琪珂")){
				$where['brand'] = $brand;
				$count = $Product-> where($where) ->count(); // 查询满足要求的总记录数
				$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
				$product = $Product->  order($order)-> where($where) -> limit($Page->firstRow . ',' . $Page->listRows)->select();
				$this->assign('product',$product);
			}
			else {
				$count = $Product->count(); // 查询满足要求的总记录数
				$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
				$product = $Product->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
				$this->assign('product',$product);
			}
		}
		else{
			
			$map['bianhao'] =array('like',"%$keyword%");
			$count = $Product-> where($map) ->count(); 
			$product = $Product->where($map)->select();
			$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
			$product = $Product-> where($map) -> limit($Page->firstRow . ',' . $Page->listRows)->select();
		}
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page->show(); // 分页显示输出
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('product',$product);
		$this->display();
    }
	public function add(){
		$this->display();
    }
	public function edit(){
		$data['id'] = I('get.id');
		$Product = M('Product');
		$product = $Product->where($data)->find();
		$this->assign('product',$product);
		$this->display();
	}
	public function update(){
		$Product = M('Product');
		$id = I('post.id');		
		$data['rank'] = $_POST['rank'];
		$data['title'] = $_POST['title'];
		$data['url'] = $_POST['url'];
		$data['bianhao'] = $_POST['bianhao'];
		$data['brand'] = $_POST['brand'];		
		if(!empty($_FILES)){
			$upload = new \Think\Upload();// 实例化上传类
			$upload->subName   =     array('date', 'Ymd');
			$upload->maxSize   =     1048576 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  =     'Public/upload/image/'; // 设置附件上传根目录
			$upload->replace   =	 true;
			$upload->savePath  =     ''; // 设置附件上传（子）目录
			// 上传文件 
			$info   =   $upload -> upload();
			if($info) {
				$data['img'] = $info['img']['savepath'] . $info['img']['savename'];
			}
		}		
		if($data['rank']<=6 && $data['rank'] >=1){
			$oldrank = $Product -> where('rank='.$data['rank']) -> find();
			if($oldrank){													//修改旧的RANK值
				$r['rank'] = 0;
				$Product -> where('id='.$oldrank['id']) -> save($r);
			}
		}
		if($id){	
			$path = $Product -> where('id ='.$id) -> field('img') -> find();	//更图片
			$file = 'Public/upload/image/'.$path['img']; 						//储存之前的图片路径
			$result = $Product -> where('id='.$id)-> save($data);
			if($result){
				if(isset($data['img'])){
					unlink($file);//成功后删除之前的图片
				}
				addlog('修改产品');
				$this->success('修改成功', 'index');
			} else {
				$this->error('修改失败');
			}
		}else{
			
			$result = $Product->add($data);
		
			if($result){
				addlog('增加产品');
				$this->success('新增成功', 'add');
			} else {
				$this->error('新增失败');
			}
		}
	}
	public function del(){
		$lids = I('param.id');
		if(is_array($lids)){
			$lids = implode(',',$lids);
			$map['id']  = array('in',$lids);
		}else{
			$map['id'] = $lids;
		}
		$Product =  M('Product');
		$result = $Product -> where($map) -> delete();
		if($result){
			addlog('删除产品');
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}
}
<?php
namespace Admin\Controller;
use Think\Controller;
class BannerController extends Controller {
    public function index(){
		$Banner = M('Banner');				 //建立模型
		$count = $Banner -> count();         //查询总数
		$Page = new \Think\Page($count,15);  //实例化页
		$banner = $Banner -> order('time desc') ->limit($Page->firstRow . ',' . $Page-> listRows) ->select();
		$Page->setConfig('prev', '<');
		$Page->setConfig('next', '>');
		$Page->setConfig('header','');
		$show = $Page ->show();
		$this->assign('page', $show); 		  // 赋值分页输出
		$this->assign('banner',$banner);
		$this->display();	
	}
	
	public function add(){
		$this->display();
	}
	
	public function edit(){
		$Banner = M('Banner');
		$id['id'] = I('get.id');
		$banner = $Banner -> where($id) ->find();
		$this->assign('banner',$banner);
		$this->display();
	}
	
	public function update(){
		$Banner = M('Banner');
		$id = I('post.id');	
		$data['rank'] = I('post.rank');
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
		if($data['rank']<=5 && $data['rank'] >=1){
			$oldrank = $Banner -> where('rank='.$data['rank']) -> find();
			if($oldrank){													//修改旧的RANK值
				$r['rank'] = 0;
				$Banner -> where('id='.$oldrank['id']) -> save($r);
			}
		}
		if($id){
			$path = $Banner -> where('id ='.$id) -> field('img') -> find();	//更图片
			$file = 'Public/upload/image/'.$path['img']; //储存之前的图片路径
			$result = $Banner -> where('id='.$id)-> save($data);
			if($result){
				if(isset($data['img'])){
					unlink($file);//成功后删除之前的图片
				}
				addlog('修改产品');
				$this->success('修改成功', 'index');
			} else {
				$this->error('修改失败');
			}
		}
		else {
			$result = $Banner-> add($data);
			if($result){
				addlog('增加产品');
				$this->success('新增成功', 'index');
			} else {
				$this->error('新增失败');
			}
		}
	}
	
	public function del(){
		$Banner =  M('Banner');
		$lids = I('param.id');
		if(is_array($lids)){
			$lids = implode(',',$lids);
			$map['id']  = array('in',$lids);
		}else{
			$map['id'] = $lids;
		}
		$result = $Banner -> where($map) -> delete();
		if($result){
			addlog('删除产品');
			$this->success('删除成功','index');
		} else {
			$this->error('删除失败');
		}
	}
		
	
}
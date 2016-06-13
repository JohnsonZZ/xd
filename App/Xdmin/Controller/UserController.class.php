<?php
namespace Xdmin\Controller;
use Xdmin\Controller\ComController;
header("Content-type:text/html;charset=utf-8");
class UserController extends ComController {
    public function index(){
			$User = M('User');
			$keyword = I('get.keyword');
			if(empty($keyword)){
				$time = I('get.order');
				$order = empty($time)? 'time desc' : "time $time";
				$count = $User->count(); // 查询满足要求的总记录数
				$Page = new \Think\Page($count,8); // 实例化分页类 传入总记录数和每页显示的记录数(10)
				$list = $User->order($order)->limit($Page->firstRow . ',' . $Page->listRows)->select();
				$Page->setConfig('prev', '<');
				$Page->setConfig('next', '>');
				$Page->setConfig('header','');
				$show = $Page->show(); // 分页显示输出
				$this->assign('page', $show); // 赋值分页输出
				$this->assign('list',$list);
			}else{
				$like = I('get.field')."="."'$keyword'";
				$list = $User->where($where)->select();
				$this->assign('list',$list);
			}
			$this->display();
    }
	public function add(){
		$this->display();
    }
	public function edit(){
		$data['id'] = I('get.id');
		$User = M('User');
		$list = $User->where($data)->find();
		$this->assign('list',$list);
		$this->display();
	}
	public function update(){
		$id = I('post.id');
		$data['account'] = I('post.account');
		$data['nick'] = I('post.nick');
		$data['pwd'] = I('post.pwd');
		$data['email'] = I('post.email');
		$data['phone'] = I('post.phone');
		$User = M('User');
		if($id){
			$result = $User->where('id ='.$id)->save($data);
			if($result){
				$this->success('修改成功', 'index');
			} else {
				$this->error('修改失败');
			}
		}else{
			$result = $User->add($data);
			if($result){
				$this->success('新增成功', 'add');
			} else {
				$this->error('新增失败');
			}
		}
	}
	public function del(){
		$uids = I('param.id');
		if(is_array($uids)){
			$uids = implode(',',$uids);
			$map['id']  = array('in',$uids);
		}else{
			$map['id'] = $uids;
		}
		$User = M('User');
		$result = $User->where($map)->delete();
		if($result){
			$this->success('删除成功');
		} else {
			$this->error('删除失败');
		}
	}
}
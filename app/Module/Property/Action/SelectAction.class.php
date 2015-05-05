<?php

	Class SelectAction extends CommonAction{

		//功能界面展示
		Public function index(){
			$this->display();
		}

		//发送信息界面
		PUblic function sendmsg(){
			
			$this->msg=M(property)->where(array('pid' => $_SESSION['pnum']))->getField('dor_id');

			$this->display();
		}

		//处理发送消息表单
		public function msgHandle(){
			$time=time();
			$arr=array();
			$arr=$_POST;
			$arr['time']=$time;
			$arr['send']=$_SESSION['pwho'].'['.$_SESSION['pnum'].']';
			$result=M(message)->add($arr);
			if($result){
				$this->success('发送成功',U(GROUP_NAME.'/Select/index'));
			}else{
				$this->error('操作错误，请重试');
			}

		}
		//展示接收信息
		Public function showmsg(){
			import('ORG.Util.Page');
			$count=M('fix_stu')->count();
			$page=new Page($count,2);
			$limit=$page->firstRow.','.$page->listRows;
			$this->result=D('Fix_stuView')->order('status asc')->limit($limit)->select();
			$this->page=$page->show();
			// p($this->result);die;
			// $result=M(fix_stu)->where(array('status' => 0))->select();
			// $rr=count($result);
			// $ee=array();
			// foreach($result as $v){
			// 	$ee.=M(fix)->where(array('id'=>$v['fid']))->select();
			// }
			// // $this->result=$ee;
			// p($ee);
			// p($result);die;
			$this->display();
		}

		//展示接收的报修信息
		
	}
?>
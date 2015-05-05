<?php

	Class SelectAction extends CommonAction{

		Public function index(){
			$this->display();
		}
		PUblic function sendmsg(){
			$this->display(); 
		}

		//信息展示界面，这里面包括身为学生，宿舍身份为接收者所展示
		Public function showmsg(){
			$dor=M(student)->where(array('sid' => $_SESSION['snum']))->getField('dormitory');
			$dorm=substr($dor,0,2);
			$cid=array($dorm,'student');
			$count=M(message)->where(array('receive'=>array('IN',$cid),'status'=>0))->count();
			import('ORG.Util.Page');
			$page=new Page($count,2);
			$limit=$page->firstRow.','.$page->listRows;
			$this->result=M(message)->where(array('receive'=>array('IN',$cid),'status'=>0))->limit($limit)->select();
			$this->page=$page->show();
			//使信息状态转换为已读
			M(message)->where(array('receive' => array('IN',$cid),'status' => 0))->save(array('status' => 1));
			$this->display();
		}

		//历史信息展示
		public function oldmsg(){
			$dor=M(student)->where(array('sid' => $_SESSION['snum']))->getField('dormitory');
			$dorm=substr($dor,0,2);
			$cid=array($dorm,'student');
			$count=M(message)->where(array('receive'=>array('IN',$cid),'status'=>1))->count();
			import('ORG.Util.Page');
			$page=new Page($count,3);
			$limit=$page->firstRow.','.$page->listRows;
			$this->result=M(message)->where(array('receive'=>array('IN',$cid),'status'=>1))->limit($limit)->select();
			$this->page=$page->show();
			$this->display();
		}

		//提交报修信息
		public function sendfix(){
			
			$dor=M(student)->where(array('sid' => $_SESSION['snum']))->getField('dormitory');
			$dorm=substr($dor,0,2);
			$this->dormitory=$dorm;
			$this->display();
		}

		//处理报修信息
		public function fixHandle(){
			// P($_POST);DIE;
			if(!$_POST){
				$this->error('错误操作！');
			}
			$dd=$_POST['content'];
			if(empty($dd))
			$this->error('内容不能为空！');
			$time=time();
			$dormitory=M(student)->where(array('sid'=> $_SESSION['snum']))->getField('dormitory');
			$_POST['time']=$time;
			$_POST['dormitory']=$dormitory;
			$_POST['fix_stu']=array(
				'pid'=>I('receive'),
				'sid'=>I('send'),
				'status'=>'0',
				'sendtime'=>$time
				);
			$fix=D("Fix")->relation(true)->add($_POST);
			// p($fix);die;
			if($fix){
				$this->success('报修成功，请耐心等待回应！',U(GROUP_NAME.'/Select/index'));
			}else{
				$this->error('报修失败，请重试！');
			}
			//p($_POST);
		}
		public function fixHistory(){
			// $fix=M(fix)->where(array('send'=>$_SESSION['snum']))->select();
			// p($fix);
			// echo $_SESSION['snum'];
			import('ORG.Util.Page');
			$count=M('fix')->where(array('send'=>$_SESSION['snum']))->count();
			$page=new Page($count,4);
			$limit=$page->firstRow.','.$page->listRows;
			$this->result=D(Fix)->relation(true)->where(array('send'=>$_SESSION['snum']))->limit($limit)->select();
			// p($this->result);die;
			$this->page=$page->show();
			$this->display();
		}
	}
?>
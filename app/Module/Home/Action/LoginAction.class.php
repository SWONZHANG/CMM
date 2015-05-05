<?php

	Class LoginAction extends Action{

		public function index(){
			$this->display();
		}
		public function login(){
			if(!$_POST) $this->error('请正常登陆');
			if(I('verify','',md5) != $_SESSION['verify']) $this->error('验证码错误');
			$num=I('num');
			$pwd=I('pwd','',md5);
			$who=I('who');
			switch($who){
				case 'student':
						$result=M(student);
						if($result->where(array('sid' => $num,'password' => $pwd))->select()){
							session('snum',$num);
							session('swho',$who);
							$this->success('进入学生界面',U('Student/Index/index'));
						}else{
							$this->error('账号或密码错误');
						}			
				break;	
				case 'property':
						$result=M(property);
						if($result->where(array('pid' => $num,'password' => $pwd))->select()){
							$this->success('进入物业界面',U('Property/Index/index'));
							session('pnum',$num);
							session('pwho',$who);
						}else{
							$this->error('账号或密码错误');
						}			
				break;
				case 'teacher':
						$result=M(teacher);
						if($result->where(array('tid' => $num,'password' => $pwd))->select()){
							session('tnum',$num);
							session('twho',$who);
							$this->success('进入教师界面',U('Teacher/Index/index'));
						}else{
							$this->error('账号或密码错误');
						}				
				break;			 
			}
		}
		//引用验证码类
		public function verify(){
		import("ORG.Util.Image");
		Image::buildImageVerify(1,5,'png');
		}

		//退出登陆
		public function logout(){
			unset($_SESSION);
			session_destroy();
			$this->success('退出登录',U(GROUP_NAME.'/Index/index'));
		}
	}
?>
<?php
	
	Class IndexAction extends CommonAction{
		public function index(){

			$this->display(main);
		}
		public function person(){
			$this->display(person);
		}

		Public function msgnum(){
			$dor=M(student)->where(array('sid' => $_SESSION['snum']))->getField('dormitory');
			$dorm=substr($dor,0,2);
			$num1=M(message)->where(array('receive' => student,'status' => 0))->count();
			$num2=M(message)->where(array('receive' => $dorm,'status' => 0))->count();
			$this->num=$num1+$num2;
			// p($this->num);
			/*echo $this->num;*/
			$this->display();
		}

		public function onup(){
			$img=M(onupimg)->select();
			$this->img=$img;
			$this->display();
		}
		/**
		 * 照片上传处理
		 */
		public function onHandle(){
			if(!is_dir('File')){
				mkdir("File");
			}
			$dd=$_POST['filefield'];
			if(empty($dd))
			$this->error('请选择文件！');
			$file=$_FILES['filefield'];
			if(is_uploaded_file($file['tmp_name'])){
				$floattime=time();
				$str=stristr($file['name'],'.');
				$path="File/".$floattime.$str;
				$img=M('onupimg');
				$data=array('user'=>$_SESSION['snum'],'time'=>time(),'imgload'=>$path);
				if($img->add($data)){
				
				//echo $path;die;
				if(move_uploaded_file($file['tmp_name'],$path)){
					$this->success('上传成功！');
				}}
			}
		}
	}	
?>
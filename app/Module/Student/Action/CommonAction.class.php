<?php

	Class CommonAction extends Action{

		public function _initialize(){
			if(!$_SESSION['snum']) $this->error('请登陆！');
		}
	}
?>
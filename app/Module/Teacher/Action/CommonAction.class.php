<?php

	Class CommonAction extends Action{

		public function _initialize(){
			if(!$_SESSION['tnum']) $this->error('请登陆！');
		}
	}
?>
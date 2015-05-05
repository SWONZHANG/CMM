<?php

	Class CommonAction extends Action{

		public function _initialize(){
			if(!$_SESSION['pnum']) $this->error('请登陆！');
		}
	}
?>
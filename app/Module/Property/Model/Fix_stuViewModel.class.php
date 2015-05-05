<?php

	Class Fix_stuViewModel extends ViewModel{
		public $viewFields=array(		
			'fix_stu'=>array('status','sid'=>'send','pid'=>'receive','sendtime'=>'time'),
			'fix'=>array('content','dormitory','_on'=>'fix.id=fix_stu.fid'),
			);
		
	}
?>
<?php

	Class FixModel extends RelationModel{

		protected $_link=array(
			'fix_stu'=>array(
				'mapping_type'=>HAS_ONE,
				'mapping_name'=>'fix_stu',
				'class_name'=>'fix_stu',
				'foreign_key'=>'fid',
				'as_fields'=>'pid,sid,status,sendtime',
				)
			);
	}
?>
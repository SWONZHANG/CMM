<?php
		
	Class WeijiModel extends Model{
		protected $_link=array(
			''
			)


	}

?>
   protected $_link = array(
        'ZfUsers'=>array(
            'mapping_type'      => self::HAS_ONE,
            'foreign_key' => 'uid',
            'as_fields' => 'username,password,sid',
        ),
    );
 }
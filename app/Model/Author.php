<?php
/**
* 
*/
class Author extends AppModel
{
	public $validate = array( 
		'name' => array( 'rule' => 'notEmpty' )
	);
}
?>
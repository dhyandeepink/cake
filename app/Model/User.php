<?php
class User extends AppModel{
	public $name= 'User';

	

	public $validate = array(
	'koordinator_id'=> array (
		'rule'	=> 'notEmpty'
	),
	'username'=> array (
		'rule'	=> 'notEmpty'
	),
	'password'	=> array (
		'rule'	=> 'notEmpty'
	),
	'level' => array (
		'rule' => 'notEmpty'
	)
	);
}
?>
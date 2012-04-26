<?php
class Barang extends AppModel{
	var $name='Barang';

	var $hasOne = array(
		'Pasar' => array (
			'className'		=> 'Pasar',
			'foreignKey'	=> 'pasar_id',
		)
	);
	var $belongsTo = array(
		'Master' => array (
			'className'		=> 'Master',
			'foreignKey'	=> 'master_id',
		)
	);

	

	public $validate = array (
	'master_id'=> array (
		'rule'	=> 'notEmpty'
	),
	'harga'=> array (
		'rule'	=> 'notEmpty'
	),
	'pasar_id'	=> array (
		'rule'	=> 'notEmpty'
	)
);
}

?>

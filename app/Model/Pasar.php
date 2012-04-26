<?php

class Pasar extends AppModel {
	var $name = 'Pasar';
	var $hasMany = array(
		'Koordinator' => array (
			'className'		=> 'Koordinator',
			'foreignKey'	=> 'pasar_id',

		)
	);

	var $hasOne = array(
		'Barang' => array (
			'className'		=> 'Barang',
			'foreignKey'	=> 'master_id',
		)
	);

public $validate = array (
	'kode_pasar'=> array (
		'rule'	=> 'notEmpty'
	),
	'nama_pasar'=> array (
		'rule'	=> 'notEmpty'
	),
	'alamat'	=> array (
		'rule'	=> 'notEmpty'
	)
);
}
?>


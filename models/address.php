<?php
class Address extends AddressesAppModel {
	var $name = 'Address';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/*
	var $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	 * 
	 */
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->validate = array(
			'addr_1' => array(
				'notempty' => array(
					'rule' => array('notEmpty'),
					'message' => __d('cart', 'This field cannot be left blank', true))),
			'city' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => __d('cart', 'This field cannot be left blank', true))),
			'zip' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => __d('cart', 'This field cannot be left blank', true))),
			'state_id' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => __d('cart', 'This field cannot be left blank', true))),
			'country_id' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => __d('cart', 'This field cannot be left blank', true))),
			'confirmed' => array(
				'rule' => array('boolean')));
	}
	
	/**
	 * remaps a set of keys to another set
	 * 
	 * $map array a key value set where key is the key to be mapped and the value 
	 * is what the key will be mapped to uses original $array as default values 
	 */
	public function remapKeys($array = array(),$map = array()){
		$newArrayKeys = $array;	
		foreach($map as $map_key=>$new_key){
			unset($newArrayKeys[$map_key]);
			$newArrayKeys[$new_key] = $array[$map_key];
		}
		return $newArrayKeys;
	}
}

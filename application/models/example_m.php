<?php
class example_m extends MY_Model{
	protected $_table_name = 'example';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'id';
	
	protected $_timestamps = FALSE;	
	function __construct(){
		parent::__construct();
	}
 
	public $rules_admin = array(
		'name' => array('field' => 'name', 'label'=> 'Name', 'rules'=>'trim|required|xss_clean' ),		
		'salary' => array('field' => 'salary', 'label'=> 'Salary', 'rules'=>'trim|required|xss_clean' ),
		

		);

	public function get_new(){
		$item = new stdClass();
		$item->salary = '';
		$item->name = '';
	
		return $item;
	}
}
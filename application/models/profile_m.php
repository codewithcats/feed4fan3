<?php
class profile_m extends MY_Model{
	protected $_table_name = 'profile';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'id';
	
	protected $_timestamps = FALSE;	
	function __construct(){
		parent::__construct();
	}
 
	public $rules_admin = array(
		'name' => array('field' => 'name', 'label'=> 'Name', 'rules'=>'trim|required|xss_clean' ),		
		'sname' => array('field' => 'sname', 'label'=> 'sname', 'rules'=>'trim|required|xss_clean' ),
		);

	public function get_new(){
		$item = new stdClass();
		$item->salary = '';
		$item->sname = '';
	
		return $item;
	}
}
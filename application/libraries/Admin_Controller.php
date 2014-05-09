<?php


class Admin_Controller extends MY_Controller{


	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		//$this->load->library('session');
		$this->load->library('form_validation');
 
 /*
		$excep_uris = array(
			'admin/user/login',
			'admin/user/logout',
		);
		

		if(in_array(uri_string(), $excep_uris) == FALSE){
			if ($this->user_m->loggedin()==FALSE){
				redirect('admin/user/login');
			}
		

		}
*/

		
	}
/*
	function check_permission($title){
		$gid = (int)($this->session->userdata('group'));
		$per = (int)($this->menu_m->get_by("title = '".$title."'"));
		if (($per & $gid) != $gid) {
			redirect("welcome");
		}
	}
*/	
}
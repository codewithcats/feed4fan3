<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends Admin_Controller {

	public function __construct(){
		parent::__construct();

	}
 
	 
	public function info(){

		$this->data['items'] = $this->profile_m->get();
		$this->data['subview'] = "profile/info";

		 $this->load->view("admin/_layout_main", $this->data);	
	}


}

 
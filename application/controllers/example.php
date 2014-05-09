<?php
class Example extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('example_m');
	}
 
	public function index($where = NULL){
		
		if ($where){
			$this->data['items'] = $this->example_m->get_by($where);	
		}else{
			$this->data['items'] = $this->example_m->get();	
		}

	 	$this->data['subview'] = "example/index";
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function delete($id = NULL){
	 	$this->example_m -> delete($id);
		redirect('example/index');
	}

	public function edit($id = NULL){
		 
		if($id != NULL){
			$this->data['items'] = $this->example_m->get($id);
			count($this->data['items']) || $this->data['error'][] = "Item could not be found"; 
		}else{
			$this->data['items'] =  $this->example_m->get_new();
		}
 

		$rules = $this->example_m -> rules_admin;
		$this->form_validation->set_rules($rules);
		if  ($this->form_validation->run() == TRUE){
			$data = $this-> example_m -> array_from_post(array('name', 'salary'));
			$this->example_m -> save($data, $id);
			redirect('example/index');
		}
		$this->data['subview'] = "example/edit";
		$this->load->view('admin/_layout_main', $this->data);
		
	}

	public function search(){
 		$data = $this-> example_m -> array_from_post(array('name'));
 		  
 		if ( $data['name'] ){
 			$where =  " name like '%". $data['name']  ."%'";
 			$this->index($where);
 		}else{
 			$this->index();
 		}
  }

  public function info($id = NULL){
  	if($id){
  		$this->data['item'] = $this->example_m->get($id);
		$this->data['subview'] = "example/info";
		$this->load->view('admin/_layout_main', $this->data);
  	}
  }
   
}



<?
class MY_Controller extends CI_Controller{
	public $data=array();

	function __construct(){
		parent::__construct();
		$this->data['error']=array();
		$this->data['site_name'] = config_item('site_name');
		$this->load->helper('url');
		$this->data['meta_title']= "Demo";
	}
}
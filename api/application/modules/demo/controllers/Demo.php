<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends MY_Controller {
	public function __construct() {
	
		parent::__construct();
		
		
		$this->load->model('Demo_model');
	}
	public function user()
	{
		
		$user=$this->Demo_model->user_list();
		echo json_encode($user);
	}
}

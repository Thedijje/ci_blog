<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modules extends CI_Controller {
	
	 function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
		$this->login->check_admin_login();
	
    }

	public function index()
	{
		
		
		$data['title']			=	'Modules';
		$data['heading']	=	'Modules';
		$data['icon']		=	'fa fa-window-restore';
		

		
		$this->load->view('admin/includes/header',$data);
		$this->load->view('admin/modules',$data);
		$this->load->view('admin/includes/footer',$data);
	}
}

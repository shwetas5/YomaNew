<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stitcher extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->model('common');
    }

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('admin_login');
	}
       
        public function dashboard()
	{
		$this->load->helper('url');
                $result['records'] = $this->common->transaction_latest();
		$this->load->view('dashboard', $result);
	}

	public function login()
	{
		//print_r('yyyy');exit;
      $this->load->model('login_model');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $result = $this->login_model->admin_login($username, $password);
      //print_r($result);exit;
      if(!empty($result)){
      	$this->session->set_userdata('admin_login', $result);
      	$admin_login = $this->session->userdata('admin_login');
      	$result['sitemaster_records'] = $this->common->sitemaster_records();
        //print_r($result);exit;
	$this->load->view('map_view', $result);
      }else{
      	print_r('failure');exit;
      }	
	}
}

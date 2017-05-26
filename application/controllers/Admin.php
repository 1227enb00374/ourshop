<?php

class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index(){
		$data['content'] = $this->load->view('admin/admin_content','',true);
		$this->load->view('admin/admin_master',$data);
	}

	public function add_category(){
		$data['content'] = $this->load->view('admin/category_add','',true);
		$this->load->view('admin/admin_master',$data);
	}

	public function category_create(){
		$data['name'] = $this->input->post('name');
		$data['status'] = $this->input->post('status');
		$data['created'] = $this->input->post('created');
		if($this->Admin_model->insert_category($data)==true){
			$this->session->set_userdata('create_category_notification','category inserted');
			redirect(base_url().'Admin/add_category');
		}else{
			$this->session->set_userdata('create_category_notification',"can't insert category !");
		}
	}

	public function add_product(){
		$data['content'] = $this->load->view('admin/product_add','',true);
		$this->load->view('admin/admin_master',$data);
	}



}
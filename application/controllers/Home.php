<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data['content'] = $this->load->view('home_content','',true);
		$this->load->view('home_master',$data);
	}

	public function products()
	{
		$data['content'] = $this->load->view('product_content','',true);
		$this->load->view('home_master',$data);
	}

	public function topbrand()
	{
		$data['content'] = $this->load->view('topbrand_content.php','',true);
		$this->load->view('home_master',$data);
	}

	public function cart()
	{
		$data['content'] = $this->load->view('cart_content.php','',true);
		$this->load->view('home_master',$data);
	}
	public function contact()
	{
		$data['content'] = $this->load->view('contact_content.php','',true);
		$this->load->view('home_master',$data);
	}
}

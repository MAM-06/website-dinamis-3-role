<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helpers('url');
		$this->load->view('frontend/index');
	}
	public function about()
	{
		$this->load->helper('url');
		$this->load->view('frontend/about');
	}
	public function login()
	{
		$this->load->helper('url');
		$this->load->database();
		$this->load->view('login');
	}
	
	public function admin()
	{
		echo 'halaman admin'; 
	}
	
	public function writer()
	{
		echo 'halaman writer'; 
	}
	
	public function reviewer()
	{
		echo 'halaman reviewer'; 
	}
	public function user(){
		$this->load->model('m_login');
		$data['login'] = $this->m_login->login();
		print_r($data['login']);
			$this->session->set_userdata('logged_in',$data['login']);
			print_r(['login']);
			$akses = $data['login']->akses;
			echo $akses;
			switch($akses){
				case 'admin':
					echo $akses;
					redirect('admin/admin');
				case 'writer':
					echo $akses;
					redirect('writer/writer');
				case 'reviewer':
					echo $akses;
					redirect('reviewer/reviewer');
				break;
		}
					
	}
}
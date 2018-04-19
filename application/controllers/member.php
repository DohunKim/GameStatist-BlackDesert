<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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
		$this->load->view('templates/header');
		$this->load->view('member/index');
		$this->load->view('templates/footer');
	}
	
	/**
	 * * 로긴페이지
	 * TODO: POST 페이지 작성 필요
	 */
	public function Login(){
		$this->load->view('member/login');
	}
	
	/**
	 * * 가입
	 * TODO: POST process. email confirm is required
	 */
	public function Register(){
		$this->load->view('member/register');
	}

	/**
	 * *가입 시 이메일 인증..
	 * ? 정말 해야 하나 이걸?
	 * TODO: 가입 시 이메일 인증 나중에.. 하자 나중에.
	 */
	private function SendEmail($email)
	{

	}
}

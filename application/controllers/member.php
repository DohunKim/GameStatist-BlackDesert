<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('user_model');
		$this->load->helper('url');
    }

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
		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
			$this->load->view('member/login');
		}
		else
		{
			$user = $this->user_model->login($this->input->post('email'), $this->input->post('pwd'));
			if($user !== null) {
				//로긴 성공. 세션 데이터 추가 후 홈으로
				// TODO: redirect url feature도 필요할 듯..
				//echo $user->idMember.'<br/>'.$user->name;

				$this->session->set_userdata('userIdx', $user->idMember);
				$this->session->set_userdata('nickname', $user->name);
				header("Location: /");
			} else {
				//실패했으니.. alert redirect 이용해서 조치 할 것
				$data = array('errMsg' => '로그인에 실패하였습니다.');
				$this->load->view('member/login',$data);
			}
		}
	}

	public function Logout()
	{
		$this->session->unset_userdata('userIdx');
		$this->session->unset_userdata('nickname');
		header("Location: /");
	}
	
	/**
	 * * 가입
	 * TODO: POST process. email confirm is required
	 */
	public function Register()
	{
		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
			$this->load->view('member/register');
	
		} else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			if ($this->user_model->register($this->input->post('nickname'), $this->input->post('email'), $this->input->post('pwd')))
				$this->load->view("alert_redirect",array('msg' => '회원가입이 완료되었습니다. 로그인해주세요.', 'url' => '/Member/Login'));
			else
				$this->load->view('member/forgotPassword');	
		}
	}

	public function forgotPassword(){
		$this->load->view('member/forgotPassword');
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

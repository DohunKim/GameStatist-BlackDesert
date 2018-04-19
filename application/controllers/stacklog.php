<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stacklog extends CI_Controller {

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
		/**
		 * TODO: 최근 데이터 추려서 보여주기. 핫한 데이터 보여주기(Trello 스택로그 코멘트 참고)
		 */
		$this->load->view('templates/header');
		$this->load->view('stacklog/index');
		$this->load->view('templates/footer');
	}


	public function success($item = 0)
	{
		$this->load->view('templates/header');

		/**
		 * *아이템 인덱스가 같이 오면, 해당 아이템의 데이터를 보이고, 없으면 전체 데이터 중 최근 업데이트 된 내역 보여줌
		 */
		 if ($item === 0)
		{
			$this->load->view('stacklog/success/index');
		}
		else
		{
			// DB서 아이템 인덱스로 조회
			
			// 리스트업 데이터 뷰로 전달

			// 뷰 호출
			$this->load->view('stacklog/success/detail');
		}

		$this->load->view('templates/footer');
	}

	public function fail($item = 0)
	{
		$this->load->view('templates/header');

		/**
		 * *아이템 인덱스가 같이 오면, 해당 아이템의 데이터를 보이고, 없으면 전체 데이터 중 최근 업데이트 된 내역 보여줌
		 */
		 if ($item === 0)
		{
			$this->load->view('stacklog/fail/index');
		}
		else
		{
			// DB서 아이템 인덱스로 조회
			
			// 리스트업 데이터 뷰로 전달

			// 뷰 호출
			$this->load->view('stacklog/fail/detail');
		}

		$this->load->view('templates/footer');

	}

	public function register($type)
	{

		if ($this->input->server('REQUEST_METHOD') == 'GET')
		{
			$data = array(
				'type' => $type
			);

			$this->load->view('templates/header');
			$this->load->view('stacklog/register', $data);
			$this->load->view('templates/footer');
	
		} else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$data = array(
				'user_name' => $this->input->post('u_name'),
				'user_email_id' => $this->input->post('u_email')
				);
				$this->load->database();
	
				$query = $this->db->get('members');
	
				foreach ($query->result() as $row)
				{
					$data['fromDB'] = $row;
				}
				
	
			$this->load->view("stacklog/registerComplete",$data);
		}

	}
}

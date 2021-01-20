<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('username'))
		{
			redirect('main/home');
		}

		$this->form_validation->set_rules('username', 'Username', 'required|trim', [
			'required' => 'Username harus diisi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Password harus diisi'
		]);

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/auth-header');
			$this->load->view('auth/login');
			$this->load->view('templates/auth-footer');
		} else {
			$this->_login();
		}
	}

	public function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if($user)
		{
			if(password_verify($password, $user['password']))
			{
				$data = [
					'username' => $user['username']
				];

				$this->session->set_userdata($data);
				redirect('main/home');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" id="exception">
					Password salah
					</div');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" id="exception">
				Username tidak terdaftar
				</div');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" id="exception">
		Anda telah keluar
		</div>');
		redirect('auth');
	}

}
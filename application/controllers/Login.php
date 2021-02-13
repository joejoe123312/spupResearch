<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
	}

	public function index()
	{
		//notifications
		$this->Main_model->alertPromt('Invalid user', 'userInvalid');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//validate username and password
			$where['username'] = $username;
			$where['password'] = $this->Main_model->passwordEncryptor($password);
			$credentialsTable = $this->Main_model->multiple_where('credentials', $where);

			if (count($credentialsTable->result_array()) != 0) {
				//meron siyang nahanap
				$credentialsTable = $credentialsTable->row();
				$credentialsId = $credentialsTable->id;

				$this->session->set_userdata('account_id', $credentialsId);
				redirect("Dashboard");
			} else {
				//wala siyang nahanap
				$this->session->set_userdata('userInvalid', 1);
				redirect('Login');
			}
		}

		$this->load->view('login');
	}

	function logout()
	{
		session_destroy();
		redirect('Login');
	}

	function changePassword()
	{
		$accountId = $_SESSION['account_id'];

		//notifications
		$this->Main_model->alertPromt('');

		$this->form_validation->set_rules('currentPassword', 'Current Password', 'required');
		$this->form_validation->set_rules('newPassword', 'New Password', 'required');
		$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required');
		if ($this->form_validation->run()) {
			$currentPassword = $this->input->post("currentPassword");
			$newPassword = $this->input->post("newPassword");
			$confirmPassword = $this->input->post("confirmPassword");

			//validate current password
			$where['id'] = $accountId;
			$where['password'] = $currentPassword;
			$credentialsTable = $this->Main_model->multiple_where('credentials', $where);

			if (count($credentialsTable->result_array()) == 0) {
				$this->session->set_userdata('currentPasswordWrong', 1);
				redirect("Login/changePassword");
			}

			//validate if new password and confirm password
			if ($newPassword != $confirmPassword) {
				$this->session->set_userdata('confirmPasswordWrong', 1);
				redirect("Login/changePassword");
			}
		}

		$this->load->view('changePassword');
	}

	function guestLogin()
	{
		$this->session->set_userdata('guest', 1);
	}
}

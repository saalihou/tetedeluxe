<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function index()
	{
		$this->load->model('User');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/login');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if ($this->User->check($email, $password)) {
				$this->session->loggedIn = true;
				$this->session->email = $email;
				redirect('/');
			} else {
				$this->load->view('auth/login', ['error' => 'Mauvaise combinaison email/mot de passe']);
			}
		}
	}

	public function subscribe()
	{
		$this->load->model('User');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Mot de passe', 'required|min_length[6]');
		$this->form_validation->set_rules('passwordConfirmation', 'Confirmation de mot de passe', 'required|matches[password]');
		$this->form_validation->set_rules('phoneNumber', 'Numéro de téléphone', 'required|callback_check_phone_number');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/subscribe');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phoneNumber = $this->input->post('phoneNumber');
			$this->User->subscribe($email, $password, $phoneNumber);
			redirect(site_url('/authentication'));
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(site_url('/'));
	}
	
	public function check_phone_number($str)
	{
			if (1 !== preg_match("/^(70|76|77|78)[0-9]{7}$/", $str))
			{
					$this->form_validation->set_message('check_phone_number', 'Le numéro %s n\'est pas valide!');
					return FALSE;
			}
			else
			{
					return TRUE;
			}
	}

}
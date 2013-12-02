<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//load resources
		$this->load->helper('url');
		$this->load->library('carabiner');

		// load assets
		$this->carabiner->css('style.css');
		$this->carabiner->css('media.css');
		$this->carabiner->js('jquery.min.js');
		$this->carabiner->js('main.js');

		//display page
		$this->load->view('indexView');
	}

	public function submitform()
	{
		// validate input
		$name = trim($this->input->post('name'));
		$email = trim($this->input->post('email'));
		$message_to_dan = trim($this->input->post('message'));
		$errors = false;
		if($name == '')
		{
			echo 'name|'; $errors = true;
		}
		if($email == '')
		{
			echo 'email|'; $errors = true;
		}
		else
		{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
			    echo 'email|'; $errors = true;
			}
		}
		if($message_to_dan == '')
		{
			echo 'message|'; $errors = true;
		}

		if($errors)
		{
			return;
		}
		else
		{
			// send email on form submit
			$this->load->library('email');
			$this->email->from('donotreply@dzingweb.com', 'Portfolio Site');
			$this->email->to('dstoeltzing@yahoo.com'); 
			$this->email->subject('Email from portfolio contact form');
			$message_content = 'Name: ' . $name . ' | Email: ' . $email . ' | Message: ' . $message_to_dan;
			$this->email->message($message_content);
			//$this->email->send();
		}
		// TODO: move this to email success
		echo 'SUCCESS';	
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// main page
	public function index()
	{
		// load resources and set vars
		$data = array();
		$data['browser_message'] = false;
		$this->load->helper('url');
		$this->load->library('carabiner');
		$this->load->library('user_agent');

		// load assets
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		if($browser == 'Internet Explorer' && ($browser_version == 6 || $browser_version == 7 || $browser_version == 8))
		{
			$this->carabiner->css('ie.css');
			if($browser_version == 6 || $browser_version == 7)
			{
				$data['browser_message'] = '<p class="error" style="border: 1px dotted red; padding: 10px;">It appears you are using an older broswer. Because this site uses some of the latest and greatest technologies, some things might not look right to you. I recommend viewing this site in a newer browser such as the latest version of <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">Internet Explorer</a>, <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a> or <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a> for the best experience.</p>';
			}
		}
		else
		{
			$this->carabiner->css('style.css');
			$this->carabiner->css('media.css');
		}
		$this->carabiner->js('jquery.min.js');
		$this->carabiner->js('main.js');

		//display page
		$this->load->view('indexView', $data);
	}

	// form submission ajax function
	public function submitform()
	{
		// validate input
		$name = trim($this->input->post('name'));
		$email = trim($this->input->post('email'));
		$message_to_dan = trim($this->input->post('message'));
		$errors = false;
		if($name == ''){ echo 'name|'; $errors = true; }
		if($email == ''){ echo 'email|'; $errors = true; }
		else{ if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { echo 'email|'; $errors = true; } }
		if($message_to_dan == ''){ echo 'message|'; $errors = true; }
		if($errors){ return; }
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
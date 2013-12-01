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
		// send email on form submit
		$this->load->library('email');
		$this->email->from('donotreply@dzingweb.com', 'Portfolio Site');
		$this->email->to('dstoeltzing@yahoo.com'); 
		$this->email->subject('Email from portfolio contact form');
		$message_content = 'Name: ' . $this->input->post('name') . ' | Email: ' . $this->input->post('name') . ' | Message: ' . $this->input->post('message');
		$this->email->message($message_content);
		$this->email->send();
	}
}
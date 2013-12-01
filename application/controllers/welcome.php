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
}
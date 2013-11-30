<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// load assets
		$this->load->library('carabiner');
		$this->carabiner->css('style.css');
		$this->carabiner->css('media.css');
		$this->carabiner->js('jquery.min.js');
		$this->carabiner->js('main.js');

		$this->load->view('indexView');
	}
}
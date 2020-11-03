<?php

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}

class admin_Controller extends MY_Controller
{
	protected function render_template_admin($page = null, $data = array())
	{
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/header_files', $data);
		$this->load->view('layouts/header_menu', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('layouts/footer_files', $data);
		$this->load->view('layouts/footer', $data);
	}
}

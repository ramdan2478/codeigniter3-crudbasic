<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $data['title']   = "This Is Title";
        $data['content'] = "This Is The Contents";
        $this->load->view('v_blog',$data);
    }
}

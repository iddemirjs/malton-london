<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{

	}
}

class Public_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->defineLanguage();
	}

	public function defineLanguage(){
		if(!$this->session->userdata('language')){
            $this->session->set_userdata('language',array(
				"lan_id"=>1,
				"lan_name"=>"English",
				"lan_tag"=>"en",
				"lan_flag_url"=>""));
		}
	}
}

class Admin_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->LoginControl();
	}
	public function LoginControl()
	{
		if($this->session->userdata('login')==null){
            redirect("auth/login", 'refresh');
		}
	}

}

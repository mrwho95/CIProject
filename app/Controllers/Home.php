<?php namespace App\Controllers;

class Home extends BaseController
{

    public function  __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{

		return view('home');
	}

	//--------------------------------------------------------------------

}

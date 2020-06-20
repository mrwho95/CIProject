<?php 
namespace App\Controllers\User;

use App\Controllers\BaseController;

class About extends BaseController
{
	public function index()
	{
		// return base_url();
		// return view('welcome_message');
		return view('user/about');
	}

	//--------------------------------------------------------------------

}

<?php 
namespace App\Controllers\User;

use App\Controllers\BaseController;

class Gallery extends BaseController
{
	public function index()
	{
		return view('user/gallery');
	}

	//--------------------------------------------------------------------

}

<?php namespace Controllers;

/**
 *This class loads the purchase history for all user types.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Marketplace
 *@package Marketplace\Controllers\Home
 *@link mobeoffice.com
 */

use Helpers\View;
use Models\UsersModel;

class UserController extends BaseController {

	/**
	 *This method loads the homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function index()
	{
		//define the page title
		$data['title'] = 'Welcome to User Sign Up / Sign In Page';

		//get the ending date today
		View::render('users/index', $data);

	}

        public function signup ()
	{
		//define the page title
		$data['title'] = 'Welcome to User Sign Up  Page';

		//get the ending date today
		View::render('users/signup', $data);

	}
        public function signin ()
	{
		//define the page title
		$data['title'] = 'Welcome to User Sign In Page';

		//get the ending date today
		View::render('users/signin', $data);

	}
         public function welcome ()
	{
		//define the page title
		$data['title'] = 'Welcome ';

		//get the ending date today
		View::render('users/welcome', $data);

	}

}


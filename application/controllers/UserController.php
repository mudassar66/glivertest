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
use Input;
use Redirect;
use Session;

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
		$data['title'] = 'Welcome to User Module';

		//get the ending date today
                //View::render('header', $data);
		View::render('users/index', $data);
                //View::render('footer');

                Session::start();

	}

        public function signup ()
	{
            if (Session::has('user') && trim(Session::get('user')) !=''){
                Session.set('message', 'Welcome '.Session::get('user'));
                return Redirect::to('user/profile');

            }
            //define the page title
            $data['title'] = 'Welcome to User Sign Up  Page';
             

            //get the ending date today
            View::render('users/signup',$data);
 
	}
        public function signin()
	{
            //define the page title
            $data['title'] = 'Welcome to User Sign In Page';
           // View::render('header', $data);
            View::render('users/signin', $data);
         //   View::render('footer');
            
	}
        public function register(){
            if (Session::has('user') && trim(Session::get('user')) !=''){
                Session::set('message', 'Welcome '.Session::get('user'));
                return Redirect::to('user/profile');

            }
            $input = Input::get();
            $data['email'] = $input['inputEmail'];
            $data['first_name']  = $input['inputFname'];
            $data['last_name']  = $input['inputLname'];
            $data['password']=$password = $input['inputPassword'];
            $password2 = $input['inputPassword2'];
            if($password !=$password2){
                Session::set('message', 'User Not created. Password not match');
                return Redirect::to('user/signup');
            } else {
                if( UsersModel::isEmailExists($data['email'])>0){
                    Session::set('message', 'Email already exists');
                    return Redirect::to('user/signup');

                } else {
                    
                UsersModel::storeUsers($data);
                Session::set('user',  $data['first_name'].' '. $data['last_name']);
                Session::set('email',  $data['email']);
                Session::set('message', 'Welcome '.Session::get('user'));
                return Redirect::to('user/profile');
            
                } // end if email exist
            }
            
            

        }
        public function dologin(){
            if (Session::has('user') && trim(Session::get('user')) !=''){
                Session::set('message', 'Welcome '.Session::get('user'));
                return Redirect::to('user/profile');

            }
            $input = Input::get();
            $data['email'] = $input['inputEmail'];
            $data['password'] = $input['inputPassword'];
           // print_r(UsersModel::checklogin($data['email'],$data['password']));
            //exit;
            if( UsersModel::checklogin($data['email'],$data['password'])){
               // Session::set('user',  $data['first_name'].' '. $data['last_name']);
                $userobj = UsersModel::getProfile($data['email'])[0];
                
                Session::set('user',  $userobj['first_name'].' '. $userobj['last_name']);
                Session::set('email',  $data['email']);
                Session::set('message', 'Welcome '.Session::get('user'));
                return Redirect::to('user/profile');
              
                } else {
                    
                    Session::set('message', 'Invalid Username or password');
                    return Redirect::to('user/signin');

               
                } // end if email exist
         
        }
        public function profile ()
	{
		
                if (! Session::has('user') ){
                    Session::set('message', 'Session Expired! ');
                    return Redirect::to('user/signup');

                }
                $users = UsersModel::getProfile(Session::get('email'));
                $data['title'] = 'Welcome User';
                $data['users'] = $users;
		//View::render('header', $data['title']);
                View::render('users/profile', $data);
              //  View::render('footer');
            

	}
        public function logout ()
	{
            //define the page title
            Session::flush();
            //get the ending date today
            return Redirect::to('');

        }

}


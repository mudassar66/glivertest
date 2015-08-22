<?php namespace Models;

/**
 *@author ...
 *@copyright ...
 *@link ...
 */
class UsersModel extends Model{
	

	/**
	 *This function method does what you want it to do and has to be static
	 *
	 *@param ...
	 *@return ...
	 */
    
        protected static $table = 'users';

	public static function getUsers()
	{
                //static::Query()->from(self::$table)->where('token = ?', $token)->all();
                $obj = static::Query()->from(self::$table)->all();
                return $obj;
	}
        public static function getProfile($email)
	{
                return static::Query()->from(self::$table)->where('email = ?', $email)->all();
               // return $obj;
	}
        public static function checklogin($email,$pass)
	{
                //static::Query()->from(self::$table)->where('token = ?', $token)->all();
                $token = UsersModel::getProfile($email)[0]['token'];
                //echo 'token'.$token;exit;
                $pass = md5($pass.$token);
               return static::Query()->from(self::$table)->where('email = ?',$email,'password=?',$pass)->count();
               // return $obj;
	}
        public static function isEmailExists($email)
	{
                //static::Query()->from(self::$table)->where('token = ?', $token)->all();
               return static::Query()->from(self::$table)->where('email = ?', $email)->count();
                //return $obj;
	}
        
        
        
        public static function storeUsers($data)
	{
            $token = md5($data['email'] . time()).  uniqid();
            $data['password'] = md5($data['password'].$token);
            $data['token'] = $token;
            //make call to query database
            $tokenSave = static::Query()->from(self::$table)->save($data);

        if( $tokenSave ) return $token;
	}


}
<?php

/**
 *This method  sets the value of a configuration option
 *we stop native engine from writing errors so that our shutdown can handle error logging singly
 *@param sting The option to set
 *@param string The value of the option set
 *@return null
 */
ini_set('log_errors', 'Off');

//define the 'E_FATAL' error type variable, set to all error types
define('E_FATAL',  E_ERROR | E_USER_ERROR | E_PARSE | E_CORE_ERROR | 
        E_COMPILE_ERROR | E_RECOVERABLE_ERROR);

//Define the type of errors to set for reporting
define('ERROR_REPORTING', E_ALL | E_STRICT);

//set the shutdown function
register_shutdown_function('shut');

//set the error handler
set_error_handler('handler');

/**
 *This function catches unhandles errors
 *
 *@param null
 *@return void
 */
function shut(){

    //get record for the last error that led to this shutdown instance
    $error = error_get_last();

    //check if the error type is one of those defined in 'E_FATAL' constant
    if($error && ($error['type'] & E_FATAL)){
        handler($error['type'], $error['message'], $error['file'], $error['line']);
    }

}

/**
 *This function handles all catched errors
 *
 *@param int $errno The error number associated with this type of error
 *@param string $errMsg Error message assiciated with this error
 *@param string $errFile File name where this error occurred
 *@param int $errLine The file line where this error occurred
 *@return void
 */
function handler( $errNo, $errMsg, $errFile, $errLine ) {

    //set the paramter againsy which to test and get the error type
    switch ($errNo){

        case E_ERROR:
            // 1 //
            $errorType = 'E_ERROR'; 

            break;
        case E_WARNING: 
            // 2 //
            $errorType = 'E_WARNING'; 

            break;
        case E_PARSE:
            // 4 //
            $errorType = 'E_PARSE'; 

            break;
        case E_NOTICE: 
            // 8 //
            $errorType = 'E_NOTICE'; 

            break;
        case E_CORE_ERROR: 
            // 16 //
            $errorType = 'E_CORE_ERROR'; 

            break;
        case E_CORE_WARNING: 
            // 32 //
            $errorType = 'E_CORE_WARNING'; 

            break;
        case E_COMPILE_ERROR: 
            // 64 //
            $errorType = 'E_COMPILE_ERROR'; 

            break;
        case E_CORE_WARNING: 
            // 128 //
            $errorType = 'E_COMPILE_WARNING'; 

            break;
        case E_USER_ERROR: 
            // 256 //
            $errorType = 'E_USER_ERROR';

            break;
        case E_USER_WARNING: 
            // 512 //
            $errorType = 'E_USER_WARNING'; 

            break;
        case E_USER_NOTICE: 
            // 1024 //
            $errorType = 'E_USER_NOTICE'; 

            break;
        case E_STRICT: 
            // 2048 //
            $errorType = 'E_STRICT'; 

            break;
        case E_RECOVERABLE_ERROR: 
            // 4096 //
            $errorType = 'E_RECOVERABLE_ERROR'; 

            break;
        case E_DEPRECATED: 
            // 8192 //
            $errorType = 'E_DEPRECATED'; 

            break;
        case E_USER_DEPRECATED: 
            // 16384 //
            $errorType = 'E_USER_DEPRECATED'; 

            break;

    }


    //compose an error message to display
    $errorMessage = '<b>'.$errorType.': </b>'.$errMsg.' in <b>'.$errFile.'</b> on line <b>'.$errLine.'</b><br/>';

    //define the error.log file definiton
    $filePath = dirname(dirname(dirname((dirname(__FILE__))))) . '/bin/logs/error.log';
   
    /**
     *This methods writes this error messages to file.
     *@param string $message The error messages string to write
     *@param string $filePath The full path of the error.log file
     *@return This method does not throw an error
     */
    error_log(preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $errorMessage). PHP_EOL, 3, $filePath);

    //production environment, hide the error mesage
    if( DEV === false ) 
    {

        //define the site title
        $title = 'Gliver PHP MVC Framework';

        //load the error hide page
        include dirname((dirname(__FILE__))) . '/errorHide.php';

        //stop further script execution
        exit();
   
    }

    //this is development environment, show the error
    else
    {
        //define the site title
        $title = 'Gliver PHP MVC Framework';

        //load the show error view file
        include dirname((dirname(__FILE__))) . '/errorShow.php';
    
        //stop further script execution
        exit();
   
   }

}

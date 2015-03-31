<?php

class params
{
    public static function clean_default(array $a, $key, $default = NULL)
    {
        if(isset($a[$key]))
            return trim(strip_tags($a[$key]));
        return $default;
    }
    
    public static function clean($t)
    {
        return trim(mysqli_real_escape_string(dbconnect::$db, $t));
    }
	
	public static function redirect_gone($location)
	{
		header('HTTP/1.1 410 Gone');
  		header('Location: '.$location);
		file_put_contents('gone.log', date('Y-m-d H:i:s').",$_SERVER[REMOTE_ADDR],$_SERVER[REQUEST_URI],$_SERVER[HTTP_REFERER]\r\n", FILE_APPEND);	
		exit;
	}
}

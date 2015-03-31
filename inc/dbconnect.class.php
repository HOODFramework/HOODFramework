<?php
class dbconnect
{
	public static $db = null;
	
    static public $dbs = array(
        array('host'=>'localhost', 'user'=>'root', 'password'=>'', 'db'=>''),
        );      
        
    static public function connect()
    {
      if(self::$db)
      	return self::$db;
    	
      shuffle(self::$dbs);
      
      foreach(self::$dbs as $db_info)
      {
            self::$db = mysqli_connect($db_info['host'], $db_info['user'], $db_info['password']);
            if(!self::$db)
                continue;
            mysqli_select_db(self::$db, $db_info['db']) or die("ERROR: can not select database ". mysqli_error(self::$db)); // local
            mysqli_set_charset(self::$db, 'utf8'); 
            return self::$db; 
      }         
        
      return NULL;
    }
    
}

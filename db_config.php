<?php 
date_default_timezone_set("Asia/Kolkata");

session_start();
error_reporting(E_ALL);

// use this pathes and/or define the pathes for the "standard" pages

define("CLASS_PATH", dirname($_SERVER['PHP_SELF']).""); // the location where the class is executed

$sec_path = "/classes/access_user/"; // a second location where the scripts should be 

define("APPLICATION_PATH", $sec_path);



// modify these constants to fit your environment

define('WEBSITE_URL','http://qualeadify.com/');

define('WEBSITE_MAIN','http://qualeadify.com/');

define('IMG_URL','http://qualeadify.com/');

define('ADMIN_URL','http://qualeadify.com/admin/');

define('SECURE_URL','http://qualeadify.com/');
 
define('COMPANY_NAME','Qualeadify');

// these are the names for the standard table names

// !!! Important

// It's possible that your server doesn't allow the database name inside a query

// if this forms a problem don't use them here and unescape the mysql_select_db() function

// inside the connect_db() method.

// define("USER_TABLE", DB_NAME.".users"); 

// define("PROFILE_TABLE", DB_NAME.".users_profile");

// define("COUNTRY_TABLE", DB_NAME.".countries"); // an optional table with countruy names and codes



// variables (locations) standard pages (combine the pathes from the top or use your own)

 define("LOGIN_PAGE", CLASS_PATH."index.php");

 define("START_PAGE", "start.php");

 define("ACTIVE_PASS_PAGE", APPLICATION_PATH."activate_password.php");

 define("DENY_ACCESS_PAGE", APPLICATION_PATH."deny_access.php");

 define("ADMIN_PAGE", APPLICATION_PATH."admin_user.php");

// your path must be related to the site root.

 

// change this constants to the right mail settings

define("WEBMASTER_MAIL", "webmaster@yourdomain.com"); 

define("WEBMASTER_NAME", "The webmaster"); 

define("ADMIN_MAIL", "admin@yourdomain.com"); 

define("ADMIN_NAME", "The site admin"); 



// change this vars if you need...

 define("PW_LENGTH", 4);

 define("LOGIN_LENGTH", 6);



 define("COOKIE_NAME", "user"); 

 define("COOKIE_PATH", APPLICATION_PATH);

 define("MIN_ACCESS_LEVEL", 1);

 define("MAX_ACCESS_LEVEL", 10);

 define("DEFAULT_ACCESS_LEVEL", 1);

 define("DEFAULT_ADMIN_LEVEL", 10);



//////////////////////////////////////////////////

// constants and field names user profile table //

/////////////////////////////////////////////// //

// stamdard fields are: address, postcode, city, country, phone, fax, homepage, textfield

// variables must match your user profile table design

// use this four user defined fields (type varchar(100) too

// change the value of a constant but change them in the mysql table too

// otherwise you wil get some ERROR'S !!!

//define("TBL_USERFIELD_1", "user_1");

//define("TBL_USERFIELD_2", "user_2");

//define("TBL_USERFIELD_3", "user_3");

//define("TBL_USERFIELD_4", "user_4");



// class dbconnect

// {

// 	public function dbconnect($host,$user,$pass,$db)

// 	{

// 		@mysql_connect($host,$user,$pass) or die(mysql_error());

// 		mysql_select_db($db) or die(mysql_error());

// 	} 
	
// }


// $obj = new dbconnect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

?>
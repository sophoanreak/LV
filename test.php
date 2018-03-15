<?php
include "Error/showError.php";

$GLOBALS['config'] = array(

	"mysql" => array( 
		"host" => array(
			"one" => "127.0.0.1",
			"two" => "127.0.0.2"
		 ),
		"db" => array(
			"book"=>1,
			"student"=>2
		)
	 ),
	"remember" => array(
		"cookie_name" => "hash",
		"cookie_expiry" => 86400*30
	 )

);

			$path="mysql/host/one";
			$config = $GLOBALS['config'];
			$path = explode('/',$path);

			//call array from config
			foreach($path as $bit){
				if(isset($config[$bit])){
					$config = $config[$bit];
					foreach($config as $value){
						if(isset($config[$value])){
							return $config = $config[$value];
						}
					}
				}	
			}
			echo $config;
			
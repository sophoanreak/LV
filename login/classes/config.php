<?php

class config{
	public static function get($path = null){
		if($path){
			$config = $GLOBALS['config'];
			$path = explode('/',$path);

			//call array from config
			foreach($path as $bit){
				if(isset($config[$bit])){
					$config = $config[$bit];
				}
			}
			return $config;

		}
		return "False";
	}
}
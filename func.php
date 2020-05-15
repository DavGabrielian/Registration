<?php


function getSession($key, $remove = true){
		if(isset($_SESSION[$key])){
			$value = $_SESSION[$key];
			if($remove){
				unset($_SESSION[$key]);
			}
			return $value;
		}
		return false;
    }
    
<?php
	class SessionVar{
		public function sessionStart(){
			if(session_id())
				return True;
			else
				return session_start();
		}
		
		public function set($name_cookie,$value_cookie){
			if(session_id()){
				$_SESSION[$name_cookie]=$value_cookie;
				return True;
			}
			else
				return False;
		}
		
		public function get($name_cookie){
			if(session_id())
				if(isset($_SESSION[$name_cookie]))
					return $_SESSION[$name_cookie] ;
			else
				return False;
		}
		
		public function listKeys(){
			if(session_id())
				return $_SESSION;
			else
				return False;
		}
		
		public function existsKey($name_cookie){
			if(session_id())
				if(isset($_SESSION[$name_cookie]))
					return True;
				else
					return False;
			else
				return False;
		}
		
		public function sessionEnd(){
			if(session_id())
				return session_destroy();
			else
				return False;
		}
	}

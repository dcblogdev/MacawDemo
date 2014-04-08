<?php

class Demo {

	public function home(){
		echo 'hi';
	}

	public function hello(){
		echo 'Hello from the controller';
	}

	public function user($name){
		echo 'Hello: '.$name;
	}

}
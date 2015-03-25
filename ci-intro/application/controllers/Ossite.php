<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ossite extends CI_Controller{
	public function index() {
		//$this->helloWorld();
		//$this->Sum(34,65);
		$this->calculatorView();
	}
	public function helloWorld() {
		echo "</br> This is Hello World Function </br>";
	}
	public function Sum($i,$j) {
		
		$this->load->model("Calculator");
		echo $this->Calculator->add($i,$j);
	}	
	public function calculatorView() {
		$arr["Name"] = "Hayatullah";
		$this->load->view("calc-view",$arr);
	}
}




<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function getview(){
        $this->load->view('home_view');
    }


	public function index()
	{
		echo "home";
    }

    public function get(){
        echo "chaiyaporn";
    }


    public function input(){
        echo "input";
    }

    public function map(){
        echo "map1<br>";
        $this->index(); //วิธีการเรียกใช้ function in my class **use 
        echo "<br>map2";
    }


    function __construct() {
        parent::__construct();

     
    }

    

}

//# localhost/code101/  base_url root_path www.xxx.com

//root/index.php/controller/function=index/p1/p2
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bass extends CI_Controller {

    function __construct() {
        parent::__construct();

        echo "you";
    }

	
	public function index()
	{
		echo "chaiyaporn wama";
    }
    
    function __destruct() {
        
        echo "end";
      }
}

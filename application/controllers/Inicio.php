<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

   public function __construct()
   {
        parent::__construct();
        $this->load->library('form_validation');
   }


    public function index()
    {

        $this->load->view('login');
        $this->load->view('includes/footer');
    
    }


}
  
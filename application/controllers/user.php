<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function dashboard()
  {
    $this->load->view('templates/dashboard_header');
    $this->load->view('user/dashboard');
    $this->load->view('templates/dashboard_footer');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Rms Logistic';
    $data['phone'] = '+(62) 21 801 5966';
    $data['mail'] = 'ridho@ridhologistics.com';
    $data['copyright'] = 'Ridho Makmur Sentosa Logistics';
    $data['addres'] = 'JL. Cililitan Besar No. 83 Kramat Jati – Jakarta Timur 13640 Indonesia';
    $this->load->view('templates/index_header', $data);
    $this->load->view('templates/slide_show', $data);
    $this->load->view('auth/home');
    $this->load->view('templates/index_footer', $data);
  }

  public function contactus()
  {
    $data['title'] = 'Rms Logistic';
    $data['phone'] = '+(62) 21 801 5966';
    $data['mail'] = 'ridho@ridhologistics.com';
    $data['copyright'] = 'Ridho Makmur Sentosa Logistics';
    $data['addres'] = 'JL. Cililitan Besar No. 83 Kramat Jati – Jakarta Timur 13640 Indonesia';
    $this->load->view('templates/index_header', $data);
    $this->load->view('auth/contactus');
    $this->load->view('templates/index_footer', $data);
  }

  public function service_details()
  {
    $data['title'] = 'Rms Logistic';
    $data['phone'] = '+(62) 21 801 5966';
    $data['mail'] = 'ridho@ridhologistics.com';
    $data['copyright'] = 'Ridho Makmur Sentosa Logistics';
    $data['addres'] = 'JL. Cililitan Besar No. 83 Kramat Jati – Jakarta Timur 13640 Indonesia';
    $this->load->view('templates/index_header', $data);
    $this->load->view('templates/slide_show', $data);
    $this->load->view('auth/service_details');
    $this->load->view('templates/index_footer', $data);
  }

  public function login()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['logintitle'] = 'Rms Logistic | Login';
      $data['copyright'] = 'Ridho Makmur Sentosa Logistics | 2020';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer', $data);
    }
  }

  public function registration()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_leng[3]|matches[password2]', [
      'min_leng' => 'password too short!',
      'matches' => 'password dont match!'
    ]);
    $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]', [
      'matches' => 'password dont match!'
    ]);

    if ($this->form_validation->run() == false) {
      $data['logintitle'] = 'Rms Logistic | Login';
      $data['copyright'] = 'Ridho Makmur Sentosa Logistics | 2020';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/registration');
      $this->load->view('templates/auth_footer', $data);
    } else {
      $email = $this->input->post('email', true);
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($email),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'image' => 'default.jpg',
        'role_id' => 3,
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. please login</div>');
    }
  }
}

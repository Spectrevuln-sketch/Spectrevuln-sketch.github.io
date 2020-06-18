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
    if ($this->session->userdata('email')) {
      redirect('auth');
    }

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Rms Logistic';
      $data['phone'] = '+(62) 21 801 5966';
      $data['mail'] = 'ridho@ridhologistics.com';
      $data['copyright'] = 'Ridho Makmur Sentosa Logistics';
      $data['addres'] = 'JL. Cililitan Besar No. 83 Kramat Jati – Jakarta Timur 13640 Indonesia';
      $this->load->view('templates/index_header', $data);
      $this->load->view('auth/contactus');
      $this->load->view('templates/index_footer', $data);
    } else {
      $email = $this->input->post('email', true);
      $data = [
        'massage' => htmlspecialchars($this->input->post('massage', true)),
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars('email'),
        'subject' => htmlspecialchars($this->input->post('subject', true)),
        'date_created' => time()
      ];

      //siapkan token
      $token = base64_encode(random_bytes(32));
      $testi_token = [
        'email' => $email,
        'token' => $token,
        'date_created' => time()
      ];

      $this->db->insert('testi_customer', $data);
      $this->db->insert('testi_token', $testi_token);

      $this->__sendEmail($token, 'touch');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Thanks for get touch</div>');
      redirect('auth/contactus');
    }
  }
  private function __sendEmail($token, $type)
  {
    $config = [
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_user' => 'gerry.radityaky@gmail.com',
      'smtp_pass' => '091013gs',
      'smtp_port' => 465,
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'newline'   => "\r\n"
    ];

    $this->email->initialize($config);

    $this->email->from('gerry.radityaky@gmail.com', 'Gerry Raditya');
    $this->email->to($this->input->post('email'));

    if ($type == 'touch') {
      $this->email->subject('Get In Touch');
      $this->email->message('Thanks For Get in Touch : <a href="' . base_url() . 'auth' . $this->input->post('email') . '&token=' . urlencode($token) . '">Back To Ridhologistics</a>');
    }
    if ($this->email->send()) {
      return true;
    }
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
    $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_leng[8]|matches[password2]', [
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
        'is_active' => 0,
        'date_created' => time()
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. please login</div>');
      redirect('auth/login');
    }
  }
}

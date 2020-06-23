<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

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
      $data['addres1'] = 'JL. Cililitan Besar';
      $data['addres2'] = 'No. 83 Kramat Jati – Jakarta Timur 13640 Indonesia';
      $this->load->view('templates/index_header', $data);
      $this->load->view('auth/contactus');
      $this->load->view('templates/index_footer', $data);
    } else {
      $email = $this->input->post('email', true);
      $data = [
        'massage' => htmlspecialchars($this->input->post('massage', true)),
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($email),
        'subject' => htmlspecialchars($this->input->post('subject', true)),
        'date_created' => time()
      ];

      $this->db->insert('testi_customer', $data);

      $this->session->set_flashdata('touch', '<div class="alert alert-success" role="alert">Thankyou for get in touch</div>');
      redirect('auth/contactus');
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

  public function do_download()
  {
    $this->load->helper('download');
    force_download('assets/img/banner/banner2.png', NULL);
  }
}

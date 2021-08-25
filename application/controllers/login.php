<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    // function __construct()
    // {
    //   parent::__construct();

    //   if (!isset($this->session->userdata['nama'])) {
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-danger fade show " role="alert">
    //                     Mohon maaf, silahkan login terlebih dahulu
    //                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                       <span aria-hidden="true">&times;</span>
    //                     </button>
    //                   </div>');
    //     redirect('administrator/logadm');
    //   }
    // }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('login');
    }

    public function cek()
    {
        $user    = $this->input->post('user');
        $pass    = $this->input->post('pass');
        // var_dump($user, $pass);
        // die();
        $cek = $this->login_model->cek($user, $pass);
        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $u) {
                $sess_data['id'] = $u->id;
                $sess_data['lvl'] = $u->level;
            }
            $this->session->set_userdata($sess_data);
            redirect('dash');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}

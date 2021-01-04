<?php

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_status();
        $this->CI = &get_instance();
    }

    // |------------------------------------------------------
    // | Dashboard
    // |------------------------------------------------------

    public function index()
    {
        if ($this->CI->router->fetch_class() != "login") {
            // session check logic here...change this accordingly
            if ($this->CI->session->userdata['level'] == 'nasabah') {
                redirect('nasabah/penjualan');
            } elseif ($this->CI->session->userdata['level'] == 'ketua') {
                redirect('ketua/ketua');
            }
        }
        $data = [
            'title' => 'Pengajuan ',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
            'abouts' => $this->db->get('tbl_about')->result_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/pengajuan/index', $data);
        $this->load->view('templates/footer');
    }
}

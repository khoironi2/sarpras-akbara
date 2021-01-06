<?php

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->cek_status();
        // $this->CI = &get_instance();
    }

    // |------------------------------------------------------
    // | Dashboard
    // |------------------------------------------------------

    public function index()
    {
        // if ($this->CI->router->fetch_class() != "login") {
        //     // session check logic here...change this accordingly
        //     if ($this->CI->session->userdata['level'] == 'nasabah') {
        //         redirect('nasabah/penjualan');
        //     } elseif ($this->CI->session->userdata['level'] == 'ketua') {
        //         redirect('ketua/ketua');
        //     }
        // }
        $data = [
            'title' => 'Pengajuan ',
            'parent' => 'Pengajuan ',
            'child' => 'Pengajuan ',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'pengajuan' => $this->Pengajuan_model->getAll()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar');
        $this->load->view('admin/pengajuan/index', $data);
        $this->load->view('templates/footer');
    }

    public function pengajuan_pdf($id)
    {
        // if ($this->CI->router->fetch_class() != "login") {
        //     // session check logic here...change this accordingly
        //     if ($this->CI->session->userdata['level'] == 'admin') {
        //         redirect('Admin');
        //     } elseif ($this->CI->session->userdata['level'] == 'nasabah') {
        //         redirect('nasbah/penjualan');
        //     }
        // }
        $this->load->library('dompdf_gen');

        $data = [
            'title' =>  'AKBARA',
            'logo' => '<img src="assets/images/icon/logo-akbara.png" alt="" height="50" class="mr-3">',
            'ttdg' => '<img src="assets/dokumen/ttdg/contoh.jpg" alt="" height="50" class="mr-3">',
            'gambar' => 'assets/img/perbaikan/'
        ];
        // $data['nasabah'] = $this->Laporan_keuangan_ketua_model->getNasabahbytgl($keyword1, $keyword2);

        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['pengajuan'] = $this->Pengajuan_model->getID($id);
        $this->load->view('admin/pengajuan/pdf/Pengajuan', $data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Dokume_pengajuan.pdf", ['Attachment' => 0]);
    }
}

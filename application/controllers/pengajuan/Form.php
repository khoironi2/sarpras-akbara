<?php

class Form extends CI_Controller
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
            'child' => 'Form ',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'user' => $this->Users_model->getAll()
        ];

        $this->form_validation->set_rules('deskripsi_laporan_donasi', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/pengajuan/form', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'latar_belakang_pengajuan' => $this->input->post('latar_belakang_pengajuan'),
                'tujuan_pengajuan' => $this->input->post('tujuan_pengajuan'),
                'manfaat_pengajuan' => $this->input->post('manfaat_pengajuan'),
                'jenis_pengajuan' => $this->input->post('jenis_pengajuan'),
                'biaya_pengajuan' => $this->input->post('biaya_pengajuan'),
                'waktu_pengajuan_awal' => date('Y-m-d H:i:s'),
                'waktu_pengajuan_akhir' => date('Y-m-d H:i:s'),
                'peserta_pengajuan' => $this->input->post('peserta_pengajuan'),
                'penutup_pengajuan' => $this->input->post('penutup_pengajuan'),
                'file_pengajuan' => $this->input->post('file_pengajuan'),
                'id_users' => $this->session->usersdata('id_users'),
            ];

            $upload_image = $_FILES['file_pengajuan']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'pdf|doc|csv';
                $config['upload_path'] = './assets/dokumen/pengajuan/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_pengajuan')) {
                    $new_image = $this->upload->data('file_pengajuan');
                    $this->db->set('file_pengajuan', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('tbl_pengajuan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajuan Berhasil Ditambahkan</div>');
            redirect('pengajuan/form');
        }
    }
    public function create()
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
            'judul_pengajuan' => $this->input->post('judul_pengajuan'),
            'dirumuskan_pengajuan' => $this->input->post('dirumuskan_pengajuan'),
            'diperiksa_pengajuan' => $this->input->post('diperiksa_pengajuan'),
            'ditetapkan_pengajuan' => $this->input->post('ditetapkan_pengajuan'),
            'dikendalikan_pengajuan' => $this->input->post('dikendalikan_pengajuan'),
            'latar_belakang_pengajuan' => $this->input->post('latar_belakang_pengajuan'),
            'tujuan_pengajuan' => $this->input->post('tujuan_pengajuan'),
            'manfaat_pengajuan' => $this->input->post('manfaat_pengajuan'),
            'jenis_pengajuan' => $this->input->post('jenis_pengajuan'),
            'biaya_pengajuan' => $this->input->post('biaya_pengajuan'),
            'waktu_pengajuan_awal' => date('Y-m-d H:i:s'),
            'waktu_pengajuan_akhir' => date('Y-m-d H:i:s'),
            'peserta_pengajuan' => $this->input->post('peserta_pengajuan'),
            'penutup_pengajuan' => $this->input->post('penutup_pengajuan'),
            // 'file_pengajuan' => $this->input->post('file_pengajuan'),
            'id_users' => $this->session->userdata('id_users'),
        ];

        $upload_image = $_FILES['file_pengajuan']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'pdf|xls|csv|docx';
            $config['upload_path'] = './assets/dokumen/pengajuan/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_pengajuan')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('file_pengajuan', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->insert('tbl_pengajuan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajuan Berhasil Ditambahkan</div>');
        redirect('pengajuan/form');
    }
}

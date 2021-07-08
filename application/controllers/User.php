<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');


        if (!$this->session->userdata('email')) {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Daftar Dana Surantiah';

        $data['anggaran_dana'] = $this->User_model->getAllAnggaranDana();
        $data['pemasukan_dana'] = $this->User_model->getAllPemasukanDana();
        $data['pengeluaran_dana'] = $this->User_model->getAllPengeluaranDana();

        $this->load->view('templates/index_header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/index_footer');
    }

    public function pengeluarandana()
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['total_anggaran'] = $this->User_model->hitungTotalAnggaran();
        $data['pengeluaran_dana'] = $this->User_model->getAllPengeluaranDana();
        $data['title'] = 'Anggaran Dana Desa';

        // $data['anggaran_dana'] = $this->User_model->getAllAnggaranDana();
        $this->load->view('templates/index_header', $data);
        $this->load->view('dana/pengeluaran');
        $this->load->view('templates/index_footer');
    }

    public function tambahpengeluaran()
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Tambah Pengeluaran Dana Desa';

        $this->form_validation->set_rules('tgl_keluar', '<strong>Tanggal Pengeluaran</strong>');
        $this->form_validation->set_rules('bidang', '<strong>Nama Bidang Pengeluaran</strong>', 'required');
        $this->form_validation->set_rules('jumlah', '<strong>Jumlah Pengeluaran</strong>', 'required|is_numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/index_header', $data);
            $this->load->view('dana/tambah_pengeluaran');
            $this->load->view('templates/index_footer');
        } else {
            $this->User_model->tambahPengeluaranDana();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('user/pengeluarandana');
        }
    }



    public function hapuspengeluaran($id)
    {

        $this->User_model->hapusPengeluaranDana($id);
        $this->session->set_flashdata('flash', 'Dihapus');


        redirect('user/pengeluarandana');
    }

    public function pemasukandana()
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Pemasukan Dana Desa';

        $data['pemasukan_dana'] = $this->User_model->getAllPemasukanDana();
        $this->load->view('templates/index_header', $data);
        $this->load->view('dana/pemasukan');
        $this->load->view('templates/index_footer');
    }

    public function tambahpemasukan()
    {

        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Tambah Pemasukan Dana Desa';

        $this->form_validation->set_rules('tgl_masuk', '<strong>Tanggal Pemasukan</strong>', 'required');
        $this->form_validation->set_rules('bidang', '<strong>Nama Bidang Pemasukan</strong>', 'required');
        $this->form_validation->set_rules('jumlah', '<strong>Jumlah Pemasukan</strong>', 'required|is_numeric');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/index_header', $data);
            $this->load->view('dana/tambah_pemasukan');
            $this->load->view('templates/index_footer');
        } else {
            $this->User_model->tambahPemasukanDana();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('user/pemasukandana');
        }
    }

    public function hapuspemasukan($id)
    {

        $this->User_model->hapusPemasukanDana($id);
        $this->session->set_flashdata('flash', 'Dihapus');


        redirect('user/pemasukandana');
    }

    public function ubahpemasukan($id)
    {

        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pemasukan_dana'] = $this->User_model->getPemasukanById($id);
        $data['title'] = 'Form Ubah Pemasukan Dana Desa';

        $this->form_validation->set_rules('tgl_masuk', '<strong>Tanggal Pemasukan</strong>', 'required');
        $this->form_validation->set_rules('bidang', '<strong>Nama Bidang Pemasukan</strong>', 'required');
        $this->form_validation->set_rules('jumlah', '<strong>Jumlah Pemasukan</strong>', 'required|is_numeric');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/index_header', $data);
            $this->load->view('dana/ubah_pemasukan', $data);
            $this->load->view('templates/index_footer');
        } else {
            $this->User_model->ubahPemasukanDana();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user/pemasukandana');
        }
    }

    public function ubahpengeluaran($id)
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengeluaran_dana'] = $this->User_model->getPengeluaranById($id);
        $data['title'] = 'Ubah Pengeluaran Dana Desa';

        $this->form_validation->set_rules('tgl_keluar', '<strong>Tanggal Pengeluaran</strong>', 'required');
        $this->form_validation->set_rules('bidang', '<strong>Nama Bidang Pengeluaran</strong>', 'required');
        $this->form_validation->set_rules('jumlah', '<strong>Jumlah Pengeluaran</strong>', 'required|is_numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/index_header', $data);
            $this->load->view('dana/ubah_pengeluaran', $data);
            $this->load->view('templates/index_footer');
        } else {
            $this->User_model->ubahPengeluaranDana();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user/pengeluarandana');
        }
    }

    public function cetaklaporanpemasukan()
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Pemasukan Dana Desa';

        $data['pemasukan_dana'] = $this->User_model->getAllPemasukanDana();
        // $this->load->view('templates/index_header', $data);
        $this->load->view('dana/cetak_laporan', $data);
        // $this->load->view('templates/index_footer');
    }

    public function cetaklaporanpengeluaran()
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Pengeluaran Dana Desa';

        $data['pengeluaran_dana'] = $this->User_model->getAllPengeluaranDana();
        // $this->load->view('templates/index_header', $data);
        $this->load->view('dana/cetak_laporanpengeluaran', $data);
        // $this->load->view('templates/index_footer');
    }
}

<?php

class User_model extends CI_Model
{
    public function getAllAnggaranDana()
    {
        return $this->db->get('anggaran_dana')->result_array();
    }

    public function getAllPemasukanDana()
    {
        return $this->db->get('pemasukan_dana')->result_array();
    }

    public function getAllPengeluaranDana()
    {
        return $this->db->get('pengeluaran_dana')->result_array();
    }



    public function tambahPemasukanDana()
    {
        $data = [
            "tgl_masuk" => $this->input->post('tgl_masuk', true),
            "bidang" => $this->input->post('bidang', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->insert('pemasukan_dana', $data);
    }



    public function hapusPemasukanDana($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pemasukan_dana');
    }

    public function getPemasukanById($id)
    {
        return $this->db->get_where('pemasukan_dana', ['id' => $id])->row_array();
    }

    public function ubahPemasukanDana()
    {
        $data = [
            "tgl_masuk" => $this->input->post('tgl_masuk', true),
            "bidang" => $this->input->post('bidang', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pemasukan_dana', $data);
    }

    public function tambahPengeluaranDana()
    {
        $data = [
            "tgl_keluar" => $this->input->post('tgl_keluar', true),
            "bidang" => $this->input->post('bidang', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->insert('pengeluaran_dana', $data);
    }

    public function getPengeluaranById($id)
    {
        return $this->db->get_where('pengeluaran_dana', ['id' => $id])->row_array();
    }

    public function ubahPengeluaranDana()
    {
        $data = [
            "tgl_keluar" => $this->input->post('tgl_keluar', true),
            "bidang" => $this->input->post('bidang', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pengeluaran_dana', $data);
    }

    public function hapusPengeluaranDana($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengeluaran_dana');
    }

    public function getLaporanPemasukan()
    {
        return $this->db->get('pemasukan_dana')->result_array();
    }
}

<?php
defined('BASEPATH') OR exit ('No Direct script access allowed');
class m_catat extends CI_Model{
    
    public function dataPemasukan() {
        $this->db->select('');
        $this->db->from('pemasukan');
        $this->db->order_by('tanggal', 'asc');
        $data = $this->db->get('');
        return $data->num_rows();
    }
    public function jumlahPemasukan() {
        $sql = "SELECT sum(jumlah) as jumlah FROM pemasukan";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
    public function jumlahPengeluaran() {
        $sql = "SELECT sum(jumlah) as jumlah FROM pengeluaran";
        $result = $this->db->query($sql);
        return $result->row()->jumlah;
    }
    public function dataPemasukanKeseluruhan($limit, $start) {
        //Cetak hasil table pemasukan
        $hasil = $this->db->get('pemasukan', $limit, $start);
        return $hasil;
    }
    public function dataPengeluaranKeseluruhan($limit, $start) {
        //Cetak hasil table pengeluaran
        $hasil = $this->db->get('pengeluaran', $limit, $start);
        return $hasil;
    }
}
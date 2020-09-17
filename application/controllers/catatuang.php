<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class catatuang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_catat');
    }

	public function index()
	{
        $data['datapemasukan'] = $this->m_catat->dataPemasukan();
        $data['jumlahpemasukan'] = $this->m_catat->jumlahPemasukan();
        $data['jumlahpengeluaran'] = $this->m_catat->jumlahPengeluaran();
        date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
        $timestamp = date('H:i:s');//Menampilkan Jam Sekarang
        $data['hariini'] = $timestamp;
        if($this->session->userdata('nama') == 'admin@localhost.com') {
            $this->load->view('catat/index', $data);
        }else {
            $this->load->view('catat/login');
        }

    }
    // Show Page//
    public function chart() {
        $this->load->view('catat/chart');
    }
    public function formpemasukan() {
        $this->load->view('catat/formpemasukan');
    }
    public function formpengeluaran() {
        $this->load->view('catat/formpengeluaran');
    }
    public function tablepemasukan() {
        // $data['keseluruhan'] = $this->m_catat->dataPemasukanKeseluruhan();
        //konfigurasi pagination
        $config['base_url'] = site_url('catatuang/table'); //site url
        $config['total_rows'] = $this->db->count_all('pemasukan'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada models m_catat.php 
        $data['keseluruhan'] = $this->m_catat->dataPemasukanKeseluruhan($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        $this->load->view('catat/tablepemasukan', $data);
    }
    public function tablepengeluaran() {
        // $data['keseluruhan'] = $this->m_catat->dataPemasukanKeseluruhan();
        //konfigurasi pagination
        $config['base_url'] = site_url('catatuang/table'); //site url
        $config['total_rows'] = $this->db->count_all('pengeluaran'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada models m_catat.php 
        $data['keseluruhan'] = $this->m_catat->dataPengeluaranKeseluruhan($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        $this->load->view('catat/tablepengeluaran', $data);
    }

    //Login process//
    public function prosesLogin() {
		$username = htmlspecialchars($this->input->post('email'), true);
		$password = htmlspecialchars($this->input->post('password'), true);

		if ($username == 'admin@localhost.com' && $password == 'admin123') {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url());
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert">username atau password salah!</div>');
			redirect();
		}
    }
    
    public function inputPemasukan() {
        $jumlah = htmlspecialchars($this->input->post('jumlah'), true);
        $asal = htmlspecialchars($this->input->post('asal'), true);
        $tanggal = htmlspecialchars($this->input->post('tanggal'), true);

        $data = [
            'jumlah' => $jumlah,
            'asal' => $asal,
            'tanggal' => $tanggal
        ];

        $this->db->insert('pemasukan', $data);
        $this->session->set_flashdata('sukses', 'Input pemasukan berhasil');
        redirect(base_url('catatuang/formpemasukan'));
    }
    public function inputPengeluaran() {
        $jumlah = htmlspecialchars($this->input->post('jumlah'), true);
        $asal = htmlspecialchars($this->input->post('asal'), true);
        $tanggal = htmlspecialchars($this->input->post('tanggal'), true);

        $data = [
            'jumlah' => $jumlah,
            'asal' => $asal,
            'tanggal' => $tanggal
        ];

        $this->db->insert('pengeluaran', $data);
        $this->session->set_flashdata('sukses', 'Input Pengeluaran berhasil');
        redirect(base_url('catatuang/formpengeluaran'));
    }

    public function data() {
        $data['jumlahpemasukan'] = $this->m_catat->jumlahPemasukan();
        $data['jumlahpengeluaran'] = $this->m_catat->jumlahPengeluaran();
        $datagabungan  = [$data['jumlahpemasukan'], $data['jumlahpengeluaran']];
        echo json_encode($datagabungan);
    }
    public function datapemasukan() {
        $data['jumlahpemasukan'] = $this->m_catat->jumlahPemasukan();
        echo json_encode($data['jumlahpemasukan']);
    }
    public function tampilJam() {
        date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
        echo $timestamp = date('H:i:s');//Menampilkan Jam Sekarang
    }
    public function logout() {
        session_destroy();
        $this->session->set_flashdata('logout', 'Terimakasih telah menggunakan CatatUang');
        redirect(base_url('catatuang/index'));
    }

}

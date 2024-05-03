<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index() {
        
        // Memuat template header
        $this->load->view('template/v_header');

        // Memuat konten utama (form pemesanan)
        $this->load->view('order/v_order');

        // Memuat template footer
        $this->load->view('template/v_footer');
    }

    public function saveOrder() {
        $nama = $this->input->post('nama');
        $menu = $this->input->post('menu');
		$no_telepon = $this->input->post('no_telepon');
		$banyak_pesanan = $this->input->post('banyak_pesanan');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'menu' => $menu,
			'no_telepon' => $no_telepon,
			'banyak_pesanan'  => $banyak_pesanan
        );

        if ($this->Order_model->saveOrder($data)) {
            redirect('home');
        } else {
            echo "Gagal menyimpan pesanan.";
        }
    }

}

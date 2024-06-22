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
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
            'required' => 'Nama harus di isi',
            'min_length' => 'Nama terlalu pendek']);
        $this->form_validation->set_rules('menu', 'Menu', 'required|min_length[3]', [
            'required' => 'Menu Harus di isi',
            'min_length' => 'Menu terlalu pendek']);
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|numeric', [
            'required' => 'Nomer Telepon Harus di isi',
            'numeric' => 'Nomer Telepon harus berupa angka']);
            
        $this->form_validation->set_rules('banyak_pesanan', 'Banyak Pesanan', 'required|numeric', [
            'required' => 'Banyak Pesanan Harus di isi',
            ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
            'required' => 'alamat Harus diisi',
            'min_length' => 'Alamat terlalu pendek']);

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the form with error messages
            $this->index();
        } else {
            // Validation passed, proceed with saving the order
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
}
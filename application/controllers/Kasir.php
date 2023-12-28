<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
    
    public function index() {
        $this->load->view('kasir/index');
    }

    public function proses_pembelian() {
        // Logika proses pembelian
        $total_harga = $this->input->post('total_harga');
        $uang_pembayaran = $this->input->post('uang_pembayaran');
        $kembalian = $uang_pembayaran - $total_harga;

        $data['kembalian'] = $kembalian;
        $this->load->view('kasir/hasil_pembelian', $data);
    }
}

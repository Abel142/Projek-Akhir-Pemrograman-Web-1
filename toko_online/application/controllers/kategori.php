<?php
class Kategori extends CI_Controller
{
    public function mobil_listrik()
    {
        $data['mobil_listrik'] = $this->model_kategori->data_mobil_listrik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mobil_listrik', $data);
        $this->load->view('templates/footer');
    }

    public function mobil_non_listrik()
    {
        $data['mobil_non_listrik'] = $this->model_kategori->data_mobil_non_listrik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mobil_non_listrik', $data);
        $this->load->view('templates/footer');
    }
}

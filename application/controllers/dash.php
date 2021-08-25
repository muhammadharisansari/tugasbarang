<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dash extends CI_Controller
{

    public function index()
    {
        $data['user']   = $this->login_model->nama($this->session->userdata['id'])->result();
        $data['barang'] = $this->login_model->get_barang('barang')->result();
        $this->load->view('header');
        $this->load->view('dash_view', $data);
    }

    public function tambah()
    {
        $data['kategori'] = $this->login_model->get_kat()->result();
        $this->load->view('header');
        $this->load->view('tambah_view', $data);
    }

    public function tambah_aksi()
    {
        $kategori   = $this->input->post('kategori');
        $nama       = $this->input->post('nama');
        $harga      = $this->input->post('harga');
        // var_dump($kategori, $nama, $harga);
        // die();

        $data = array(
            'kategori_id'   => $kategori,
            'nama_barang'   => $nama,
            'harga'         => $harga
        );

        $this->login_model->tambah($data, 'barang');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Berhasil menambah data !
      </div>');
        redirect('dash');
    }

    public function edit($id)
    {
        $data['kategori'] = $this->login_model->get_kat()->result();
        $data['barang'] = $this->login_model->get_id($id, 'barang')->result();
        $this->load->view('header');
        $this->load->view('edit_view', $data);
    }

    public function edit_aksi($id)
    {
        $kategori  = $this->input->post('kategori');
        $nama  = $this->input->post('nama');
        $harga = $this->input->post('harga');
        // var_dump($kategori, $nama, $harga);
        // die();

        $data = array(
            'kategori_id'   => $kategori,
            'nama_barang'   => $nama,
            'harga'         => $harga
        );

        $this->login_model->edit($id, $data, 'barang');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Berhasil mengedit data !
      </div>');
        redirect('dash');
    }


    public function hapus($id)
    {
        $this->login_model->hapus($id, 'barang');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Berhasil menghapus data !
      </div>');
        redirect('dash');
    }
}

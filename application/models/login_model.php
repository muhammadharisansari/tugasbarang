<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function cek($user, $pass)
    {
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        return $this->db->get('login');
    }

    public function nama($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('login');
    }

    public function get_barang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kategori', 'barang.kategori_id = kategori.id_kat');
        return $this->db->get();
    }

    public function get_kat()
    {
        return $this->db->get('kategori');
    }

    public function tambah($data)
    {
        $this->db->insert('barang', $data);
    }

    public function get_id($id)
    {
        $this->db->select('*');
        $this->db->where('barang.id', $id);
        $this->db->from('barang');
        $this->db->join('kategori', 'barang.kategori_id = kategori.id_kat');
        return $this->db->get();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('barang', $data);
    }
}

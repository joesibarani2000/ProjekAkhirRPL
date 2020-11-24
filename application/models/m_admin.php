<?php

class M_admin extends CI_Model
{

    public function getuser()
    {
        return $this->db->get('admin')->result_array();
    }

    public function tambahArtikel($penulis, $judul, $isi, $path)
    {
        $data = array(
            'artikel_penulis' => $penulis,
            'artikel_judul' => $judul,
            'artikel_isi' => $isi,
            'path_gambar' => $path
        );

        if ($this->db->insert('artikel', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function tampil_data()
    {
        return $this->db->get('artikel')->result_array();
    }

    public function tampil_dataID($id)
    {
        return $this->db->get_where('artikel', ['id' => $id])->row_array();
    }

    public function ubahArtikel($id, $penulis, $judul, $isi, $path)
    {
        $data = array(
            'artikel_penulis' => $penulis,
            'artikel_judul' => $judul,
            'artikel_isi' => $isi,
            'path_gambar' => $path
        );
        $this->db->where('id', $id);

        if ($this->db->update('artikel', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function ubahArtikelTanpaGambar($id, $penulis, $judul, $isi)
    {
        $data = array(
            'artikel_penulis' => $penulis,
            'artikel_judul' => $judul,
            'artikel_isi' => $isi
        );
        $this->db->where('id', $id);

        if ($this->db->update('artikel', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function hapusArtikel($id)
    {
        if ($this->db->delete('artikel', array('id' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    public function lihat_donasi(){
		return $this->db->get('donator')->result_array();
	}
}

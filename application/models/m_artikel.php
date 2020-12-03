<?php

class M_artikel extends CI_Model
{

	public function sign_up($data)
	{
        if ($this->db->insert('user', $data)) {
            return true;
        } else {
            return false;
        }
	}

	public function get_user()
	{
		return $this->db->get('user')->result_array();
	}
	
	public function tampil_data()
	{
		return $this->db->get('artikel')->result_array();
	}

	public function tampil_dataID($id)
	{
		return $this->db->get_where('artikel' , ['id' => $id])->row_array();
	}

	public function tambah_komentar($data)
	{
		$this->db->insert('komentar', $data);
	}

	public function tampil_komentar($id)
	{
		return $this->db->get_where('komentar' , ['idArtikel' => $id])->result_array();
	}

	public function hapus_komentar($id)
    {
        $this->db->delete('komentar' , ['idKomentar' => $id]);
    }

	public function cari_artikel()
	{
		$cari = $this->input->post('cari');
        $this->db->like('id' , $cari);
        $this->db->or_like('artikel_judul' , $cari);
        $this->db->or_like('artikel_penulis' , $cari);
        $this->db->or_like('artikel_waktu' , $cari);
        return $this->db->get('artikel')->result_array();
	}

	public function tambah_donasi($data){
		$this->db->insert('donator', $data);
	}
}

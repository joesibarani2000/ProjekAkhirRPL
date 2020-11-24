<?php

class adminpage extends CI_Controller
{
    public function index()
    {
        $post = $this->m_admin->getuser();
        session_start();
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) { //kalau sudah login langsung masuk ke index
            redirect('adminpage/login');
            exit;
        } else {
            if (isset($_POST['Submit'])) {
                $user = $this->input->post('username');
                $pass = $this->input->post('password');

                foreach ($post as $data) {
                    if ($user == $data['username'] && $pass == $data['password']) {
                        $_SESSION['username'] = $user;
                        $_SESSION['password'] = $pass;
                        redirect('adminpage/login');
                        exit;
                    } else {
                        $msg = "<span style='color:red'>Invalid Login</span>";
                    }
                }
            }
        }
        $this->load->view('admin/login');
    }

    public function login()
    {
        session_start();
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            $rs = $this->m_admin->tampil_data();
            foreach ($rs as $data) {
                $idi[] = $data['id'];
                $titlei[] = $data['artikel_judul'];
                $writeri[] = $data['artikel_penulis'];
                $contenti[] = $data['artikel_isi'];
                $timei[] = $data['artikel_waktu'];
                $pathi[] = $data['path_gambar'];
            }

            $data['judul'] = 'Home';
            $data['idi'] = $idi;
            $data['titlei'] = $titlei;
            $data['writeri'] = $writeri;
            $data['contenti'] = $contenti;
            $data['timei'] = $timei;
            $data['pathi'] = $pathi;
            $this->load->view('admin/adminMenu', $data);
        } else {
            redirect('adminpage/index');
        }
    }

    public function logout()
    {
        $this->load->view('admin/logout');
    }

    public function edit()
    {
        session_start();
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            $rs = $this->m_admin->tampil_data();
            foreach ($rs as $data) {
                $idi[] = $data['id'];
                $titlei[] = $data['artikel_judul'];
                $writeri[] = $data['artikel_penulis'];
                $contenti[] = $data['artikel_isi'];
                $timei[] = $data['artikel_waktu'];
                $pathi[] = $data['path_gambar'];
            }

            $data['judul'] = 'Home';
            $data['idi'] = $idi;
            $data['titlei'] = $titlei;
            $data['writeri'] = $writeri;
            $data['contenti'] = $contenti;
            $data['timei'] = $timei;
            $data['pathi'] = $pathi;
            $this->load->view('admin/edit', $data);
        } else {
            redirect('adminpage/index');
        }
    }

    public function donation(){
        session_start();
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            $rs = $this->m_admin->lihat_donasi();
            foreach($rs as $data){
                $name[] = $data['name'];
                $amount[] = $data['amount'];
            }
            $data['name'] = $name;
            $data['amount'] = $amount;
            $this->load->view('admin/donate', $data);
        } else {
            redirect('adminpage/index');
        }
    }

    public function cetak(){
        $rs = $this->m_admin->lihat_donasi();
        foreach($rs as $data){
            $name[] = $data['name'];
            $amount[] = $data['amount'];
        }
        $myfile = fopen("asset/donator.txt", "w") or die("Unable to open file!");
        $i = 0;
        foreach($name as $value){
            $txt = $name[$i]."\t\t\t\t"."|".$amount[$i]."\n";
            fwrite($myfile, $txt);
            $i++;
        }
        fclose($myfile);
        redirect("adminpage/donation");
    }

    public function create()
    {
        session_start();
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            $this->load->view('admin/create');
        } else {
            redirect('adminpage/index');
        }
    }

    public function prosesMenambahArtikel()
    {
        //load Helper for Form
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');

        $config['upload_path'] = './asset/img/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors()); //error details
            //isi ini jika error upload
        } else {
            $penulis = $this->input->post('penulis');
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $fn = $this->upload->data('file_name');
            $path = "img\\" . $fn;
            if (!$this->m_admin->tambahArtikel($penulis, $judul, $isi, $path)) {
                //isi ini jika error insert
            } else {
                redirect('adminpage/index');
            }
        }
    }

    public function data_ID($id)
    {
        $rs = $this->m_artikel->tampil_dataID($id);
        $data['artikel'] = $rs;
        $data['judul'] = $rs['artikel_judul'];
        $this->load->view('admin/edit', $data);
    }

    public function lihatArtikel($id){
        $rs = $this->m_artikel->tampil_dataID($id);
        $data['artikel'] = $rs;
        $data['judul'] = $rs['artikel_judul'];
        $data['komen']   = $this->m_artikel->tampil_komentar($id);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/artikel', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function prosesMengubahArtikel($id)
    {
        $penulis = $this->input->post('penulis');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        if (isset($_FILES['gambar'])) {
            //load Helper for Form
            $this->load->helper('url', 'form');
            $this->load->library('form_validation');

            $config['upload_path'] = './asset/img/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors()); //error details
                //isi ini jika error upload
            } else {
                $fn = $this->upload->data('file_name');
                $path = "img\\" . $fn;
            }
        }

        if (isset($path)) {
            if (!$this->m_admin->ubahArtikel($id, $penulis, $judul, $isi, $path)) {
                //isi ini jika error update
            } else {
                redirect('adminpage/index');
            }
        } else {
            if (!$this->m_admin->ubahArtikelTanpaGambar($id, $penulis, $judul, $isi)) {
                //isi ini jika error update
            } else {
                redirect('adminpage/index');
            }
        }
    }

    public function menghapusArtikel($id)
    {
        $rs = $this->m_artikel->tampil_dataID($id);
        $path = $rs['path_gambar'];

        if (!$this->m_admin->hapusArtikel($id)) {
            //isi ini jika error delete
        } else {
            $alamat = "asset\\" . $path;
            if (!unlink($alamat)) {
                //isi ini jika error saat menghapus file
            } else {
                redirect('adminpage/index');
            }
        }
    }

    public function tambahKomentar()
    {
        $idArtikel      = $this->input->post('idArtikel');
        $nama           = 'Admin';
        $komentar       = $this->input->post('komen');

        $data = array(
            'idArtikel' => $idArtikel,
            'nama'      => $nama,
            'isi'       => $komentar,
        );

        $this->m_artikel->tambah_komentar($data, 'komentar');
        redirect('adminpage/lihatArtikel/' . $idArtikel);
    }

    public function hapusKomentar($idArtikel, $id){
        $this->m_artikel->hapus_komentar($id);
        redirect('adminpage/lihatArtikel/' . $idArtikel);
    }
}

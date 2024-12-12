<?php

namespace App\Controllers;
use App\Models\DataKriteriaModel;
use App\Models\DataVendorModel;
use App\Models\DataBobotModel;
use App\Models\DataPreferensiModel;
use App\Models\DataNormalisasiModel;
use App\Models\DataPembobotanModel;
use App\Models\DataRankingModel;
use App\Models\DataVektorModel;
use App\Models\DataPenilaianModel;


class Home extends BaseController
{
    public function index()
    {
        echo View ('Admin_nav');
        echo View ('Admin_header');
        echo View ('main');
        echo View ('Admin_footer');
    }
    public function viewkriteria()
    {
        $model = new DataKriteriaModel(); // Memanggil model
        $data['datamb'] = $model->tampilkriteria(); 

    echo view('admin_header');
    echo view('admin_nav');
    echo view('view_data_kriteria', $data); // View untuk menampilkan data kriteria
    echo view('admin_footer');
    }
    public function viewvendor()
    {
        $model = new DataVendorModel(); // Memanggil model
        $data['datamb'] = $model->tampilvendor(); 

    echo view('admin_header');
    echo view('admin_nav');
    echo view('view_data_vendor', $data); // View untuk menampilkan data kriteria
    echo view('admin_footer');
    }
    public function viewbobot()
    {
        $model = new DataBobotModel(); // Memanggil model
        $data['datamb'] = $model->tampilbobot(); 

    echo view('admin_header');
    echo view('admin_nav');
    echo view('view_data_bobot', $data); // View untuk menampilkan data kriteria
    echo view('admin_footer');
    }

    public function viewpreferensi()
    {
        $model = new DataPreferensiModel(); // Memanggil model
        $data['datamb'] = $model->tampilpreferensi(); 

    echo view('admin_header');
    echo view('admin_nav');
    echo view('view_data_preferensi', $data); // View untuk menampilkan data kriteria
    echo view('admin_footer');
    }
    // public function viewnormalisasi()
    // {
    //     $model = new DataNormalisasiModel(); // Memanggil model
    //     $data['datamb'] = $model->tampilnormalisasi(); 

    // echo view('admin_header');
    // echo view('admin_nav');
    // echo view('view_data_normalisasi', $data); // View untuk menampilkan data kriteria
    // echo view('admin_footer');
    // }
    // public function viewpembobotan()
    // {
    //     $model = new DataPembobotanModel(); // Memanggil model
    //     $data['datamb'] = $model->tampilpembobotan(); 

    // echo view('admin_header');
    // echo view('admin_nav');
    // echo view('view_data_pembobotan', $data); // View untuk menampilkan data kriteria
    // echo view('admin_footer');
    // }
    public function viewranking()
    {
        $model = new DataRankingModel(); 
        $data['datamb'] = $model->tampilranking(); 

    echo view('admin_header');
    echo view('admin_nav');
    echo view('view_data_ranking', $data); 
    echo view('admin_footer');
    }
    public function viewpenilaian()
    {
        $model = new DataPenilaianModel(); 
        $data['datamb'] = $model->tampilpenilaian(); 

    echo view('admin_header');
    echo view('admin_nav');
    echo view('view_data_penilaian', $data); 
    echo view('admin_footer');
    }

    public function viewvektor()
    {
        $model = new DataVektorModel(); 
        $data['datamb'] = $model->tampilVektor(); 

            echo view('admin_header');
            echo view('admin_nav');
            echo view('view_data_vektor', $data); 
            echo view('admin_footer');   
         }    



    public function formTambahBobot()
{
    // Menampilkan form tambah data bobot
    echo view('admin_header');
    echo view('admin_nav');
    echo view('form_tambah_bobot'); // View untuk form tambah data
    echo view('admin_footer');
}

public function tambahBobot()
{
    $data = [
        'keterangan' => $this->request->getPost('keterangan'),
        'nilai_bobot' => $this->request->getPost('nilai_bobot'),
    ];

    // Simpan data ke dalam database
    $model = new DataBobotModel();
    if ($model->save($data)) {
        // Redirect ke halaman view bobot jika sukses
        return redirect()->to('/Home/viewbobot');
    } else {
        // Jika gagal, tampilkan pesan error
        return redirect()->back()->with('error', 'Gagal menambahkan data bobot');
    }
}

public function editBobot($id)
{
    // Menampilkan form edit bobot
    $model = new DataBobotModel();
    $bobot = $model->find($id); // Ambil data bobot berdasarkan ID

    if (!$bobot) {
        // Jika tidak ada data, redirect ke halaman daftar bobot
        return redirect()->to('/Home/viewbobot');
    }

    // Mengirim data bobot ke view
    $data['bobot'] = $bobot;

    echo view('admin_header');
    echo view('admin_nav');
    echo view('form_edit_bobot', $data); // View untuk form edit data
    echo view('admin_footer');
}


public function updateBobot($id)
{
    // Proses update data bobot
    $model = new DataBobotModel();

    // Validasi data
    if (!$this->validate([
        'keterangan' => 'required|min_length[3]|max_length[255]',
        'nilai_bobot' => 'required|numeric'
    ])) {
        // Jika validasi gagal, kembalikan ke form edit dengan error
        return redirect()->to('/Home/editBobot/' . $id)->withInput();
    }

    // Update data
    $model->update($id, [
        'keterangan' => $this->request->getPost('keterangan'),
        'nilai_bobot' => $this->request->getPost('nilai_bobot'),
    ]);

    // Redirect ke halaman daftar bobot
    return redirect()->to('/Home/viewbobot');
}


public function hapusBobot($id)
{
    $model = new DataBobotModel();
    $bobot = $model->find($id);

    if (!$bobot) {
        log_message('error', 'Data dengan ID ' . $id . ' tidak ditemukan untuk dihapus.');
        return redirect()->to('/Home/viewbobot')->with('error', 'Data tidak ditemukan.');
    }

    // Jika data ditemukan, lanjutkan penghapusan
    if ($model->delete($id)) {
        log_message('debug', 'Data dengan ID ' . $id . ' berhasil dihapus.');
    } else {
        log_message('error', 'Gagal menghapus data dengan ID ' . $id);
    }

    return redirect()->to('/Home/viewbobot')->with('success', 'Data berhasil dihapus.');
}
public function formTambahKriteria()
{
    // Menampilkan form tambah data kriteria
    echo view('admin_header');
    echo view('admin_nav');
    echo view('form_tambah_kriteria'); // View untuk form tambah data kriteria
    echo view('admin_footer');
}

public function tambahKriteria()
{
    $data = [
        'kode_kriteria' => $this->request->getPost('kode_kriteria'),
        'nama_kriteria' => $this->request->getPost('nama_kriteria'),
        'tipe' => $this->request->getPost('tipe'),
        'bobot' => $this->request->getPost('bobot'),
    ];

    // Simpan data ke dalam database
    $model = new DataKriteriaModel();
    if ($model->save($data)) {
        // Redirect ke halaman view kriteria jika sukses
        return redirect()->to('/Home/viewKriteria');
    } else {
        // Jika gagal, tampilkan pesan error
        return redirect()->back()->with('error', 'Gagal menambahkan data kriteria');
    }
}

public function editKriteria($id)
{
    // Menampilkan form edit kriteria
    $model = new DataKriteriaModel();
    $kriteria = $model->find($id); // Ambil data kriteria berdasarkan ID

    if (!$kriteria) {
        // Jika tidak ada data, redirect ke halaman daftar kriteria
        return redirect()->to('/Home/viewKriteria');
    }

    // Mengirim data kriteria ke view
    $data['kriteria'] = $kriteria;

    echo view('admin_header');
    echo view('admin_nav');
    echo view('form_edit_kriteria', $data); // View untuk form edit data kriteria
    echo view('admin_footer');
}

public function updateKriteria($id)
{
    // Proses update data kriteria
    $model = new DataKriteriaModel();

    // Validasi data
    if (!$this->validate([
        'nama_kriteria' => 'required|min_length[3]|max_length[255]',
        'tipe' => 'required|in_list[Benefit,Cost]',
        'bobot' => 'required|numeric'
    ])) {
        // Jika validasi gagal, kembalikan ke form edit dengan error
        return redirect()->to('/Home/editKriteria/' . $id)->withInput();
    }

    // Update data
    $model->update($id, [
        'nama_kriteria' => $this->request->getPost('nama_kriteria'),
        'tipe' => $this->request->getPost('tipe'),
        'bobot' => $this->request->getPost('bobot'),
    ]);

    // Redirect ke halaman daftar kriteria
    return redirect()->to('/Home/viewKriteria');
}

public function hapusKriteria($id)
{
    $model = new DataKriteriaModel();
    $kriteria = $model->find($id);

    if (!$kriteria) {
        log_message('error', 'Data dengan ID ' . $id . ' tidak ditemukan untuk dihapus.');
        return redirect()->to('/Home/viewKriteria')->with('error', 'Data tidak ditemukan.');
    }

    // Jika data ditemukan, lanjutkan penghapusan
    if ($model->delete($id)) {
        log_message('debug', 'Data dengan ID ' . $id . ' berhasil dihapus.');
    } else {
        log_message('error', 'Gagal menghapus data dengan ID ');
    }
}
public function formTambahVendor()
{
    // Menampilkan form tambah data vendor
    echo view('admin_header');
    echo view('admin_nav');
    echo view('form_tambah_vendor'); // View untuk form tambah data vendor
    echo view('admin_footer');
}

public function tambahVendor()
{
    $data = [
        'kode_vendor' => $this->request->getPost('kode_vendor'),
        'nama_vendor' => $this->request->getPost('nama_vendor'),
        'alamat' => $this->request->getPost('alamat'),
        'telepon' => $this->request->getPost('telepon'),
    ];

    // Simpan data ke dalam database
    $model = new DataVendorModel();
    if ($model->save($data)) {
        // Redirect ke halaman view vendor jika sukses
        return redirect()->to('/Home/viewVendor')->with('success', 'Data vendor berhasil ditambahkan.');
    } else {
        // Jika gagal, tampilkan pesan error
        return redirect()->back()->with('error', 'Gagal menambahkan data vendor');
    }
}

public function editVendor($id)
{
    // Menampilkan form edit vendor
    $model = new DataVendorModel();
    $vendor = $model->find($id); // Ambil data vendor berdasarkan ID

    if (!$vendor) {
        // Jika tidak ada data, redirect ke halaman daftar vendor
        return redirect()->to('/Home/viewVendor');
    }

    // Mengirim data vendor ke view
    $data['vendor'] = $vendor;

    echo view('admin_header');
    echo view('admin_nav');
    echo view('form_edit_vendor', $data); // View untuk form edit data vendor
    echo view('admin_footer');
}

public function updateVendor($id)
{
    // Proses update data vendor
    $model = new DataVendorModel();

    // Validasi data
    if (!$this->validate([
        'nama_vendor' => 'required|min_length[3]|max_length[255]',
        'alamat' => 'required',
        'telepon' => 'required|numeric',
    ])) {
        // Jika validasi gagal, kembalikan ke form edit dengan error
        return redirect()->to('/Home/editVendor/' . $id)->withInput();
    }

    // Update data
    $model->update($id, [
        'nama_vendor' => $this->request->getPost('nama_vendor'),
        'alamat' => $this->request->getPost('alamat'),
        'telepon' => $this->request->getPost('telepon'),
    ]);

    // Redirect ke halaman daftar vendor
    return redirect()->to('/Home/viewVendor')->with('success', 'Data vendor berhasil diperbarui.');
}

public function hapusVendor($id)
{
    $model = new DataVendorModel();
    $vendor = $model->find($id);

    if (!$vendor) {
        log_message('error', 'Data vendor dengan ID ' . $id . ' tidak ditemukan untuk dihapus.');
        return redirect()->to('/Home/viewVendor')->with('error', 'Data tidak ditemukan.');
    }

    // Jika data ditemukan, lanjutkan penghapusan
    if ($model->delete($id)) {
        log_message('debug', 'Data vendor dengan ID ' . $id . ' berhasil dihapus.');
    } else {
        log_message('error', 'Gagal menghapus data vendor dengan ID ' . $id);
    }

    return redirect()->to('/Home/viewVendor')->with('success', 'Data vendor berhasil dihapus.');
}


}
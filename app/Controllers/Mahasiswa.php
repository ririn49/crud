<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        $data['mahasiswa'] = $mahasiswaModel->findAll();
        // dd($data['mahasiswa']);
        return view('mahasiswa', $data);
    }

    public function create()
    {
        return view('tambah');
    }
    public function simpan()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'), 
            'umur' => $this->request->getPost('umur')
        ]; 
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->insert($data);
        // media penyimpanan notifikasi
        $session = session();
        $session->setFlashdata('message','Data mahasiswa berhasil ditambahkan');
        
        return redirect()->to('/mahasiswa');
    }

    public function edit($id){
        $mahasiswaModel = new MahasiswaModel();
        $data['mhs'] = $mahasiswaModel->find($id);
        return view('edit', $data);
    }
    public function update($id)
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->update($id,[
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'), 
            'umur' => $this->request->getPost('umur')
        ]);
        $session = session();
        $session->setFlashdata('message','Data mahasiswa berhasil diedit.');
        
        return redirect()->to('/mahasiswa');
    }
    public function delete ($id)
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->delete($id);

        $session = session();
        $session->setFlashdata('message','Data mahasiswa berhasil dihapus.');

        return redirect()->to('/mahasiswa');
    }
}

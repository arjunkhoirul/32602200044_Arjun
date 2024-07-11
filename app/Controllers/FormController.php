<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form_view');
    }

    public function submit()
    {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen_pengampu = $this->request->getPost('dosen_pengampu');
        $asisten_praktikum = $this->request->getPost('asisten_praktikum');

        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen_pengampu' => $dosen_pengampu,
            'asisten_praktikum' => $asisten_praktikum
        ];

        return view('result_view', $data);
    }
}
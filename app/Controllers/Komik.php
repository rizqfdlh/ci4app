<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikmdl;
    public function __construct()
    {
        $this->komikmdl = new KomikModel();
        helper(['form']);
    }

    public function index()
    {
        $data = [
            'title' => 'Comics',
            'komik' => $this->komikmdl->getKomik()
        ];
        return view('/komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikmdl->getKomik($slug)
        ];

        return view('/komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tamabah Data Komik',
        ];

        return view('/komik/create', $data);
    }

    public function save()
    {
        $session = session();
        $judul = $this->request->getVar('judul');
        $penulis = $this->request->getVar('penulis');
        $penerbit = $this->request->getVar('penerbit');
        $sampul = $this->request->getVar('sampul');
        if ($judul == '' || $penulis == '' || $penerbit == '' || $sampul == '') {
            $session->setFlashdata('salah', 'isi semua dong');
            return redirect()->to('/Komik/create');
        }

        $slug = url_title($judul, '-', true);

        $this->komikmdl->save([
            'judul' => $judul,
            'slug' => $slug,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'sampul' => $sampul
        ]);

        return redirect()->to('/komik');
    }

    public function delete($id)
    {
        $session = session();
        $this->komikmdl->delete($id);
        $session->setFlashdata('pesan', 'berhasil dihapus');
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Komik',
            'komik' => $this->komikmdl->getKomik($slug)
        ];

        return view('/komik/edit', $data);
    }

    public function update($id)
    {
        $judul = $this->request->getVar('judul');
        $penulis = $this->request->getVar('penulis');
        $penerbit = $this->request->getVar('penerbit');
        $sampul = $this->request->getVar('sampul');

        $slug = url_title($judul, '-', true);

        $session = session();
        $this->komikmdl->save([
            'id' => $id,
            'judul' => $judul,
            'slug' => $slug,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'sampul' => $sampul
        ]);
        $session->setFlashdata('pesan', 'berhasil diubah');
        return redirect()->to('/komik');
    }
}

<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        //echo 'Halo ini adalah controller Siswa';
		//echo "Halo ini adalah controller Siswa <a href='" . route_to('profil') . "'>Link ke routing profil</a>";
		return view('formBioskop');
    }
	
	public function save()
    {
        if (!$this->validate([
            'judul_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tgl_launc' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'synopys' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }
    }
	
	public function nama()
    {
        echo "ini adalah method nama di controller Siswa";
    }
	
	public function nama2($nama, $usia)
    {
        echo "Nama Saya adalah " . $nama . " , Usia " . $usia;
    }
	
	protected function testing()
    {
        echo "Ini adalah method testing yang merupakan private method";
    }
	
	public function profil()
    {
        echo 'Ini adalah method profil di controller Siswa';
    }
	
	public function dataSiswa($nama, $usia)
	{
		echo "Nama Siswa Adalah $nama, usia $usia";
	}
	
	public function siswaDataId($id)
	{
		echo "Ini adalah method dengan nama siswaDataId dengan ID $id";
	}
 
	public function siswaDataName($name)
	{
		echo "Ini adalah method dengan nama siswaDataName dengan Name $name";
	}
}
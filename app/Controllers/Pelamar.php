<?php

namespace App\Controllers;

use App\Models\Pelamar\pengalamankerjaModel;
use App\Models\Admin\pilganModel;
use App\Models\Pelamar\keluargaModel;
use Myth\Auth\Models\UserModel;


class Pelamar extends BaseController
{
	protected $pengalamankerjaModel;
	protected $pilganModel;
	protected $UserModel;
	protected $keluargaModel;
	public function __construct()
	{
		$this->pengalamankerjaModel = new pengalamankerjaModel;
		$this->pilganModel = new pilganModel();
		$this->UserModel = new UserModel();
		$this->keluargaModel = new keluargaModel();
	}


	public function index()
	{
		return view('pelamar/index');
	}
	public function updatedata()
	{
		return view('pelamar/add/profiladd');
	}
	public function datakeluargaview()
	{

		$keluarga = $this->keluargaModel->where(['userID' => user()->id])->findAll();
		$data = [
			'title' => 'Data Keluarga',
			'keluarga' => $keluarga
		];
		return view('pelamar/view/datakeluargaview', $data);
	}
	public function datakeluargaadd()
	{


		return view('pelamar/add/datakeluargaadd');
	}
	public function pendidikanformalview()
	{
		return view('pelamar/pendidikanformalview');
	}

	public function pendidikanformaladd()
	{
		return view('pelamar/add/pendidikanformaladd');
	}
	public function pendidikannonformaladd()
	{
		return view('pelamar/add/pendidikannonformaladd');
	}
	public function pengalamankerjaview()
	{
		$pengalamankerja = $this->pengalamankerjaModel->where(['userID' => user()->id])->findAll();
		$data = [
			'title' => 'Pengalaman Kerja',
			'pengalamankerja' => $pengalamankerja
		];

		return view('pelamar/view/pengalamankerjaview', $data);
	}
	public function pengalamankerjaadd()
	{
		return view('pelamar/add/pengalamankerjaadd');
	}
	public function pertanyaan()
	{
		$data = [
			'title' => 'Pertanyaan'
		];
		return view('pelamar/add/pertanyaanlain', $data);
	}



	public function savekeluarga()
	{
		$this->keluargaModel->save([
			'userId' => user()->id,
			'hubungan' => $this->request->getVar('hubungan'),
			'nama' => $this->request->getVar('nama'),
			'alamat' => $this->request->getVar('alamat'),
			'umur' => $this->request->getVar('umur'),
			'nohp' => $this->request->getVar('nohp'),
			'pendidikan' => $this->request->getVar('pendidikan'),
			'pekerjaan' => $this->request->getVar('pekerjaan'),
			'tanggungan' => $this->request->getVar('tanggungan'),
		]);
		return redirect()->to('Pelamar/datakeluargaview');
	}
	public function save()
	{
		$this->pengalamankerjaModel->save([
			'userId' => user()->id,
			'namaPerusahaan' => $this->request->getVar('namaperusahaan'),
			'jabatanAwal' => $this->request->getVar('jabatanawal'),
			'jabatanAkhir' => $this->request->getVar('jabatanakhir'),
			'mulaiBekerja' => $this->request->getVar('daritahun'),
			'akhirBekerja' => $this->request->getVar('sampaitahun'),
			'gaji' => $this->request->getVar('gaji'),
			'namaAtasan' => $this->request->getVar('namaatasan'),
			'alasanKeluar' => $this->request->getVar('alasankeluar'),
		]);
		return redirect()->to('Pelamar/pengalamankerjaview');
	}
}

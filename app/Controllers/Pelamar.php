<?php

namespace App\Controllers;

use App\Models\Pelamar\pengalamankerjaModel;
use App\Models\Admin\pilganModel;


class Pelamar extends BaseController
{
	protected $pengalamankerjaModel;

	public function __construct()
	{
		$this->pengalamankerjaModel = new pengalamankerjaModel;
		$this->pilganModel = new pilganModel();
	}


	public function index()
	{
		return view('pelamar/index');
	}
	public function pelamar()
	{
		return view('pelamar/add/profiladd');
	}
	public function datakeluargaview()
	{
		return view('pelamar/datakeluargaview');
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
		$pengalamankerja = $this->pengalamankerjaModel->findAll();
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



	public function save()
	{


		$page = $this->request->getVar('page');

		if ($page == 'pengalamankerjaadd') {

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
		if ($page == 'datakeluargaadd') {
		}
	}
}

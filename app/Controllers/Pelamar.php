<?php

namespace App\Controllers;

use App\Models\Pelamar\pengalamankerjaModel;
use App\Models\Admin\pilganModel;
use App\Models\Pelamar\keluargaModel;
use App\Models\Pelamar\jawabanModel;
use Myth\Auth\Models\UserModel;
use App\Models\Admin\pertanyaanessayModel;
use App\Models\Admin\jenistesModel;


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
		$this->jawabanModel = new jawabanModel();
		$this->pertanyaanessayModel = new pertanyaanessayModel();
		$this->jenistesModel = new jenistesModel;
	}


	public function index()
	{
		return view('pelamar/index');
	}
	public function updatedata()
	{
		$data = [
			'title' => 'Profil',

		];
		return view('pelamar/add/profiladd', $data);
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

		$data = [
			'title' => 'Data Keluarga',
		];
		return view('pelamar/add/datakeluargaadd', $data);
	}
	public function pendidikanformalview()
	{
		$data = [
			'title' => 'Pendidikan Formal',
		];
		return view('pelamar/pendidikanformalview', $data);
	}

	public function pendidikanformaladd()
	{
		$data = [
			'title' => 'Pendidikan Formal',
		];
		return view('pelamar/add/pendidikanformaladd', $data);
	}
	public function pendidikannonformaladd()
	{
		$data = [
			'title' => 'Pendidikan Non-Formal',
		];
		return view('pelamar/add/pendidikannonformaladd', $data);
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
		$data = [
			'title' => 'Pengalaman Kerja',
		];
		return view('pelamar/add/pengalamankerjaadd', $data);
	}
	public function pertanyaan()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'pertanyaan-profil'])->first();
		$pertanyaanessay = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();

		$data = [
			'title' => 'Pertanyaan',
			'pertanyaan' => $pertanyaanessay,

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
	public function savepertanyaanessay()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'pertanyaan-profil'])->first();
		$pertanyaanessay = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$i = 0;
		foreach ($pertanyaanessay as $k) {
			$this->jawabanModel->save([
				'userId' => user()->id,
				'jenisTes' => $jenistess['id'],
				'jawaban' => $this->request->getVar('jawaban' . $i),
				'kunci' => '-'
			]);
			$i++;
		}

		return redirect()->to('/');
	}
}

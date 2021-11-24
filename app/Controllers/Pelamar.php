<?php

namespace App\Controllers;

use App\Models\Pelamar\pengalamankerjaModel;
use App\Models\Admin\pilganModel;
use App\Models\Pelamar\keluargaModel;
use App\Models\Pelamar\jawabanModel;
use App\Models\Pelamar\pendidikanformalModel;
use Myth\Auth\Models\UserModel;
use App\Models\Admin\pertanyaanessayModel;
use App\Models\Admin\jenistesModel;



class Pelamar extends BaseController
{
	protected $pengalamankerjaModel;
	protected $pilganModel;
	protected $UserModel;
	protected $keluargaModel;
	protected $pendidikanformal;


	public function __construct()
	{
		$this->pengalamankerjaModel = new pengalamankerjaModel;
		$this->pilganModel = new pilganModel();
		$this->UserModel = new UserModel();
		$this->keluargaModel = new keluargaModel();
		$this->jawabanModel = new jawabanModel();
		$this->pertanyaanessayModel = new pertanyaanessayModel();
		$this->jenistesModel = new jenistesModel();
		$this->pendidikanformalModel = new pendidikanformalModel();
	}


	public function index()
	{
		$data = [
			'title' => 'Profil',

		];
		return view('pelamar/view/beranda', $data);
	}
	public function updatedata()
	{
		$data = [
			'title' => 'Profil',
			'validation' => \Config\Services::validation()
		];
		return view('pelamar/add/profiladd', $data);
	}
	public function datakeluargaview()
	{

		$keluarga = $this->keluargaModel->where(['userID' => user()->id])->findAll();
		$data = [
			'title' => 'Data Keluarga',
			'keluarga' => $keluarga,
			'validation' => \Config\Services::validation()
		];
		return view('pelamar/view/datakeluargaview', $data);
	}

	public function pendidikanformalview()
	{
		$pendidikanformal = $this->pendidikanformalModel->where(['userID' => user()->id])->findAll();
		$data = [
			'title' => 'Pendidikan Formal',
			'pendidikanformal' => $pendidikanformal,
			'validation' => \Config\Services::validation()
		];
		return view('pelamar/view/pendidikanformalview', $data);
	}

	public function pendidikannonformalview()
	{
		$data = [
			'title' => 'Pendidikan Non-Formal',
			'validation' => \Config\Services::validation(),

		];
		return view('pelamar/view/pendidikannonformalview ', $data);
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
			'pengalamankerja' => $pengalamankerja,
			'validation' => \Config\Services::validation()
		];

		return view('pelamar/view/pengalamankerjaview', $data);
	}
	public function pengalamankerjaadd()
	{

		$data = [
			'title' => 'Pengalaman Kerja',
			'validation' => \Config\Services::validation()
		];
		return view('pelamar/add/pengalamankerjaadd', $data);
	}







	//Save Data
	public function savekeluarga()
	{

		if (!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'tanggungan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggungan belum dipilih',
				]
			]
		])) {
			return redirect()->to(('/pelamar/datakeluargaview'))->withInput();
		}
		$this->keluargaModel->save([
			'userId' => user()->id,
			'hubungan' => $this->request->getVar('hubungan'),
			'nama' => $this->request->getVar('nama'),
			'alamat' => $this->request->getVar('alamat'),
			'nohp' => $this->request->getVar('nohp'),
			'pendidikan' => $this->request->getVar('pendidikan'),
			'pekerjaan' => $this->request->getVar('pekerjaan'),
			'tanggungan' => $this->request->getVar('tanggungan'),
		]);
		return redirect()->to('Pelamar/datakeluargaview');
	}
	public function savepengalamankerja()
	{
		if (!$this->validate([
			'namaperusahaan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama Perusahaan harus diisi'
				]
			],
			'jabatanawal' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jabatan awal harus diisi',
				]
			],
			'jabatanakhir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jabatan akhir harus diisi',
				]
			],
			'alasankeluar' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Alasan keluar harus diisi',
				]
			]
		])) {
			return redirect()->to(('/pelamar/pengalamankerjaview'))->withInput();
		}
		$mulai = date_create($this->request->getVar('daritahun'));
		$akhir = date_create($this->request->getVar('sampaitahun'));
		$selisih = $akhir->diff($mulai);
		$this->pengalamankerjaModel->save([
			'userId' => user()->id,
			'namaPerusahaan' => $this->request->getVar('namaperusahaan'),
			'jabatanAwal' => $this->request->getVar('jabatanawal'),
			'jabatanAkhir' => $this->request->getVar('jabatanakhir'),
			'mulaiBekerja' => $this->request->getVar('daritahun'),
			'akhirBekerja' => $this->request->getVar('sampaitahun'),
			'waktubekerja' => (int)$selisih->m,
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
	public function editprofil()
	{
		if (!$this->validate([
			'namalengkap' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi',

				]
			],
			'nikktp' => [
				'rules' => 'required|numeric',
				'errors' => [
					'required' => 'NIK Ktp harus diisi',
					'numeric' => 'NIK harus berupa angka'
				]
			],
			'jeniskelamin' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jenis kelamin harus diisi',
				]
			],
			'nohp' => [
				'rules' => 'required|numeric',
				'errors' => [
					'required' => 'No hp  harus diisi',
					'numeric' => 'Nomor hp harus berupa angka'
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'alamat harus diisi',
				]
			],
			'tanggallahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tangal Lahir harus diisi',
				]
			],
			'agama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Agama harus diisi',
				]
			],
			'darah' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Golongan darah harus diisi',
				]
			],
			'pendidikan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Pendidikan harus diisi',
				]
			],
			'status' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Status harus dipilih',
				]
			],
			'infokesehatan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Informasi kesehatan belum terisi',
				]
			],
			'avatar' => [
				'rules' => 'uploaded[avatar]|max_size[avatar,5120]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/gif,image/png]',
				'errors' => [
					'uploaded' => 'Pilih gambar sampul terlebih dahulu',
					'max_sampul' => 'Ukuran gambar terlalu besar, Gambar maximal 3 MB',
					'is_image' => 'Yang anda pilih bukan gambar ',
					'mime_in' => 'Yang anda pilih bukan gambar '
				]
			],
		])) {
			return redirect()->to(('/pelamar/updatedata'))->withInput();
		}
		$avatar = $this->request->getFile('avatar');
		$extensi = $avatar->guessExtension();
		$avatar->move('img/avatar', (user()->username . "." . $extensi));
		$namaavatar = $avatar->getName();

		$this->UserModel->save([
			'id' => user()->id,
			'name' => $this->request->getVar('namalengkap'),
			'nik' => $this->request->getVar('nikktp'),
			'jeniskelamin' => $this->request->getVar('jeniskelamin'),
			'alamat' => $this->request->getVar('alamat'),
			'nohp' => $this->request->getVar('nohp'),
			'tanggallahir' => $this->request->getVar('tanggallahir'),
			'agama' => $this->request->getVar('agama'),
			'golongandarah' => $this->request->getVar('darah'),
			'pendidikanterakhir' => $this->request->getVar('pendidikan'),
			'statusperkawinan' => $this->request->getVar('status'),
			'infokesehatan' => $this->request->getVar('infokesehatan'),
			'avatar' => $namaavatar,
		]);
		return redirect()->to('Pelamar/index');
	}
	public function savependidikanformal()
	{
		if (!$this->validate([
			'tingkatan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tingkatan Harus Dipilih'
				]
			],
			'namasekolah' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama Sekolah/Institut harus diisi',
				]
			],
			'kota' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Kota harus diisi',
				]
			],
			'jurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jurusan harus diisi',
				]
			],
			'daritahun' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal harus diisi',
				]
			],
			'sampaitahun' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal harus diisi',
				]
			],
			'ijazah' => [
				'rules' => 'uploaded[ijazah]|max_size[ijazah,5120]|is_image[ijazah]|mime_in[ijazah,image/jpg,image/jpeg,image/gif,image/png]',
				'errors' => [
					'uploaded' => 'Pilih gambar sampul terlebih dahulu',
					'max_sampul' => 'Ukuran gambar terlalu besar, Gambar maximal 3 MB',
					'is_image' => 'Yang anda pilih bukan gambar ',
					'mime_in' => 'Yang anda pilih bukan gambar '
				]
			],
		])) {
			return redirect()->to(('/pelamar/pendidikanformaladd'))->withInput();
		}

		$tingkatan = $this->request->getVar('tingkatan');
		$ijazah = $this->request->getFile('ijazah');
		$extensi = $ijazah->guessExtension();
		$ijazah->move('img/ijazah', (user()->username .  $tingkatan . "." . $extensi));
		$namaavatar = $ijazah->getName();

		$this->pendidikanformalModel->save([
			'userId' => user()->id,
			'tingkatan' => $this->request->getVar('tingkatan'),
			'namaInstitut' => $this->request->getVar('namasekolah'),
			'kota' => $this->request->getVar('kota'),
			'jurusan' => $this->request->getVar('jurusan'),
			'tahunMulai' => $this->request->getVar('daritahun'),
			'tahunAkhir' => $this->request->getVar('sampaitahun'),
			'keterangan' => $this->request->getVar('keterangan'),
			'sertifikat' =>  $namaavatar,
		]);
		return redirect()->to('Pelamar/pendidikanformalview');
	}
}

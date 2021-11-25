<?php

namespace App\Controllers;

use App\Models\Admin\jenistesModel;
use App\Models\Admin\pilganModel;
use App\Models\Admin\pertanyaanessayModel;
use App\Models\Admin\teskecocokanModel;
use App\Models\Admin\listlowonganModel;

class Admin extends BaseController
{
	protected $jenistesModel;
	protected $pertanyaanessayModel;
	protected $url;
	protected $listlowonganModel;

	public function __construct()
	{
		$this->jenistesModel = new jenistesModel;
		$this->pilganModel = new pilganModel();
		$this->pertanyaanessayModel = new pertanyaanessayModel();
		$this->teskecocokanModel = new teskecocokanModel();
		$this->listlowonganModel = new listlowonganModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Beranda'
		];
		return view('admin/index', $data);
	}

	public function listlowongan()
	{
		$listlowongan = $this->listlowonganModel->findAll();
		$data = [
			'title' => 'Daftar Lowongan Kerja',
			'listlowongan' => $listlowongan
		];
		return view('admin/view/listlowongan', $data);
	}
	public function hasildata()
	{
		$listlowongan = $this->listlowonganModel->findAll();
		$data = [
			'title' => 'Hasil Seleksi Data',
			'listlowongan' => $listlowongan
		];
		return view('admin/view/hasildata', $data);
	}
	public function hasiltes()
	{
		$listlowongan = $this->listlowonganModel->findAll();
		$data = [
			'title' => 'Hasil Seleksi Tes',
			'listlowongan' => $listlowongan
		];
		return view('admin/view/hasiltes', $data);
	}
	public function hasilakhir()
	{
		$listlowongan = $this->listlowonganModel->findAll();
		$data = [
			'title' => 'Hasil Seleksi Akhir',
			'listlowongan' => $listlowongan
		];
		return view('admin/view/hasilakhir', $data);
	}
	public function jenistesview()
	{

		$jenistess = $this->jenistesModel->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => 'Jenis Tes',
			'jenistes' => $jenistess,

		];
		return view('admin/view/jenistes', $data);
	}
	public function pilihanbergandaview($slug)
	{
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pilgan = $this->pilganModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$data = [
			'title' => 'Soal Pilihan Berganda',
			'jenistes' => $jenistess,
			'pilgan' => $pilgan,
			'slug' => $slug
		];
		return view('admin/view/pilihanberganda', $data);
	}
	public function tahap1aview()
	{
		$kecocokan = $this->teskecocokanModel->findAll();
		$data = [
			'title' => 'Tahap 1 Bagian A',
			'kecocokan' => $kecocokan
		];
		return view('admin/view/tahap1a', $data);
	}
	public function tahap1b()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'tahap-1-bagian-b'])->first();
		$soal = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$data = [
			'title' => 'Tahap 1 Bagian B',
			'jenistes' => $jenistess,
			'soal' => $soal
		];
		return view('admin/view/tahap1b', $data);
	}
	public function tahap1c()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'tahap-1-bagian-c'])->first();
		$soal = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$data = [
			'title' => 'Tahap 1 Bagian C',
			'jenistes' => $jenistess,
			'soal' => $soal
		];
		return view('admin/view/tahap1c', $data);
	}
	public function tahap1f()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'tahap-1-bagian-f'])->first();
		$soal = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$data = [
			'title' => 'Tahap 1 Bagian F',
			'jenistes' => $jenistess,
			'soal' => $soal
		];
		return view('admin/view/tahap1f', $data);
	}
	public function tahap1g()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'tahap-1-bagian-g'])->first();
		$soal = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$data = [
			'title' => 'Tahap 1 Bagian g',
			'jenistes' => $jenistess,
			'soal' => $soal
		];
		return view('admin/view/tahap1g', $data);
	}
	public function tahap2b()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'tahap-2-bagian-b'])->first();
		$soal = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$data = [
			'title' => 'Tahap 2 Bagian b',
			'jenistes' => $jenistess,
			'soal' => $soal
		];
		return view('admin/view/tahap2b', $data);
	}

	public function tahapessay($slug)
	{
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$soal = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->findAll();
		$data = [
			'title' => $jenistess['jenisTes'],
			'jenistes' => $jenistess,
			'soal' => $soal
		];
		return view('admin/view/tahapessay', $data);
	}
	public function pertanyaan()
	{

		$jenistess = $this->jenistesModel->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'jenistes' => $jenistess,
		];
		return view('admin/add/pertanyaanessay', $data);
	}

	public function jadwalinterview()
	{

		$data = [
			'title' => 'Jadwal Interview',

		];
		return view('admin/view/jadwalinterview', $data);
	}
	public function interview()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'pertanyaan-interview'])->first();
		$pertanyaanessay = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => 'Interview',
			'pertanyaanessay' => $pertanyaanessay,
		];
		return view('admin/view/interview', $data);
	}






	//Simpan
	public function save()
	{
		$slug = url_title($this->request->getVar('jenisTes'), '-', true);
		$this->jenistesModel->save([

			'jenisTes' => $this->request->getVar('jenisTes'),
			'keterangan' => $this->request->getVar('keterangan'),
			'slug' => $slug,
		]);
		return redirect()->to(previous_url());
	}
	public function savepilihanberganda()
	{
		$slug = $this->request->getVar('slug');
		$this->pilganModel->save([
			'jenisTes' => $this->request->getVar('jenistes'),
			'soal' => $this->request->getVar('soal'),
			'a' => $this->request->getVar('a'),
			'b' => $this->request->getVar('b'),
			'c' => $this->request->getVar('c'),
			'd' => $this->request->getVar('d'),
			'e' => $this->request->getVar('e'),
			'kunci' => $this->request->getVar('kunci'),
		]);
		return redirect()->to('Admin/pilihanbergandaview/' . $slug);
	}
	public function savepertanyaanessay()
	{

		$slug = $this->request->getVar('slug');
		$jenistesss = $this->request->getVar('jenistes');
		$jumlahsoal = $this->request->getVar('jumlahsoal');
		for ($i = 0; $i < $jumlahsoal; $i++) {
			if (is_null($this->request->getVar('kunci' . $i))) {
				$this->pertanyaanessayModel->save([
					'jenisTes' => $jenistesss,
					'pertanyaan' => $this->request->getVar('soal' . $i),
				]);
			} else {
				$this->pertanyaanessayModel->save([
					'jenisTes' => $jenistesss,
					'pertanyaan' => $this->request->getVar('soal' . $i),
					'kunci' => $this->request->getVar('kunci' . $i),
				]);
			}
		}
		return redirect()->to('Admin/tahapessay/' . $slug);
	}
	public function saveteskecocokan()
	{
		$jenistess = $this->jenistesModel->where(['slug' => 'tahap-1-bagian-a'])->first();
		$jumlahsoal = $this->request->getVar('jumlahsoal');
		for ($i = 0; $i < $jumlahsoal; $i++) {
			$a = $this->request->getVar('nilaia' . $i);
			$b = $this->request->getVar('nilaib' . $i);
			$nilai = "";
			if (strcmp($a, $b) == 0) {
				$nilai = "benar";
			} else {
				$nilai = "salah";
			}
			$this->teskecocokanModel->save([
				'jenisTes' => $jenistess['id'],
				'nilaiA' => $a,
				'nilaiB' => $b,
				'kunci' => $nilai

			]);
		}
		return redirect()->to('/admin/tahap1aview');
	}
}

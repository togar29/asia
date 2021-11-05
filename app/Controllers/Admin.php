<?php

namespace App\Controllers;

use App\Models\Admin\jenistesModel;
use App\Models\Admin\pilganModel;
use App\Models\Admin\pertanyaanessayModel;
use App\Models\Admin\teskecocokanModel;

class Admin extends BaseController
{
	protected $jenistesModel;
	protected $pertanyaanessayModel;
	protected $url;

	public function __construct()
	{
		$this->jenistesModel = new jenistesModel;
		$this->pilganModel = new pilganModel();
		$this->pertanyaanessayModel = new pertanyaanessayModel();
		$this->teskecocokanModel = new teskecocokanModel();
		$this->url = current_url();
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
		$data = [
			'title' => 'Daftar Lowongan Kerja',
		];
		return view('admin/add/listlowongan', $data);
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
			'title' => 'Tambah Soal Pilihan Berganda',
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
			'title' => 'Tahap 1 A',
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
	public function pertanyaan()
	{

		$jenistess = $this->jenistesModel->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'jenistes' => $jenistess,
		];
		return view('admin/add/pertanyaanessay', $data);
	}


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
		return redirect()->to('Admin/pilihanberganda');
	}
	public function savepertanyaanessay($a)
	{
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
		return redirect()->to('Admin/' . $a);
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

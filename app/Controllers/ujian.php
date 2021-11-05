<?php

namespace App\Controllers;

use App\Models\Admin\pilganModel;
use App\Models\Admin\jenistesModel;
use App\Models\Pelamar\jawabanModel;
use App\Models\Admin\teskecocokanModel;
use App\Models\Admin\pertanyaanessayModel;
use App\Models\ModelCustom;



class ujian extends BaseController
{
	public function __construct()
	{
		$this->pilganModel = new pilganModel();
		$this->jenistesModel = new jenistesModel();
		$this->jawabanModel = new jawabanModel();
		$this->teskecocokanModel = new teskecocokanModel();
		$this->pertanyaanessayModel = new pertanyaanessayModel();
	}

	public function tahap1a()
	{
		$teskecocokan = $this->teskecocokanModel->findAll();
		$data = [
			'title' => "Tahap 1 Bagian A",
			'teskecocokan' => $teskecocokan
		];
		return view('ujian/add/tahap1a', $data);
	}
	public function tahap1b()
	{

		$teskecocokan = $this->teskecocokanModel->findAll();
		$data = [
			'title' => "Tahap 1 Bagian A",
			'teskecocokan' => $teskecocokan
		];
		return view('ujian/add/tahap1essay', $data);
	}
	public function tespenalaranlogis()
	{
		$pilgantahapi = $this->pilganModel->where(['jenisTes' => 1])->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'pilgantahapi' => $pilgantahapi
		];
		return view('ujian/add/pilgantahapi', $data);
	}
	public function tespenalarananalitis()
	{

		$pilgantahapi = $this->pilganModel->where(['jenisTes' => 2])->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'pilgantahapi' => $pilgantahapi
		];
		return view('ujian/add/pilgantahapii', $data);
	}
	public function tesessay($slug)
	{
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pertanyaanessay = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'pertanyaanessay' => $pertanyaanessay,
		];
		if (strcmp($slug, 'tahap-1-bagian-b') == 0) {
			return view('ujian/add/tahap1b', $data);
		}
		if (strcmp($slug, 'tahap-1-bagian-c') == 0) {
			return view('ujian/add/tahap1c', $data);
		}
		if (strcmp($slug, 'tahap-1-bagian-f') == 0) {
			return view('ujian/add/tahap1f', $data);
		}
		if (strcmp($slug, 'tahap-1-bagian-g') == 0) {
			return view('ujian/add/tahap1g', $data);
		}
	}




	//saveeeeee
	public function savepilgani($slug)
	{
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();

		$pertanyaan = $this->pilganModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();
		$i = 0;
		foreach ($pertanyaan as $k) {
			$jawaban = $this->request->getVar('jawaban' . $i);
			$kunci = $k['kunci'];
			$nilai = 0;
			if (strcmp($jawaban, $kunci) == 0) {
				$nilai = 1;
			}
			$this->jawabanModel->save([
				'userId' => user()->id,
				'jenisTes' => $jenistess['id'],
				'jawaban' => $jawaban,
				'kunci' => $kunci,
				'nilai' => $nilai
			]);
			$i++;
		}

		return redirect()->to('/');
	}
	public function savebagian1a()
	{
		$jenistess = $this->jenistesModel->where(['slug' => "tahap-1-bagian-a"])->first();
		$pertanyaan = $this->teskecocokanModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();

		$i = 0;
		foreach ($pertanyaan as $k) {

			$jawaban = $this->request->getVar('jawaban' . $i);
			if (strcmp($jawaban, "benar") != 0) {
				$jawaban = "salah";
			}
			$kunci = $k['kunci'];
			$nilai = 0;
			if (strcmp($jawaban, $kunci) == 0) {
				$nilai = 1;
			}
			$this->jawabanModel->save([
				'userId' => user()->id,
				'jenisTes' => $jenistess['id'],
				'jawaban' => $jawaban,
				'kunci' => $kunci,
				'nilai' => $nilai
			]);
			$i++;
		}
	}
	public function savebagian1b()
	{
		$slug = $this->request->getVar('slug');
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pertanyaan = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();

		$i = 0;
		foreach ($pertanyaan as $k) {

			$jawaban = $this->request->getVar('jawaban' . $i);
			$kunci = $this->request->getVar('kunci' . $i);
			$nilai = 0;
			if (strcmp(url_title($jawaban, '', true), url_title($kunci, '', true)) == 0) {
				$nilai = 1;
			} else {
				$nilai = 0;
			}
			$this->jawabanModel->save([
				'userId' => user()->id,
				'jenisTes' => $jenistess['id'],
				'jawaban' => $jawaban,
				'kunci' => $kunci,
				'nilai' => $nilai
			]);
			$i++;
		}
	}
	public function savebagian1c()
	{
		$slug = $this->request->getVar('slug');
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pertanyaan = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();

		$i = 0;
		foreach ($pertanyaan as $k) {

			$jawaban = terbilang($this->request->getVar('jawaban' . $i));
			$kunci = $k['pertanyaan'];
			$nilai = 0;
			if (strcmp(url_title($jawaban, '', true), url_title($kunci, '', true)) == 0) {
				$nilai = 1;
			} else {
				$nilai = 0;
			}
			$this->jawabanModel->save([
				'userId' => user()->id,
				'jenisTes' => $jenistess['id'],
				'jawaban' => $jawaban,
				'kunci' => $kunci,
				'nilai' => $nilai
			]);
			$i++;
		}
	}
	public function savebagian1f()
	{
		$slug = $this->request->getVar('slug');
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pertanyaan = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();

		$i = 0;
		foreach ($pertanyaan as $k) {

			$jawaban = $this->request->getVar('jawaban' . $i);
			$kunci = $k['kunci'];
			$nilai = 0;
			if (strcmp($jawaban, $kunci) == 0) {
				$nilai = 1;
			} else {
				$nilai = 0;
			}
			$this->jawabanModel->save([
				'userId' => user()->id,
				'jenisTes' => $jenistess['id'],
				'jawaban' => $jawaban,
				'kunci' => $kunci,
				'nilai' => $nilai
			]);
			$i++;
		}
	}
}

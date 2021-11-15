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
	public function pilgan($slug)
	{
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pilgantahapi = $this->pilganModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();
		$data = [
			'title' => $jenistess['jenisTes'],
			'pilgantahapi' => $pilgantahapi,
			'jenistes' => $jenistess,
			'slug' => $slug
		];
		return view('ujian/add/pilgan', $data);
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
		if (strcmp($slug, 'tahap-2-bagian-b') == 0) {
			return view('ujian/add/tahap2b', $data);
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
		if (strcmp($slug, "tes-penalaran-logis") == 0) {
			return redirect()->to('/ujian/tespenalarananalitis');
		} else if (strcmp($slug, "tes-penalaran-analisis") == 0) {
			return redirect()->to('/ujian/tesessay/tahap-1-bagian-f');
		}
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
		return redirect()->to('/ujian/tesessay/tahap-1-bagian-b');
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
		return redirect()->to('/ujian/tesessay/tahap-1-bagian-c');
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
		return redirect()->to('/ujian/tespenalaranlogis');
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
		return redirect()->to('/ujian/tesessay/tahap-1-bagian-g');
	}
	public function savebagian2b()
	{
		$slug = $this->request->getVar('slug');
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pertanyaan = $this->pertanyaanessayModel->where(['jenisTes' => $jenistess['id']])->orderBy('id', 'asc')->findAll();

		$i = 0;
		foreach ($pertanyaan as $k) {

			$jawaban = $this->request->getVar('jawaban' . $i);
			$kunci = $this->request->getVar('kunci' . $i);
			$this->jawabanModel->save([
				'userId' => user()->id,
				'jenisTes' => $jenistess['id'],
				'jawaban' => $jawaban,
				'kunci' => $kunci,
			]);
			$i++;
		}
	}
}

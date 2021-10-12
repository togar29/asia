<?php

namespace App\Controllers;

use App\Models\Admin\pilganModel;
use App\Models\Admin\jenistesModel;
use App\Models\Pelamar\jawabanModel;
use App\Models\Admin\teskecocokanModel;


class ujian extends BaseController
{
	public function __construct()
	{
		$this->pilganModel = new pilganModel();
		$this->jenistesModel = new jenistesModel();
		$this->jawabanModel = new jawabanModel();
		$this->teskecocokanModel = new teskecocokanModel();
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
	public function tespenalaranlogis()
	{
		$pilgantahapi = $this->pilganModel->where(['jenisTes' => 1])->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'pilgantahapi' => $pilgantahapi
		];
		return view('ujian/add/pilgantahapi', $data);
	}
	public function tespenalarananalitis()
	{
		$pilgantahapi = $this->pilganModel->where(['jenisTes' => 2])->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'pilgantahapi' => $pilgantahapi
		];
		return view('ujian/add/pilgantahapii', $data);
	}

	public function savepilgani($slug)
	{
		$jenistess = $this->jenistesModel->where(['slug' => $slug])->first();
		$pertanyaan = $this->pilganModel->where(['jenisTes' => $jenistess['id']])->findAll();
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
		$pertanyaan = $this->teskecocokanModel->where(['jenisTes' => $jenistess['id']])->findAll();

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
}

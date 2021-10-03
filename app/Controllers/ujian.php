<?php

namespace App\Controllers;

use App\Models\Admin\pilganModel;
use App\Models\Admin\jenistesModel;

class ujian extends BaseController
{
	public function __construct()
	{
		$this->pilganModel = new pilganModel();
	}

	public function index()
	{
		return view('ujian/add/bagiana');
	}
	public function pilihanbergandatahapi()
	{
		$pilgantahapi = $this->pilganModel->where(['jenisTes' => 1])->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'pilgantahapi' => $pilgantahapi
		];
		return view('ujian/add/pilgantahapi', $data);
	}
	public function pilihanbergandatahapii()
	{
		$pilgantahapi = $this->pilganModel->where(['jenisTes' => 2])->findAll();
		$data = [
			'title' => 'Pertanyaan',
			'pilgantahapi' => $pilgantahapi
		];
		return view('ujian/add/pilgantahapii', $data);
	}
}

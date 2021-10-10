<?php

namespace App\Controllers;

use App\Models\Admin\jenistesModel;
use App\Models\Admin\pilganModel;
use App\Models\Admin\pertanyaanessayModel;

class Admin extends BaseController
{
	protected $jenistesModel;
	protected $pertanyaanessayModel;

	public function __construct()
	{
		$this->jenistesModel = new jenistesModel;
		$this->pilganModel = new pilganModel();
		$this->pertanyaanessayModel = new pertanyaanessayModel();
	}


	public function jenistes()
	{
		return view('admin/add/jenistes');
	}
	public function jenistesview()
	{
		$jenistess = $this->jenistesModel->findAll();
		$data = [
			'title' => 'Jenis Tes',
			'jenistes' => $jenistess,
		];
		return view('admin/view/jenistes', $data);
	}
	public function pilihanberganda()
	{
		$jenistess = $this->jenistesModel->findAll();
		$data = [
			'title' => 'Jenis Tes',
			'jenistes' => $jenistess,
		];
		return view('admin/add/pilihanberganda', $data);
	}
	public function tahapia()
	{
		$jenistess = $this->jenistesModel->findAll();
		$data = [
			'title' => 'Jenis Tes',
			'jenistes' => $jenistess,
		];
		return view('admin/add/tahap_i_a', $data);
	}
	public function pertanyaanprofil()
	{
		$jenistess = $this->jenistesModel->findAll();
		$data = [
			'title' => 'pertanyaan Profil',
			'jenistes' => $jenistess,
		];
		return view('admin/add/pertanyaanessay', $data);
	}


	public function save()
	{


		$page = $this->request->getVar('page');
		$slug = url_title($this->request->getVar('jenisTes'), '-', true);
		$this->jenistesModel->save([
			'jenisTes' => $this->request->getVar('jenisTes'),
			'keterangan' => $this->request->getVar('keterangan'),
			'slug' => $slug,

		]);
		return redirect()->to('Admin/jenistesview');
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
		$this->pertanyaanessayModel->save([
			'jenisTes' => $this->request->getVar('jenistes'),
			'pertanyaan' => $this->request->getVar('soal'),
		]);
		return redirect()->to('Admin/' . $a);
	}
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Beranda'
		];
		return view('pelamar/index', $data);
	}
	public function pelamar()
	{
		$data = [
			'title' => 'Profil'
		];
		return view('pelamar/profiladd', $data);
	}
	public function datakeluargaview()
	{
		$data = [
			'title' => 'Data Keluarga'
		];
		return view('pelamar/datakeluargaview', $data);
	}
	public function datakeluargaadd()
	{
		$data = [
			'title' => 'Formulir Tambah Data Keluarga'
		];
		return view('pelamar/datakeluargaadd', $data);
	}
	public function pendidikanformalview()
	{
		$data = [
			'title' => 'Pendidikan Formal'
		];
		return view('pelamar/pendidikanformalview', $data);
	}

	public function pendidikanformaladd()
	{
		$data = [
			'title' => 'Formulir Tambah Data Pendidikan Formal'
		];
		return view('pelamar/pendidikanformaladd', $data);
	}
	public function pendidikannonformaladd()
	{
		$data = [
			'title' => 'Formulir Tambah Pendidikan Informal'
		];
		return view('pelamar/pendidikannonformaladd', $data);
	}
	public function pengalamankerjaview()
	{
		$data = [
			'title' => 'Pengalaman Kerja'
		];
		return view('pelamar/pengalamankerjaview', $data);
	}
	public function pengalamankerjaadd()
	{
		$data = [
			'title' => 'Formulir Tambah Pengalaman Pekerjaan'
		];
		return view('pelamar/pengalamankerjaadd', $data);
	}
}

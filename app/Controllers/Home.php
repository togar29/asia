<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pelamar/index');
	}
	public function user()
	{
		return view('user/index');
	}
	public function pelamar()
	{
		return view('pelamar/profiladd');
	}
	public function datakeluargaview()
	{
		return view('pelamar/datakeluargaview');
	}
	public function datakeluargaadd()
	{
		return view('pelamar/datakeluargaadd');
	}
	public function pendidikanformalview()
	{
		return view('pelamar/pendidikanformalview');
	}

	public function pendidikanformaladd()
	{
		return view('pelamar/pendidikanformaladd');
	}
	public function pendidikannonformaladd()
	{
		return view('pelamar/pendidikannonformaladd');
	}
	public function pengalamankerjaview()
	{
		return view('pelamar/pengalamankerjaview');
	}
	public function pengalamankerjaadd()
	{
		return view('pelamar/pengalamankerjaadd');
	}
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		echo view('/template/header.php');
		echo view('/template/body.php');
		echo view('/template/footer.php');
	}

	public function toko()
	{
		$tokoModel = model('App\Models\TokoModel');
		helper('date');
		$data = [
			"judul_halaman" => "Surya Sport",
			"halaman_aktif" => "home"

		];
		$dataToko['dataToko'] = $tokoModel->findAll();
		//dd($dataToko);
		echo view('/marketplace/template/header.php', $data);
		echo view('/marketplace/template/beranda.php',$dataToko);
		echo view('/marketplace/template/footer.php');
	}
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Baju extends Seeder
{
	public function run()
	{
		$data = [
			'baju_tittle' => 'baju bagus',
			'baju_description'    => 'bagus',
			'baju_stok' => '50',
			'baju_harga'  => '100',
			'baju_gambar' => 'avc'
		];

	//Simple Queries
	//$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

	// Using Query Builder
	$this->db->table('baju')->insert($data);
	}
}

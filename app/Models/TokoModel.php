<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'baju';
	protected $primaryKey           = 'baju_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ["baju_title","baju_description","baju_stok","baju_harga","baju_gambar"];
	
}

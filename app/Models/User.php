<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table                = 'user';
	protected $primaryKey           = 'id';
	protected $allowedFields        = [
		'username', 'password', 'avatar', 'salt', 'created_by', 'created_date', 'updated_date', 'updated_by'
	];
	protected $returnType = 'App\Entities\User';
	protected $useTimeStamps = false;
}

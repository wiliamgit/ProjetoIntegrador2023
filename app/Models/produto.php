<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
	public $timestamps = false;

	protected $fillable = [
		'nome_cd',
		'codigo_barras',
		'foto_cd',
		'quantidade',
		'tipo',
		'data',
		'descricao_cd',
		
	];

}

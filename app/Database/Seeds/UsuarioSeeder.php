<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
	public function run()
	{
		$usuarioModel = new \App\Models\UsuarioModel;

		$usuario = [
			'nome' => 'João Gomes de Sousa',
			'email' => 'admin@admin.com',
			'cpf' => '894.317.860-36',
			'telefone' => '(21) 99999-9999',
		];

		$usuarioModel->protect(false)->insert($usuario);

		$usuario = [
			'nome' => 'Fulano de tal',
			'email' => 'fulano@email.com',
			'cpf' => '703.953.050-39',
			'telefone' => '(21) 98887-6781',
		];

		$usuarioModel->protect(false)->insert($usuario);


		dd($usuarioModel->errors()); 

	}
}

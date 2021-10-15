<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
	protected $table = 'usuarios';
	protected $returnType = 'App\Entities\Usuario';
	protected $allowedFields = ['nome', 'email', 'telefone'];	
	protected $useSoftDeletes = true;
	protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';




	protected $validationRules    = [
        'nome' => 'required|min_length[4]|max_length[120]',
        'email' => 'required|valid_email|is_unique[usuarios.email]',
		'cpf' => 'required|exact_length[14]|is_unique[usuarios.cpf]',
        'password' => 'required|min_length[6]',
        'password_confirmation' => 'required_with[password]|matches[password]'
    ];

    protected $validationMessages = [
        'email'        => [
            'is_unique' => 'Desculpe, esse e-mail já existe.',
			'required' => 'Esse campo é obrigatório',
		],
		'cpf'        => [
            'is_unique' => 'Desculpe, esse CPF já existe.',
			'required' => 'Esse campo é obrigatório',
		],
		'nome'        => [
			'required' => 'Esse campo é obrigatório',
		],
		'password'        => [
			'required' => 'Esse campo é obrigatório',
			'min_lenght' => 'A senha deve ter no mínimo 6 caracteres'
		],
		'password'        => [
			'required_with' => 'Esse campo é obrigatório',
			'matches' => 'A senha de confirmação deve ser igual a senha'
		],
    ];


	// @uso Controller usuários no método procurar com o autocomplete
	// @param string $term
	// @return array usuarios


	public function procurar($term) {

		if($term === null) {

			return [];
		}

		return $this->select('id, nome')
		->like('nome', $term)
		->get()
		->getResult();
	}

	


}

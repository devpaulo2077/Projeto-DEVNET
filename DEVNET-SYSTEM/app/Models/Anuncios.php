<?php

namespace App\Models;

use CodeIgniter\Model;

class Anuncios extends Model
{
    protected $table            = 'anuncio';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_usuarios', 'nome_criador','titulo', 'tipo', 'descricao', 'tecnologias', 'contatoWhats'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function buscarAnuncios()
    {
        $resultado = $this->findAll();
        return $resultado;
    }

    public function cadastrarDB($titulo, $tipo, $descricao, $tecnologias, $contatoWhats)
    {
        $dados = [
            'id_usuarios' => session()->get('id'),
            'nome_criador' => session()->get('nome'),
            'titulo' => $titulo,
            'tipo' => $tipo,
            'descricao' => $descricao,
            'tecnologias' => $tecnologias,
            'contatoWhats' => $contatoWhats
        ];
        if($this->insert($dados)){
            return true;
        } else {
            return false;
        }
    }

    public function apagarDB($id)
    {
        $this->delete($id);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    use HasFactory;

    protected $table = 'assinaturas';

    protected $fillable = [
        'colaborador',
        'funcao',
        'telefone',
        'celular',
        'empresa',
    ];

    public function Assinatura() {
        return $this->belongsTo(ImagemFundo::class, 'empresa', 'empresa');
    }
}

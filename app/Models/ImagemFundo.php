<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagemFundo extends Model
{
    use HasFactory;

    protected $table = 'imagemfundo';

    protected $fillable = ['empresa', 'imagem'];

    public function imagemFundo() {
        return $this->hasOne(Assinatura::class, 'empresa', 'empresa');
    }
}

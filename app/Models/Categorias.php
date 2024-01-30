<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    public function type($type = null)
    {
        $types = [
            1 => 'Eletrônicos',
            '2' => 'Saque',
            '3' => 'Transferência',
        ];

        if(!$type)
            return $types;
        
        return $types[$type];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    public function pesanan_detail()
    {
        return $this->hasMany('App\Models\PesananDetail', 'design_id', 'id');
    }
}

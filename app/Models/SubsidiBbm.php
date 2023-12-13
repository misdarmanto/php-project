<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubsidiBbm extends Model
{
    protected $fillable = ['tanggal', 'saldo'];

    protected $casts = [
        'saldo' => 'double',
    ];
}

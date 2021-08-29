<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;
    protected $table = 'jasa';

    public function mitra(){
        return $this->belongsTo('App\Models\User', 'mitra_id', 'id');
    }
}

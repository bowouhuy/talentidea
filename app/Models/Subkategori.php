<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    use HasFactory;
    protected $table = 'subkategori';

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori', 'kategori_id', 'id');
    }
}

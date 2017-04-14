<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    public function berita()
    {
    	return $this->hasMany(Berita::class, 'kategori_id', 'id');
    }
}

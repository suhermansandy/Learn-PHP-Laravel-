<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public function kategoriBerita()
    {
    	return $this->belongsTo(KategoriBerita::class, 'kategori_id');
    }
    
    public function user()
    {
    	return $this->belongsTo(User::class, 'created_by');
    }
}

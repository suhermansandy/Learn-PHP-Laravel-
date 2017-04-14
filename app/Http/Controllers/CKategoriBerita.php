<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;
use App\Http\Requests;

class CKategoriBerita extends Controller
{
    public function store(Request $request)
    {
    	$kategoriBerita = KategoriBerita();

    	$user->nama_kategori = $request->get('nama_kategori');

    	if(!$kategoriBerita)
    	{
    		return 
    		[
    			'status_code' => 500,
    			'message' => 'kategori BeritaTidak Boleh Kosong'
    		];
    	}

    	$kategoriBerita->save();
    	return 
    	[
    		'status_code' => 200,
    		'message' => 'kategori Berita Berhasil di Upload',
            'value' => $kategoriBerita
    	];
    }

    public function index()
    {
        $kategoriBerita = KategoriBerita::all();
        return $kategoriBerita;
    }
}

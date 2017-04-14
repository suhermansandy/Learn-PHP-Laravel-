<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Http\Requests;

class CBerita extends Controller
{
    public function store(Request $request)
    {
    	$berita = New Berita();

    	$berita->judul = $request->get('judul');
        $berita->slud = 'slug';
    	$berita->sipnosis = $request->get('sinopsis');
    	$berita->deskripsi = $request->get('deskripsi');
    	$berita->published = $request->get('published');
    	$berita->created_by = $request->get('created_by');
    	$berita->kategori_id = $request->get('kategori_id');
    	$berita->publish_at = $request->get('publish_at');
    	$berita->tags = $request->get('tags');

    	if(!$berita)
    	{
    		return 
    		[
    			'status_code' => 500,
    			'message' => 'Berita Tidak Boleh Kosong'
    		];
    	}

    	$berita->save();
    	return 
    	[
    		'status_code' => 200,
    		'message' => 'Berita Berhasil di Upload',
            'value' => $berita
    	];
    }

    public function index()
    {
        $berita = Berita::all();
        return $berita;
    }

    // public function update()
    // {

    // }

    // public function destroy()
    // {

    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
   Public function index(){
    	$bukus = Buku::all();
    	return view('book.show', ['book' => $bukus]);
    }

    public function tambah(){
    	return view('book.tambah');
    }

    public function insert(Request $request){
		$book = new Buku;
		$book->id_buku = $request->id_buku;
		$book->judul_buku = $request->judul_buku;
		$book->kategori_buku = $request->kategori_buku;
		$book->penulis_buku = $request->penulis_buku;
		$book->save();
		return redirect(Route('index'));
	}

	Public function edit($id){
    	$book = Buku::findOrFail($id);
    	return view('book.edit', ['book' => $book]);
    }

    public function submitedit(Request $request, $id){
		$book = Buku::findOrFail($id);
		$book->id_buku = $request->id_buku;
		$book->judul_buku = $request->judul_buku;
		$book->kategori_buku = $request->kategori_buku;
		$book->penulis_buku = $request->penulis_buku;
		$book->save();
		return redirect(Route('index'));
	}

	Public function delete($id){
    	$buku = Buku::findOrFail($id);
    	$buku->delete();
    	return redirect(Route('index'));
    }

}

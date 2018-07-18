@extends('master')
@section('content')
  <form class="form-horizontal" action="{{ Route('submitedit', ['id' => $book->id]) }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-2 control-label" for="id buku">ID Buku</label>
        <div class="col-md-6">
          <input name="id_buku" type="text" placeholder="ID Buku" class="form-control" value="{{$book->id_buku}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="judul buku">Judul Buku</label>
        <div class="col-md-6">
          <input name="judul_buku" type="text" placeholder="judul buku" class="form-control" value="{{$book->judul_buku}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="kategori buku">Kategori Buku</label>
        <div class="col-md-6">
          <input name="kategori_buku" type="text" placeholder="Kategori Buku" class="form-control" value="{{$book->kategori_buku}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="penulis buku">Penulis Buku</label>
        <div class="col-md-6">
          <input name="penulis_buku" type="text" placeholder="penulis buku" class="form-control" value="{{$book->penulis_buku}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
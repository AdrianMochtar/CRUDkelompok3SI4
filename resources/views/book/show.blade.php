@extends('master')
@section('content')
	<a class="btn btn-primary" href="{{Route('tambah')}}">Tambah Data</a>
	<br><br>
		<table border="1">
		<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>ID Buku</th>
				<th>Judul Buku</th>
				<th>Kategori Buku</th>
				<th>Penulis Buku</th>
				<th>Action</th>
			</tr>
		</thead>
		<body>
			@foreach($book as $databuku)
        	<tr>
          		<td>{{$databuku->id_buku}}</td>
          		<td>{{$databuku->judul_buku}}</td>
          		<td>{{$databuku->kategori_buku}}</td>
          		<td>{{$databuku->penulis_buku}}</td>
          		<td>
          		<a href="{{ Route('edit', ['id' => $databuku->id]) }}" class="btn btn-warning btn-xs">Edit</a>
          		<a href="{{ Route('delete', ['id' => $databuku->id]) }}" class="btn btn-danger btn-xs">Hapus</a>	
          		</td>
        	</tr>
        	@endforeach	
		</body>
		</table>
		<br><br>
		</table>
@endsection	
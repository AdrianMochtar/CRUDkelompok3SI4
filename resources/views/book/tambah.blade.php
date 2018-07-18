@extends('master')
@section('content')
 <form class="form-horizontal" action="{{ Route('insert') }}" method="post"> 
     <fieldset> 
       @csrf 
       <div class="form-group"> 
         <label class="col-md-2 control-label" for="id buku">ID Buku</label> 
         <div class="col-md-6"> 
           <input name="id_buku" type="text" placeholder="ID Buku" class="form-control"> 
         </div> 
       </div> 
  
       <div class="form-group"> 
         <label class="col-md-2 control-label" for="judul buku">Judul Buku</label> 
         <div class="col-md-6"> 
           <input name="judul_buku" type="text" placeholder="Judul Buku" class="form-control"> 
         </div> 
       </div> 

        <div class="form-group"> 
         <label class="col-md-2 control-label" for="kategori buku">Kategori Buku</label> 
         <div class="col-md-6"> 
           <input name="kategori_buku" type="text" placeholder="Kategori Buku" class="form-control"> 
         </div> 
       </div>

        <div class="form-group"> 
         <label class="col-md-2 control-label" for="penulis buku">Penulis Buku</label> 
         <div class="col-md-6"> 
           <input name="penulis_buku" type="text" placeholder="Penulis Buku" class="form-control"> 
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
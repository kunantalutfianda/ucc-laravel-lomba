@extends('layout.app')

@section('css')

@endsection

@section('content')

<div class="container">
<form action="/lomba/{{$lomba->id}}/edit" method="post">
    {{csrf_field()}}  
        <div class="form-group">
          <label for="nama">Nama</label>
          <input name=nama type="text" class="form-control" id="nama" placeholder="Masukkan nama lomba" value="{{$lomba->nama}}" required>
        </div>

        <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi" value="{{$lomba->deskripsi}}" required>
        </div>

        <div class="form-group">
                <label for="poster">Poster</label>
                <input name="poster" type="text" class="form-control" id="deskripsi" placeholder="Masukkan kode url poster" value="{{$lomba->poster}}" required>
        </div>

        <div class="form-group">
                <label for="tanggal">Tanggal Penutupan Lomba</label>
                <input name="tanggal" type="date" class="form-control" id="tanggal" value="{{$lomba->tanggal_tutup}}"  required>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

@endsection

@section('js')

@endsection
@extends('layout.app')

@section ('content')

 <!-- START JUMBOTRON -->
    <div class="jumbotron">
        <div class="container">
            <h1>Apakah Anda yakin ingin menghapus lomba {{$lomba->nama}} ?</h1>
            <p><a class="btn btn-lg btn-success" href="/lomba/{{$lomba->id}}/confirmdelete" role="button">Ya</a>
                <a class="btn btn-lg btn-secondary" href="/lomba" role="button">Tidak</a></p>
        </div>
    </div>
<!--   END JUMBOTRON   -->


@endsection 
@extends('layouts.main')
@section('container')

@if (session('success'))
<div class="alert-success">
    <p>{{session('success')}}</p>
</div>
@endif

@if($errors->any())
<div class="alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="col-lg-10 flex mt-3">
    <h1 class="text-center fw-bold mb-4 text-info">Book List</h1>
    <!-- Bawa ini button tambah -->
    <div class="mb-2">
        <a href="buku/create" class="btn btn-success d-flex align-items-center justify-content-center"><span class="fw-bold pr-4">Tambah</span> <i class="bi bi-plus"></i></a>
    </div>

    <!-- Bawah ini list -->
    <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <p style="width: 150px; margin:0;" class="fw-bold">Judul</p>
        <p style="width: 150px; margin:0;" class="fw-bold">Author</p>
        <p style="width: 150px; margin:0;" class="fw-bold">Sinopsis</p>
        <p style="width: 150px; margin:0;" class="fw-bold">Penerbit</p>
        <p style="margin: 0; font-weight: 600;" class="text-primary">Detail</p>
        <p style="margin: 0; font-weight: 600;" class="text-warning">Edit</p>
        <p style="margin: 0; font-weight: 600;" class="text-danger">Delete</p>
    </li>
    </ul>
    <ul class="list-group">
        <!-- // ini buat looping -->
        @foreach($bukus as $buku)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <p style="width: 150px; margin:0;" class="text-truncate">{{$buku->judul}}</p>
            <p style="width: 150px; margin:0;" class="text-truncate">{{$buku->author}}</p>
            <p style="width: 150px; margin:0;" class="text-truncate">{{$buku->sinopsis}}</p>
            <p style="width: 150px; margin:0;" class="text-truncate">{{$buku->penerbit}}</p>
            <div class="row d-flex flex-row" style="width: 200px;">
                <div class="col p-2">
                    <a href="buku/{{$buku->id}}" class="btn btn-primary">
                    <i class="bi bi-three-dots"></i>
                    </a>
                </div>
                <div class="col p-2">
                    <a href="" class="btn btn-warning">
                    <i class="bi bi-pencil-square text-light"></i>
                    </a>
                </div>
                <div class="col p-2">
                    <form action='' method="post">
                        @csrf
                        @method('Delete')
                        <button class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </li>
        <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
            <p style="width: 150px; margin:0;" class="text-truncate">The Devotion of Suspect X</p>
            <p style="width: 150px; margin:0;" class="text-truncate">Keigo Higashino</p>
            <p style="width: 150px; margin:0;" class="text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores ratione incidunt nesciunt.</p>
            <p style="width: 150px; margin:0;" class="text-truncate">Gramedia</p>
            <div class="row d-flex flex-row" style="width: 200px;">
                <div class="col p-2">
                    <a href="" class="btn btn-primary">
                    <i class="bi bi-three-dots"></i>
                    </a>
                </div>
                <div class="col p-2">
                    <a href="" class="btn btn-warning">
                    <i class="bi bi-pencil-square text-light"></i>
                    </a>
                </div>
                <div class="col p-2">
                    <form action='' method="post">
                        @csrf
                        @method('Delete')
                        <button class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </li> -->
        @endforeach
        <!-- ini buat looping end -->
    </ul>

</div>


@endsection

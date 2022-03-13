@extends('layouts.main')
@section('container')
<div class="w-75 my-4 border p-3 rounded">
    <a href="/buku" class="btn-success btn mb-4 pr-4 fw-bold">
        <i class="bi bi-caret-left-fill"></i> Back
    </a>
    <h2 class="fw-bold mb-1">{{$buku->judul}}</h2>
    <h5 style="font-weight: 600;" class="text-primary mb-3">by {{$buku->author}}</h5>
    <p>{{$buku->sinopsis}}</p>
    <p class="btn btn-primary pe-none">Published by {{$buku->penerbit}}</p>
</div>
@endsection
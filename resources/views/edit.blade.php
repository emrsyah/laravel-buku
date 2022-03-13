@extends('layouts.main')
@section('container')


<form action="{{url('buku', $buku->id)}}" method="post" class="mt-4  border py-2 px-4 rounded w-50">
    @csrf
    @method('PUT')
    <h2 class="fw-bold mb-4 mt-2 text-center">Edit Book</h2>
    <div class="my-2">
        <p class="m-0">Judul</p>
        <input required type="text" value="{{$buku->judul}}" name="judul" placeholder="Judul..." id="" class="border rounded w-100 p-2" style="background-color: #F6F7F9;">
    </div>
    <div class="my-2">
        <p class="m-0">Author</p>
        <input required type="text" value="{{$buku->author}}" name="author" placeholder="Nama pengarang..." id="" class="border rounded  w-100 p-2" style="background-color: #F6F7F9;">
    </div>
    <div class="my-2">
        <p class="m-0">Sinopsis</p>
        <textarea  required name="sinopsis" id="" cols="30" rows="4" class="border rounded w-100 p-2" style="background-color: #F6F7F9;">{{$buku->sinopsis}}</textarea>
    </div>
    <div class="my-2">
        <p class="m-0">Penerbit</p>
        <input required type="text" value="{{$buku->penerbit}}" name="penerbit" id="" placeholder="Penerbit..." class="border rounded  w-100 p-2" style="background-color: #F6F7F9;">
    </div>
    <button type="submit" class="btn w-100 text-white fw-bold py-2 mt-4" style="font-size: 16px; background-color: black;">
        Confirm
    </button>
</form>



@endsection

@extends('layouts.master')

@section('content')
@foreach ($artikels as $artikel)
<div class="card ml-4 mt-2">
    <form action="{{ url('/artikel/'.$artikel->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input class="form-control" type="text" name="judul" id="judul" value="{{ $artikel->judul }}">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input class="form-control" type="text" name="slug" id="slug" value="{{ $artikel->slug }}">
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input class="form-control" type="text" name="tag" id="tag" value="{{ $artikel->tag }}">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <input class="form-control" type="text" name="isi" id="isi" cols="30" rows="10" value="{{ $artikel->isi }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endforeach

@endsection
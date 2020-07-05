@extends('layouts.master')

@section('content')
<div class="card bg-white ml-4 mt-2">
    <form action="{{ url('/artikel') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input class="form-control" type="text" name="judul" id="judul">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input class="form-control" type="text" name="slug" id="slug">
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input class="form-control" type="text" name="tag" id="tag">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" type="text" name="isi" id="isi" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
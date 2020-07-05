@extends('layouts.master')

@section('content')
<div class="ml-4 mt-2">
<a href="{{ url('/artikel')}}">
        <button type="submit" class="btn btn-success">Table Artikel</button>
        </a>
        <br>
    <h1>Artikel</h1><br>
    @foreach ($artikels as $artikel)
            <p> Judul : {{$artikel->judul}}</p>
            <p> Tag : {{$artikel->tag}}</p>
            <p> Slug : {{$artikel->slug}}</p>
            <p> Isi : {{$artikel->isi}}</p>
                    
            @endforeach
</div>

@endsection
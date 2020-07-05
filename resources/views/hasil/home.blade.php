@extends('layouts.master')

@section('content')
<div class="ml-4 mt-2">
<a href="{{ url('/artikel')}}">
        <button type="submit" class="btn btn-success">Menuju Artikel</button>
        </a><br>
        <img src="{{ asset ('/images/erdquiz3.png') }}">
</div>    
    
@endsection
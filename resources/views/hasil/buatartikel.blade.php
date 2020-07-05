@extends('layouts.master')

@section('content')
<div class="card ml-3 mr-3 mt-3" >
    <a href="{{ url('/artikel/create')}}">
        <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
    </a>
</form>    
    <table class="table table-boedered mt-3">
        <thead>
            <th>No</th>
            <th>Judul Artikel</th>
            <th>Tag Artikel</th>
            <th>Lihat Artikel</th>
            <th>Form Jawaban</th>
        </thead>
        <tbody>
            @foreach ($artikels as $artikel)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$artikel->judul}}</td>
                    <td>{{$artikel->tag}}</td>
                    <td>
                    <a href="{{ url('/artikel/'.$artikel->id)}}">
                        <button type="submit" class="btn btn-success">Lihat Jawaban</button>
                    </a>
                    </td>
                    <td>
                    <a href="{{ url('/artikel/'.$artikel->id.'/edit')}}">
                        <button type="submit" class="btn btn-warning">Edit Jawaban</button>
                        </a>
                        <form action="{{ url('/artikel/'.$artikel->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class= "fas fa-trash"></i></button>
                        </form>
                        </td> 
            @endforeach
        </tbody>
        
    </table>
</div>


@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><a href="/home">Home</a></div>                
                <div class="card-body">
                    @if($files->count())
                        <table class="table">
                            <th>Nome</th>
                            <th>Tamanho</th>
                            <th>Formato</th>
                            @foreach($files as $file)
                                <tr>
                                    <td><a href="{{ url('files/'.$file->path.'/'.$file->filename) }}">{{ 
                                    $file->filename }}</a></td>
                                    <td>{{ $file->size }} Bytes</td>
                                    <td>{{ $file->mime }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        Sem Arquivos!
                    @endif
                </div>
                <div class="card-header"><a href="{{ url('files/create') }}">Adicionar Arquivos</a></div>
            </div>
        </div>
    </div>
</div>
@endsection

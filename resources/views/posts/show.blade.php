@extends('template.users')
@section('title', "Listagem das Postagens do {$user->name}")
@section('body')
    <h1>Postagem do {{$user->name}}</h1>

    @foreach($posts as $post)
        <div class="mb-3">
            <label class="form-label">Identificação Nº:<br><b>{{$post->id}}</b></label>
                <br>
            <label class="form-label">Status Nº:<br><b>{{$post->active?'Ativo':'Inativo'}}</b></label>
                <br>
            <label class="form-label">Título:<br><b>{{$post->title}}</b></label>
                <br>
            <label class="form-label">Postagem:</label>
                <br>
            <textarea class="form-control " rows="3">{{$post->post}}</textarea>
                <br>
        </div>    
    @endforeach
@endsection
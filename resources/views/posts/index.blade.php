@extends('template.users')
@section('title', 'Listagem de Postagens')
@section('body')

<h1>Listagem de Postagens</h1>
 
  <table class="table">
      <thead class="text-center">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Título</th>
          <th scope="col">Postagem</th>
          <th scope="col">Data de cadastro</th>

        </tr>
      </thead>
      <tbody class="text-center">
          @foreach($posts as $post)
          <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->post}}</td>
                <td>{{date('d/m/Y - H:i', strtotime($post->created_at))}}</td>
                <td>
                    <a href="{{ route('users.show', $post->id)}}" class="btn btn-primary text-white">Visualizar</a>
                </td>

          </tr>
          @endforeach
      </tbody>
    </table>
    {{-- <div class="justify-content-center pagination">
        {{$posts->links('pagination::bootstrap-4')}}
    </div> --}}
@endsection
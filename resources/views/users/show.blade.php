<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Usuário {{$user->name}}</title>
</head>
<body>

    <div class="container">
        <h1>Listagem de Usuários</h1>
        <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data de cadastro</th>
                <th scope="col">Ações</th>

              </tr>
            </thead>
            <tbody class="text-center">
               
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{date('d/m/Y - H:i', strtotime($user->created_at))}}</td>
                    <td>
                        <a href="" class="btn btn-warning text-white">Editar</a>
                        <a href="" class="btn btn-danger text-white">Excluir</a>
                    </td>
                    
                </tr>
            </tbody>
          </table>

    </div>
    
</body>
</html>
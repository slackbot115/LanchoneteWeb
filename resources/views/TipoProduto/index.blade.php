<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de TipoProduto</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <a class="btn btn-primary" href="{{route("tipoproduto.create")}}">Criar Tipo de Produto</a>
        <a class="btn btn-primary" href="#">Voltar</a>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tipoProdutos as $tipoProduto)
                    <tr>
                        <th scope="row">{{$tipoProduto->id}}</th>
                            <td>{{$tipoProduto->descricao}}</td>
                            <td>
                                <a href="{{route("tipoproduto.show", $tipoProduto->id)}}" class="btn btn-primary">Mostrar</a>
                                <a href="{{route("tipoproduto.edit", $tipoProduto->id)}}" class="btn btn-secondary">Editar</a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluirModal">Excluir</button>
                            </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    <div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    Deseja realmente excluir este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a href="{{route("tipoproduto.destroy", $tipoProduto->id)}}" class="btn btn-danger" >Excluir registro</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

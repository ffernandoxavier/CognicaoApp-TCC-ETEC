<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paciente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href=" asset('css/app.css') " rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">PACIENTE</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="pdf">VOLTAR</a>
        </div> 
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Escolaridade</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> {{$user->id}} </th>
                    <td> {{$user->name}} </td>
                    <td> {{$user->sobrenome}} </td>
                    <td> {{$user->email}} </td>
                    <td> {{$user->cpf}} </td>
                    <td> {{$user->dtnascimento}} </td>
                    <td> {{$user->sexo}} </td>
                    <td> {{$user->escolaridade}} </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Exame</th>
                    <th scope="col">Resposta do exame realizado</th>
                    <th scope="col">Resposta do paciente</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> - </th>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <th scope="row"> - </th>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <th scope="row"> - </th>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <th scope="row"> - </th>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <th scope="row"> - </th>
                    <td> - </td>
                    <td> - </td>
                </tr>
            </tbody>
        </table>

    </div>

    <script src=" asset('js/app.js') " type="text/js"></script>
</body>
</html>

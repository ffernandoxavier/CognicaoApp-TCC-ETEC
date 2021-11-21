<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
            </thead>
            <tbody>
                @foreach($user as $user)
                <tr>
                    <th scope="row"> {{$user->id}} </th>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                    <td><a href="">Detalhes</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        

    </div>

    <script src=" asset('js/app.js') " type="text/js"></script>
</body>
</html>
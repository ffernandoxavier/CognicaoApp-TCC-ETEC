<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href=" asset('css/app.css') " rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="/employee/pdf">Export to PDF</a>
        </div>
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
                    <td><a href="{{ url('/relatorio/' . $user->id ) }}"><button class="btn btn-primary btn-block" type="button"
                        onclick ="$('#op').prop('value', 'C');
                        $('#frmusuarios').submit();"
                        name="btnconsultar">Consultar</button>
                        </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script src=" asset('js/app.js') " type="text/js"></script>
</body>

</html>
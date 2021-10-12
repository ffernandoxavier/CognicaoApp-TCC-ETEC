<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--FONTES DA APLICAÇÃO-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
        <!--CSS BOOTSTRAP--> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <!--CSS DA APLICAÇÃO-->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        
    </head>
    <!-- CABEÇALHO -->
    <body data-spy="scroll" data-target=".fixed-top">
        <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/logo002.png" alt="" class="img-fluid b-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
          </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active smoth-scroll" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="instituicao">Instituição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="register">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="dashboard">Acesso</a>
                </li>

             </ul>
         </div>
         </div>
        </nav>


    <!-- Footer -->
    <section id="footer" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-copy">
                    © 2021 Mapeiamente. TODOS OS DIREITOS RESERVADOS.
                </div>
            </div>
        </div>
    </div>
    </section>

    </body>
</html>

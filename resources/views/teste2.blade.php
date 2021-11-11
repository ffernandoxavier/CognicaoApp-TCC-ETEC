<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=\, initial-scale=1.0">
    <title>Mapeiamente</title>

    <!-- LINK CSS --> 
    <link rel="stylesheet" href="/css/estilo.css"> 
</head>
<body>
    <main class="main-main">
    <form name="teste11" action='\teste3' method='post'>
    @csrf
    <p id="textt2">Qual o dia da semana que estamos?</p>
    <br>
        <div class="custom-radio">
            <input id="radio-1" name="semana" value="Domingo" type="radio" required /> 
            <label id="txtrb" for="radio-1"> Domingo </label>
        </div>
        <div class="custom-radio">
            <input id="radio-2" name="semana" value="Segunda-Feira" type="radio" /> 
            <label id="txtrb" for="radio-2"> Segunda - Feira </label>
        </div>
        <div class="custom-radio">
            <input id="radio-3" name="semana" value="Terça-Feira" type="radio" /> 
            <label id="txtrb" for="radio-3"> Terça - Feira </label>
        </div>
        <div class="custom-radio">
            <input id="radio-4" name="semana" value="Quarta-Feira" type="radio" /> 
            <label id="txtrb" for="radio-4"> Quarta - Feira </label>
        </div>
        <div class="custom-radio">
            <input id="radio-5" name="semana" value="Quinta-Feira" type="radio" /> 
            <label id="txtrb" for="radio-5"> Quinta - Feira </label>
        </div>
        <div class="custom-radio">
            <input id="radio-6" name="semana" value="Sexta-Feira" type="radio" /> 
            <label id="txtrb" for="radio-6"> Sexta- Feira </label>
        </div>
        <div class="custom-radio">
            <input id="radio-7" name="semana" value="Sábado" type="radio"/> 
            <label id="txtrb" for="radio-7"> Sábado </label>
        </div>
        <br>
        <br>
        <button class="form2" type="submit" name="form2enviar">Enviar</button>
        <!--<input class="form2" type="submit" name="form2enviar" value="Enviar">-->
</form>
    </main>
</body>
</html>
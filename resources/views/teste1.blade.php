<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=\, initial-scale=1.0">
    <title>Mapeiamente</title>

    <!-- LINK CSS --> 
    <link rel="stylesheet" href="/css/estilo.css"> 
</head>
<body>
  <main>
  <p id="teste1cx">Para começar selecione o DIA, MÊS e ANO,</p>
  <p id="teste2cx"> que você está realizando o teste.</p>
  </main>
  <main>
    <form name="teste1" action='/teste2' method='get'>
      <div class="half-box">
        <label for ="DIA" > DIA </label>
          <select name="f_dia" required id="format" style="width:100px; color: black; text-align:center;">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>   
      </div>
      <div class="half-box">
        <label for ="MÊS" > MÊS </label>
          <select name="f_mes" required style="width:100px; text-align:center;">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
      </div>
      <div class="half-box">
       <label for ="ANO"> ANO </label>
        <select name="f_ano" required style="width:100px text-align:center;">
          <option value=""></option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
        </select>
      </div>
      <!--<button class="form2" type="submit" name="form2enviar">Enviar</button>-->
      <input class="form2" type="submit" name="form2enviar" value="Enviar">
    </form>
  </main>
</body>
</html>
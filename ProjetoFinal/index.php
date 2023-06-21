<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="comida receita bolo delicias gostoso saboroso">
        <meta name="description" content="Apenas um site de receitas feito como projeto academico">
        <link rel="stylesheet" href="Calog/css/cad.css">
        <link rel="stylesheet" href="css/silk.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          a{text-decoration: none; color:black;}
        </style>

    </head>
    <body>
        <header class="cabeça">
            <!--Ameixa-->
            <section class="header-main">
              <a href="#" style="text-decoration: none; color:black;"><h1 class="logo">Recipe<em>Book</em></h1></a>
              <ul>
                <li><input type="text" placeholder=" Pesquisar"></li>
                <a href="Pesquisa/Pesquisa.html"><li>Pesquisar</li></a>
                <a href="Calog/index.html"><li>Log-in</li></a>
              </ul>
            </section>
            <!--Ameixa-->
            <div class="topnav">
              <a href="#home" class="active">menu</a>
              <!-- Navigation links (hidden by default) -->
              <div id="myLinks">
                <a href="Pesquisa/Pesquisa.html"><li>França</li></a>
                <a href="Pesquisa/Pesquisa.html"><li>Alemanha</li></a>
                <a href="Pesquisa/Pesquisa.html"><li>Japão</li></a>
                <a href="Pesquisa/Pesquisa.html"><li>Indonésia</li></a>
                <a href="Pesquisa/Pesquisa.html"><li>Inglaterra</li></a>
                <a href="Pesquisa/Pesquisa.html"><li>Brasil</li></a>
                <a href="Pesquisa/Pesquisa.html"><li>México</li></a>
              </div>
              <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </header>
          <main>
            <div class="title">
              <h1>Principais Receitas</h1>
            </div>
            
            <section class="linha">
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food1.png" alt="comida"> comida2</div></a>
                
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
              
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food1.png" alt="comida"> comida2</div></a>
              
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
              
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food1.png" alt="comida"> comida2</div></a>
              
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
              
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food1.png" alt="comida"> comida2</div></a>
             
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
              
              <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food1.png" alt="comida">comida2</div></a>
            </section>
            <!--<div class="title">
              <h1>Outras Receitas</h1>
            </div>
            
            <section class="linha">
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
                
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
                
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
                
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
                
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
                
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
                
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
               
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida"> comida2</div></a>
                
                <a href="comida/comida.html"><div class="colu-1"><img src="css/img/food2.png" alt="comida">comida2</div></a>
                
            </section>-->

          </main>
          <footer>
            <div class="row">
              <div class="col-1">
                <div class="txt">Matrícula</div>
                <ul>
                  <li>1- 202209071949</li>
                  <li>2- 202203950509</li>
                  <li>3- 202203120069</li>
		  <li>4- 202203627082</li>
                </ul>
              </div>
      
              <div class="col-1">
                <div class="txt">Nome dos Integrantes</div>
                <ul>
                  <li>1-Augusto Elizeu C. de Farias</li>
                  <li>2-Brenno Oliveira Vanzan de Almeida</li>
                  <li>3-Thamires Terra de Souza Lopes</li>
                  <li>4-Ramon da Costa Trancoso</li>
                </ul>
              </div>
      
              <div class="col-2">
                <div class="Obs">Observação</div>
                <p>Trabalho realizado como projeto de desenvolvimento web do centro universitário estácio</p>
              </div>
      
            </div>
            <div class="dir">
              © 2023 - RecipBook
            </div>
          </footer>
          <script src="script.js"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </script>
    </body>


</html>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="comida, receitas, bolo, sopas">
    <meta name="description" content="É apenas um site de receita simples">
    <link rel="stylesheet" href="css/cad.css">
    <link rel="stylesheet" href="css/log.css">
    <title>Recipebook</title>
  </head>
  <body>
    <header class="cabeça">
      <!--Ameixa-->
      <section class="header-main">
        <h1 class="logo">Recipe<em>Book</em></h1>
        <ul>
          <li><input type="text" placeholder=" Pesquisar"></li>
          <a href="#"><li>Log-in</li></a>
        </ul>
      </section>
      <!--Ameixa-->
      <nav class="options">
        <ul>
          <a href="#"><li>Bolos e Tortas</li></a>
          <a href="#"><li>Massas</li></a>
          <a href="#"><li>Sopas</li></a>
          <a href="#"><li>Carnes</li></a>
          <a href="#"><li>Frutos do mar</li></a>
          <a href="#"><li>Doces</li></a>
          <a href="#"><li>Todas as receitas</li></a>
        </ul>
      </nav>
    </header>
    <!--ameixa-->
    <main>
    <div class="union">
        <div class="cad">
          <h3>Log-in</h3>
          <form class="formu" action="index.php" method="post">
            <label for="textao">Email</label><br><br>
            <input type="text" name="textao" placeholder="Email" required/><br><br>
            <label for="Senhão">Senha</label><br><br>
            <input type="password" name="Senhão" placeholder="Senha" required/><br><br>
            <label for="" class="reg">Não possui conta?<a href="regis.php"> Clique aqui e se cadastrar</a></label>
            <br><br>
            <a href="https://www.youtube.com/watch?v=xJxr1piIfSU">
            <input type="submit" name="confirmar" value="Entrar"/></a>
          </form>
        </div>
    </div>
      <!--ameixa-->
    </main>
    <!--ameixa-->
    <footer>
      <div class="row">
        <div class="col-1">
          <div class="txt">Links</div>
          <ul>
            <a href="#"><li><a href="#"> Receitas de Bolo</li></a>
            <a href="#"><li><a href="#"> Receitas Comemorativas</li></a>
            <a href="#"><li><a href="#"> Politica de privacidade</li></a>
          </ul>
        </div>

        <div class="col-1">
          <div class="txt">Nome dos Integrantes</div>
          <ul>
            <li>Placeholder</li>
            <li>Placeholder</li>
            <li>Placeholder</li>
            <li>Placeholder</li>
          </ul>
        </div>

        <div class="col-2">
          <div class="Obs">Observação</div>
          <p>Trabalho realizado como projeto de desenvolvimento web do centro universitário estácio</p>
        </div>

      </div>
      <div class="dir">
        © 2023 - RecipeBook
      </div>
    </footer>

  </body>
</html>

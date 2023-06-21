<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="comida, receitas, bolo, sopas">
    <meta name="description" content="É apenas um site de receita simples">
    <link rel="stylesheet" href="css/cad.css">
    <link rel="stylesheet" href="css/log.css">
    <title>RecipeBook</title>
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
      <div class="union-2">
          <h2>Não possui conta? Cadastre-se pra receber novidades.</h2><br><br>
          <div class="regis">
            <form class="fomo" action="index.php" method="post">
              <label for="non">Nome</label>
              <input type="text" name="non" placeholder="Nome" required>
              <label for="sob">Sobrenome</label>
              <input type="text" name="sob" placeholder="Sobrenome" required>
              <br><br>
              <label for="email">E-mail</label>
              <input type="text" name="email" placeholder="E-mail" required>
              <label for="tele">Telefone</label>
              <input type="number" name="tele" placeholder="Telefone" required>
              <br><br>
              <label for="Cpf">CPF</label>
              <input type="text" name="CPF" placeholder="CPF" maxlength="11" required>
              <br><br>
              <label for="senha">Senha</label>
              <input type="password" name="senha" placeholder="Senha" required>
              <label for="confsenha">Confirme</label>
              <input type="password" name="senha" placeholder="ConfirmeSenha" required><br><br><br>
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

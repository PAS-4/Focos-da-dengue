<?php
  session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Zer@Dengue - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="_css/login.css">
  </head>
  <body>
    <div id="interface">
      <?php
        if(isset($_SESSION['invalido'])):
      ?>
      <div id="erro">*Há algo errado (Usuário e/ou senha)!</div>
      <?php
      unset($_SESSION['invalido']);
      endif;
      ?>
      <form id="cForm" method="POST" action="_php/logar.php">
          <fieldset>
              <legend></legend>
                <table>
                  <tr>
                      <td><input type="text" name="logUsuario" id="cLogin" placeholder="Usuário" size="42" required autofocus/></td>
                  </tr>
                  <tr>
                      <td><input type="password" name="logSenha" id="cSenha" placeholder="Senha" size="42" required/></td>
                  </tr>
                  <span><a href="#">Esqueci minha Senha</a></span>
                  <tr>
                      <td><a id="cad" href="cadastro.php">Cadastre-se</a></td>
                  </tr>
                </table>
                <div id="logar">
                  <input type="button" value="Cancelar" id="can" class="botao" onclick="history.go(-1)"/>
                  <input type="reset" value="Limpar" id="limp" class="botao"/>
                  <input type="submit" value="Entrar" id="env" class="botao"/>
                </div>
          </fieldset>
      </form>
    </div>
  </body>
</html>
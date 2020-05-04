<?php

session_start();

include("_php/autenticacao.php");

include("_php/buscar_lista.php")

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Zer@Dengue - Lista de Denúncias</title>
        <link rel="stylesheet" href="_css/estilo.css">
        <link rel="stylesheet" href="_css/denuncia.css">
        <link rel="stylesheet" href="_css/lista_denuncia.css">
    </head>
    <body>
        <div id="tela">
            <header id="cabecalho">
                <h1>Zer@Dengue</h1>
                <h2>Todos juntos contra a Dengue!</h2>
            </header>
            
            <nav id="menu">
                <ul>
                    <li><a href="#"><?php echo $_SESSION['usuario'];?></a>
                        <ul>
                            <li><a href="home.php">HOME</a></li>
                        </ul>
                        <ul>
                            <li><a href="_php/logout.php">SAIR</a></li>
                        </ul>
                    </li>
                    <li><a href="#bg">DENUNCIE</a></li>
                    <li><a href="home.php#saiba_mais">SAIBA MAIS</a>
                        <ul>
                            <li><a href="home.php#prevencao">COMO SE PREVENIR</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            
            <section id="corpo">
                <div id="bg"></div>
                <div class="box">
                    <form id="form" method="POST" action="_php/denuncia.php">
                        <fieldset id="denuncia">
                            <legend>Local do Foco</legend>
                                <textarea name="tMsg" id="cMsg" cols="45" rows="16" placeholder="Descreva a Situação..."></textarea>
                                <input type="text" name="tRua" id="cFoco" size="38" placeholder="Endereço (Rua, Travessa...)" required/>
                                <input type="text" name="tBairro" id="cBairro" size="38" placeholder="Bairro" required/>
                                <input type="text" name="tCidade" id="cCid" size="38" placeholder="Cidade" required/>
                                <input type="file" name="tFoto" id="cFoto"/>
                                <input type="button" value="Cancelar" id="can" class="botao" onclick="history.go(-1)"/>
                                <input type="reset" value="Limpar" id="limp" class="botao"/>
                                <input type="submit" value="Enviar" id="env" class="botao"/>
                        </fieldset>
                    </form>
                </div>

                <div>
                    <table class="lista" cellspacing="20">
                        <tr>
                            <th>rua</th>
                            <th>bairro</th>
                            <th>cidade</th>
                            <th>descrição</th>
                        </tr>
                            <?php
                            while($rows_denuncias = mysqli_fetch_assoc($buscando)){
                            ?>
                        <tr>
                            <tr>
                                <td colspan="5">
                                    <hr class="linha">
                                </td>
                            </tr>
                            <td>
                                <?php
                                echo $rows_denuncias['rua'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $rows_denuncias['bairro'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $rows_denuncias['cidade'];
                                ?>
                            </td>
                            <td>
                                <input type="checkbox" id="ver">
                                <div class="coment">
                                    <?php
                                    echo $rows_denuncias['comentario'];}
                                    ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </section>
            
            <footer id="rodape">
                <p>Copyright &copy; 2020</p>
                <p>by PAS4</p>
            </footer>
        </div>
    </body>
</html>
<?php

session_start();

include("_php/autenticacao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Zer@Dengue - Home</title>
        <link rel="stylesheet" href="_css/estilo.css">
        <link rel="stylesheet" href="_css/denuncia.css">
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
                            <li><a href="_php/logout.php">SAIR</a></li>
                        </ul>
                    </li>
                    <li><a href="#bg">DENUNCIE</a>
                        <ul>
                            <li><a href="lista_denuncia.php">ACOMPANHAR DENÚNCIA</a></li>
                        </ul>
                    </li>
                    <li><a href="#saiba_mais">SAIBA MAIS</a>
                        <ul>
                            <li><a href="#prevencao">COMO SE PREVENIR</a></li>
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
                
                <div class="bloco1">
                    <img src="./_imagens/placa.jpg" alt="O que evitar" id="placa"/>
                    <h3 id="saiba_mais">O que precisamos saber</h3>
                    <p>Dengue é uma doença tropical infecciosa causada pelo vírus da dengue, um arbovírus da família Flaviviridae, gênero Flavivírus e que inclui quatro tipos imunológicos: DEN-1, DEN-2, DEN-3 e DEN-4.[1] Os sintomas incluem febre, dor de cabeça, dores musculares e articulares e uma erupção cutânea característica que é semelhante à causada pelo sarampo. Em uma pequena proporção de casos, a doença pode evoluir para a dengue hemorrágica com risco de morte, resultando em sangramento, baixos níveis de plaquetas sanguíneas, extravasamento de plasma no sangue ou até diminuição da pressão arterial a níveis perigosamente baixos.</p>

                    <p>A dengue é transmitida por várias espécies de mosquito do gênero Aedes, principalmente o Aedes aegypti. O vírus tem quatro tipos diferentes e a infecção por um deles dá proteção permanente para o mesmo sorotipo e imunidade parcial e temporária contra os outros três. Um contágio subsequente por algum tipo diferente do vírus aumenta o risco de complicações graves no paciente. Como não há vacina disponível no mercado, a melhor forma de evitar a epidemia é a prevenção, através da redução ou destruição do habitat e da população de mosquitos transmissores e da limitação da exposição a picadas.</p>
                </div>
                <hr>
                <div class="bloco2">
                    <img src="./_imagens/evitar.jpg" alt="O que evitar" id="placa"/>
                    <h3 id="prevencao">Como se Prevenir</h3>
                    <p>A melhor forma de prevenção da dengue é evitar a proliferação do mosquito Aedes Aegypti, eliminando água armazenada que podem se tornar possíveis criadouros, como em vasos de plantas, lagões de água, pneus, garrafas pláticas, piscinas sem uso e sem manutenção, e até mesmo em recipientes pequenos, como tampas de garrafas.</p>

                    <p>Roupas que minimizem a exposição da pele durante o dia - quando os mosquitos são mais ativos - proporcionam alguma proteção às picadas e podem ser uma das medidas adotadas, principalmente durante surtos. Repelentes e inseticidas também podem ser usados, seguindo as instruções do rótulo. Mosquiteiros proporcionam boa proteção para aqueles que dormem durante o dia, como bebês, pessoas acamadas e trabalhadores noturnos.</p>

                    <p>Medidas simples pode ser adotadas, como substituir a água dos pratos dos vasos de planta por areia; deixar a caixa d´água tampada; cobrir os grandes reservatórios de água, como as piscinas, e remover do ambiente todo material que possa acumular água (garrafas pet, latas e pneus).</p>
                </div>
            </section>
            
            <footer id="rodape">
                <p>Copyright &copy; 2020</p>
                <p>by PAS4</p>
            </footer>
        </div>
    </body>
</html>
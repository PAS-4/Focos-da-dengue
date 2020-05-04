<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Zer@Dengue - Cadastro</title>
        <link rel="stylesheet" href="_css/estilo.css">
        <link rel="stylesheet" href="_css/cadastro.css">
    </head>
    <script>
        function erro(){
            alert("Precisa se cadastrar para poder denunciar!");
        }
    </script>
    <body>
        <div id="tela">
            <header id="cabecalho">
                <h1>Zer@Dengue</h1>
                <h2>Todos juntos contra a Dengue!</h2>
            </header>
            
            <nav id="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#" onclick="erro();">DENUNCIE</a></li>
                    <li><a href="#">SAIBA MAIS</a>
                        <ul>
                            <li><a href="#" onclick="history.go(-1)">COMO SE PREVENIR</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <section id="corpo">
                <form id="cForm" method="POST" action="_php/cadastrar.php">
                    <fieldset id="dados">
                        <legend>Dados Pessoais</legend>
                            <table>
                                <tr>
                                    <td>
                                        <label for="cNome">Nome</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="tNome" id="cNome" size="77" maxlength="50" placeholder="Nome Completo - Obrigatório" required autofocus/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="cCpf">CPF</label>
                                    </td>
                                    <td>
                                        <input type="text" name="tCpf" id="cCpf" size="32" maxlength="20"/>
                                    </td>
                                    <td>
                                        <label for="cRg">RG</label>
                                    </td>
                                    <td>
                                        <input type="text" name="tRg" id="cRg" size="32" maxlength="20"/>
                                    </td>
                                </tr>
                            </table>
                                <fieldset id="contato">
                                    <legend>Contatos</legend>
                                        <table>
                                            <tr>
                                                <td>
                                                    <label for="cEmail">E-mail</label>
                                                </td>
                                                <td>
                                                    <input type="email" name="tEmail" id="cEmail" size="25"/>
                                                </td>
                                                <td>
                                                    <label for="cTelefone">Telefone</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="tTelefone" id="cTelefone" size="25" placeholder="(DDD) + Número"/>
                                                </td>
                                            </tr>
                                        </table>
                                </fieldset>
                    </fieldset>

                    <fieldset id="Endereco">
                        <legend>Endereço</legend>
                            <table>
                                <tr>
                                    <td>
                                        <label for="cLog">Logradouro</label>
                                    </td>
                                    <td colspan="2">
                                        <input type="text" name="tLog" id="cLog" size="49" placeholder="Rua, Travessa..."/>
                                    </td>
                                    <td>
                                        <label for="cNum">Nº</label> <input type="text" name="tNum" id="cNum" size="10" min="1"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="cBairro">Bairro</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="tBairro" id="cBairro" size="70"/>
                                    <td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="cCid">Cidade</label>
                                    </td>
                                    <td>
                                        <input type="text" name="tCid" id="cCid" size="38"/>
                                    </td>
                                    <td>
                                        <label for="cEst">Estado</label>
                                    </td>
                                    <td>
                                        <input type="text" name="tEst" id="cEst" size="14" maxlength="2"/>
                                    </td>
                                </tr>
                            </table>
                    </fieldset>

                    <fieldset id="login">
                        <legend>Login</legend>
                            <table>
                                <tr>
                                    <td>
                                        <label for="cUsuario">Usuário</label>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" name="tUsuario" id="cUsuario" size="75" placeholder="E-mail ou CPF" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="cSenha">Senha</label>
                                    </td>
                                    <td>
                                        <input type="password" name="tSenha" id="cSenha" size="22" maxlength="16" placeholder="8 a 16 caracters" required/>
                                    </td>
                                    <td>
                                        <label for="cConfirm">Confirme a Senha</label>
                                    </td>
                                    <td>
                                        <input type="password" name="tConfirm" id="cConfirm" size="21" maxlength="16" placeholder="Repita a senha escolhida"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <fieldset class="tipo_user">
                                            <span>Tipo de Usuário</span>
                                            <hr>
                                            <input type="radio" name="tipo_user" id="denun"> <label for="denun">Denunciante</label>
                                            <input type="radio" name="tipo_user" id="agente"> <label for="agente">Agente Sanitário</label>
                                        </fieldset>
                                    </td>
                                </tr>
                            </table>
                    </fieldset>
                    <input type="button" value="Cancelar" id="can" class="botao" onclick="history.go(-1)"/>
                    <input type="reset" value="Limpar" id="limp" class="botao"/>
                    <input type="submit" value="Cadastrar" id="env" class="botao"/>
                </form>
            </section>
            
            <footer id="rodape">
                <p>Copyright &copy; 2020</p>
                <p>by PAS4</p>
            </footer>
        </div>
    </body>
</html>
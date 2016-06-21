<?php require_once"header.php" ?>  
    <div id="centralizar1">                             <!-- Centralização -->
        <div id="menu-lateral">
            <!-- Menu Lateral Acesso Rapido -->
            <div id="topo-menu-lateral">Painel Controle</div>
            <nav id="menu-lateral-opt">
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="pedidos.php">Meus Pedidos</a></li>
                    <li><a href="criarpedidos.php">Criar Pedidos</a></li>
                    <li><a href="estoque.php">Ver Estoque</a></li>
                    <li><a href="upload.php">Enviar Capas</a></li>
                    <li><a href="config.php">Configurações</a></li>
                    <li><a href="acount.php">Minha Conta</a></li>
                </ul>
            </nav>
        </div>
        <!-- Informações e Conteudos Sistema -->
        <div id="conteudo-restante">
            <h1>Estoque Material</h1>
            <hr>
            <!-- Conteudo Sistema Detalhado -->
            <table id="tabela">
                <tr>
                    <td>Estoque Material Produção</td>
                </tr>
                <tr>
                    <td>Objeto</td>
                    <td>Quantidade</td>
                    <td>Observação</td>
                    <td>Solitar</td>
                </tr>
                <tr>
                    <td>DVD</td>
                    <td>600</td>
                    <td>1 Caixa</td>
                    <td><button id="pedir">Pedir</button></td>
                </tr>
                <tr>
                    <td>Papel</td>
                    <td>1000</td>
                    <td>2 Resma</td>
                    <td><button id="pedir">Pedir</button></td>
                </tr>
                <tr>
                    <td>Plastico</td>
                    <td>1000</td>
                    <td>10 Pacotes</td>
                    <td><button id="pedir">Pedir</button></td>
                </tr>
                <tr>
                    <td>Tinta Preta</td>
                    <td>1 Garrafa</td>
                    <td>Metade</td>
                    <td><button id="pedir">Pedir</button></td>
                </tr>
                <tr>
                    <td>Tinta Amarela</td>
                    <td>1 Garrafa</td>
                    <td>Metade</td>
                    <td><button id="pedir">Pedir</button></td>
                </tr>
                <tr>
                    <td>Tinta Vermelha</td>
                    <td>1 Garrafa</td>
                    <td>Metade</td>
                    <td><button id="pedir">Pedir</button></td>
                </tr>
                <tr>
                    <td>Tinta Azul</td>
                    <td>1 Garrafa</td>
                    <td>Metade</td>
                    <td><button id="pedir">Pedir</button></td>
                </tr>
            </table>

        </div>
    </div>
<?php require_once"footer.php" ?>  
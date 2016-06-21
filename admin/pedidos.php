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
            <h1>Meus Pedidos</h1>
            <hr>
            <!-- Conteudo Sistema Detalhado -->
            <div id="bloco-cont">
                <div id="txt-list"><h1>Pedidos Atuais</h1></div>
                <div id="status">Status</div>
                <br>
                <br>
                <div id="conteudo-list">
                    <div id="pedido-nome-data"><p>Pedido 20/06/2016</p></div>
                    <div id="status-ok">Em Produção</div>
                    <div id="ver-itens"><a href="#">Ver Pedido</a></div>
                    <hr>
                    <div id="pedido-nome-data"><p>Pedido 19/06/2016</p></div>
                    <div id="status-aguardando">Aguardando</div>
                    <div id="ver-itens"><a href="#">Ver Pedido</a></div>
                    <hr>
                    <div id="pedido-nome-data"><p>Pedido 18/06/2016</p></div>
                    <div id="status-finalizado">Finalizado</div>
                    <div id="ver-itens"><a href="#">Ver Pedido</a></div>
                    <hr>
                </div>

            </div>

        </div>
    </div>
<?php require_once"footer.php" ?>  
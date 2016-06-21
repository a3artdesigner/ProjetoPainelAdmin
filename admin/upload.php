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
            <h1>Fazer Upload de Capas</h1>
            <hr>
            <!-- Conteudo Sistema Detalhado -->

            <form action="gravar.php" method="POST" enctype="multipart/form-data">
            <label for="imagem">Imagem:</label>
                <input type="file" name="imagem">
                <button id="enviar" type="submit">Enviar Capa</button>
            </form>
            <hr>
            <h1>Capas Enviadas</h1>
            <div id="capas">
                <img src="../upload/capa.jpg">
                <button id="enviar">Visualizar</button>
                <button id="reset">Deletar</button>
            </div>
            <div id="capas">
                <img src="../upload/capa.jpg">
                <button id="enviar">Visualizar</button>
                <button id="reset">Deletar</button>
            </div>
            <div id="capas">
                <img src="../upload/capa.jpg">
                <button id="enviar">Visualizar</button>
                <button id="reset">Deletar</button>
            </div>
            <div id="capas">
                <img src="../upload/capa.jpg">
                <button id="enviar">Visualizar</button>
                <button id="reset">Deletar</button>
            </div>
            <div id="capas">
                <img src="../upload/capa.jpg">
                <button id="enviar">Visualizar</button>
                <button id="reset">Deletar</button>
            </div>
            <div id="capas">
                <img src="../upload/capa.jpg">
                <button id="enviar">Visualizar</button>
                <button id="reset">Deletar</button>
            </div>
        </div>
    </div>
<?php require_once"footer.php"?>  
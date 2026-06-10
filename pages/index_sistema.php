<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard RFID</title>
    <link rel="stylesheet" href="sistema.css">
</head>

<body>
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <h2 id="nome-sistema">RFID LIVE</h2>
            <ul>
                <li class="active">Painel</li>
                <li>Mapa da Planta</li>
                <li>Inventário</li>
                <li>Alertas</li>
                <li>Histórico</li>
            </ul>
        </aside>

        <!-- CONTEÚDO -->
        <main class="main" id="main">

            <!-- TOPO -->
            <div class="topbar">

                <button class="menu-btn" id="menu-btn">
                    ☰
                </button>

                <h1>Painel Geral</h1>

            </div>
            <!-- Cards -->
            <div class="cards">
                <div class="card blue">Total Rastreada: 40</div>
                <div class="card green">Em uso: 30</div>
                <div class="card yellow">Disponíveis: 20</div>
                <div class="card red">Não localizadas: 10</div>
            </div>

            <!-- Painéis -->
            <div class="painis">

                <div class="box">FERRAMENTAS POR ZONA</div><br>

                <div class="box">

                    <div class="titulo">
                        DISTRIBUIÇÃO DE STATUS
                    </div>

                    <div class="status">
                        <div class="nome azul">Em uso</div>

                        <div class="barra">
                            <div class="progresso azul-barra"></div>
                        </div>

                        <div class="valor azul">40</div>
                    </div>

                    <div class="status">
                        <div class="nome verde">Disponível</div>

                        <div class="barra">
                            <div class="progresso verde-barra"></div>
                        </div>

                        <div class="valor verde">30</div>
                    </div>

                    <div class="status">
                        <div class="nome amarelo">Manutenção</div>

                        <div class="barra">
                            <div class="progresso amarelo-barra"></div>
                        </div>

                        <div class="valor amarelo">20</div>
                    </div>

                    <div class="status">
                        <div class="nome vermelho">Não localizada</div>

                        <div class="barra">
                            <div class="progresso vermelho-barra"></div>
                        </div>

                        <div class="valor vermelho">10</div>
                    </div>

                </div><br>

                <div class="box">ÚLTIMAS MOVIMENTAÇÕES</div><br>
                <div class="box">ALERTAS ATIVOS</div><br>

            </div>


    </div>
    <script src="sistema.js"></script>
</body>

</html>
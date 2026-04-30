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
      <h2>RFID LIVE</h2>
      <ul>
        <li class="active">Painel</li>
        <li>Mapa da Planta</li>
        <li>Inventário</li>
        <li>Alertas</li>
        <li>Histórico</li>
      </ul>
    </aside>
    
    <!--Conteúdo-->
    <main class="main">

    <h1>Painel Geral</h1>
   
    <!-- Cards -->
    <div class="cards">
        <div class="card">Total Rastreada: 0</div>
        <div class="card">Em uso: 0</div>
        <div class="card">Disponíveis: 0</div>
        <div class="card red">Não localizadas: 0</div>
    </div>

    <!-- Painéis -->
    <div class="painéis">
        <div class="box">Ferramentas por zona</div>
        <div class="box">Distribuição de status</div>
        <div class="box">Últimas movimentações</div>
        <div class="box">Alertas ativos</div>
    </div>

    <div class= "trilho" id="trilho">
        <div class= "indicador"></div>
    </div>

    <script src="main.js"></script>


</div>
</body>
</html>
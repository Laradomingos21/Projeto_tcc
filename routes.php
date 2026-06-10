<?php
// routes.php
 
$url = $_GET['url'] ?? 'painel';
$partes = explode('/', trim($url, '/'));
 
$controllerNome = $partes[0] ?? 'painel';
$acao           = $partes[1] ?? 'index';
$id             = $partes[2] ?? null;
 
$controllers = [
    'ferramenta'   => 'controller/ferramentaController.php',
    'funcionario'  => 'controller/funcionarioController.php',
    'movimentacao' => 'controller/movimentacaoController.php',
];
 
if (isset($controllers[$controllerNome])) {
    require_once $controllers[$controllerNome];
    $ctrl = new $controllerNome();
 
    if (method_exists($ctrl, $acao)) {
        $ctrl->$acao($id);
    } else {
        http_response_code(404);
        echo "Ação não encontrada.";
    }
} else {
    http_response_code(404);
    echo "Página não encontrada.";
}
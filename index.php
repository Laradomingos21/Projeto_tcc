<?php
// index.php (raiz do projeto)

session_start();

require_once 'config/conexao.php';
require_once 'config/autenticar.php';
require_once 'routes.php';
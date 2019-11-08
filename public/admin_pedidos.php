<?php

require_once 'config/index.php';
require_once 'config/checkAuth.php';

// Listar
$pedido = new Livraria_Pedido();
$pedidos = $pedido->fetchAll();

$smarty->assign('pedidos',$pedidos);

//display
$smarty->assign('content','admin/pedidos.phtml');
$smarty->display('admin/layout.phtml');
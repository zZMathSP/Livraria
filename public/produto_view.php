<?php

require_once 'config/index.php';

if (!isset($_REQUEST['id']))
    $_REQUEST['id'] = null;

$categorias = new Livraria_Categoria();
$smarty->assign('categorias', $categorias->fetchAll());

if ($_REQUEST['id']>0) {
    $produtos = new Livraria_Produto();
    $produtos->setId($_REQUEST['id']);
    $smarty->assign('produto',$produtos->find());
}

$smarty->assign('content', 'default/produto_view.phtml');
$smarty->display('default/layout.phtml');
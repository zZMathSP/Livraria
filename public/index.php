<?php

require_once 'config/index.php';

if (!isset($_REQUEST['categoria_id']))
    $_REQUEST['categoria_id'] = null;

$categorias = new Livraria_Categoria();
$smarty->assign('categorias', $categorias->fetchAll());

$produtos = new Livraria_Produto();
if ($_REQUEST['categoria_id']>0) {
    $lista_produtos = $produtos->getByCategoriaId($_REQUEST['categoria_id']);
    $categoria = new Livraria_Categoria();
    $categoria->setId($_REQUEST['categoria_id']);
    $smarty->assign('titulo',$categoria->find());
}
else
    $lista_produtos = $produtos->fetchAll();

$smarty->assign('produtos',$lista_produtos);

$smarty->assign('content', 'default/home.phtml');
$smarty->display('default/layout.phtml');
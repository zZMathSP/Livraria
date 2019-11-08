<?php

require_once 'config/index.php';

if (!isset($_REQUEST['produto_id'])) {
    header("location: index.php");
    exit;
}

$categorias = new Livraria_Categoria();
$smarty->assign('categorias', $categorias->fetchAll());

$produto = new Livraria_Produto(array('id' => $_REQUEST['produto_id']));
$p = $produto->find();
$smarty->assign('produto', $p);

if(isset($_REQUEST['submit'])) {
    $_REQUEST['data']['valor'] = $p['valor'];
    $_REQUEST['data']['produto'] = $p['nome'];
    $pedido = new Livraria_Pedido($_REQUEST['data']);
    $pedido_id = $pedido->save();
    $_REQUEST['data']['valor'] = number_format($p['valor'],2,"","");
    $smarty->assign('pedido_id',$pedido_id.'-'.  time());
    $smarty->assign('data',$_REQUEST['data']);
}

$smarty->assign('content', 'default/comprar.phtml');
$smarty->display('default/layout.phtml');
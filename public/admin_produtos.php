<?php

require_once 'config/index.php';
require_once 'config/checkAuth.php';

if (!isset($_REQUEST['delete']))
    $_REQUEST['delete'] = -1;

if (!isset($_REQUEST['edit']))
    $_REQUEST['edit'] = -1;

if ($_REQUEST['edit'] > 0) {
    $produto = new Livraria_Produto();
    $produto->setId($_REQUEST['edit']);

    $smarty->assign('produto', $produto->find());
}

// Salvar 
if (isset($_REQUEST['submit'])) {
    $produto = new Livraria_Produto($_REQUEST['data']);
    if ($_REQUEST['id'] > 0)
        $produto->setId($_REQUEST['id']);

    if ($produto->save()) {
        $destino = "images/produtos/".$produto->getId().".jpg";
        if (move_uploaded_file($_FILES['file']['tmp_name'], $destino)) {
            echo "<script>window.alert('Arquivo enviado com sucesso.');</script>";
        }
    }

    $smarty->assign('produto', "");
    $_REQUEST['edit'] = -1;
}

// Deletar
if ($_REQUEST['delete'] > 0) {
    $produto = new Livraria_Produto();
    $produto->setId($_REQUEST['delete']);
    $produto->delete();
}

// Listar
$categorias = new Livraria_Categoria();
$smarty->assign('categorias', $categorias->fetchAll());

$produtos = new Livraria_Produto();
$smarty->assign('produtos', $produtos->fetchAll());
$smarty->assign('edit', $_REQUEST['edit']);

//display
$smarty->assign('content', 'admin/produtos.phtml');
$smarty->display('admin/layout.phtml');
<?php

require_once 'config/index.php';
require_once 'config/checkAuth.php';


if(!isset($_REQUEST['delete']))
    $_REQUEST['delete'] = -1;

if(!isset($_REQUEST['edit'])) 
    $_REQUEST['edit'] = -1;

if($_REQUEST['edit']>0) {
    $categoria = new Livraria_Categoria();
    $categoria->setId($_REQUEST['edit']);
    $smarty->assign('categoria',$categoria->find());
}

// Salvar 
if(isset($_REQUEST['submit'])) {
    $categoria = new Livraria_Categoria($_REQUEST['data']);
    if($_REQUEST['id']>0)
        $categoria->setId ($_REQUEST['id']);
    $categoria->save();
    
    $smarty->assign('categoria',"");
    $_REQUEST['edit'] = -1;
}

// Deletar
if($_REQUEST['delete'] > 0) {
    $categoria = new Livraria_Categoria();
    $categoria->setId($_REQUEST['delete']);
    $categoria->delete();
}

// Listar
$categorias = new Livraria_Categoria();

$smarty->assign('categorias',$categorias->fetchAll());
$smarty->assign('edit',$_REQUEST['edit']);

//display
$smarty->assign('content','admin/categorias.phtml');
$smarty->display('admin/layout.phtml');
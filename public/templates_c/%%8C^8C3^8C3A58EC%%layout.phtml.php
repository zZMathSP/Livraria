<?php /* Smarty version 2.6.26, created on 2010-08-27 18:31:51
         compiled from admin/layout.phtml */ ?>
<html>
    <head>
        <title>Livraria School of Net</title>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" >
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/form.css">
        <link rel="stylesheet" type="text/css" href="styles/frontend.css">
    </head>

    <body>

        <div id="barrinha"></div>
        <div id="estrutura">


            <div id="topo">
                <h1>Livraria SON</h1>
                <h2>Sistema administrativo</h2>
            </div>

            <div class="clearfix"></div>

            <div id="barra">
                <div id="menu-horizontal">
                    <ul class="navigation">
                        <li><a href="admin_pedidos.php">Pedidos</a></li>
                        <li><a href="admin_produtos.php">Produtos</a></li>
                        <li class="active"><a href="admin_categorias.php">Categorias</a></li>
                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>


            <div id="content">

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['content'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>

        </div>
        <div id="footer">
            <p>Livraria SON - Todos os direitos reservados</p></div>
    </body>
</html>
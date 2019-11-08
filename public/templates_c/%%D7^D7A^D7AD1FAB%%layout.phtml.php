<?php /* Smarty version 2.6.26, created on 2010-08-27 16:00:42
         compiled from default/layout.phtml */ ?>
<html>
    <head>
        <title>Livraria School of Net</title>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" >
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/frontend.css">
        <link rel="stylesheet" type="text/css" href="styles/form.css">

    </head>

    <body>

        <div id="barrinha"></div>
        <div id="estrutura">


            <div id="topo">
                <h1>ZfShop</h1>
                <div id="menu-superior">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>

            <div id="barra">
                <div id="menu-horizontal">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categorias']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <li><a href="index.php?categoria_id=<?php echo $this->_tpl_vars['categorias'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['categorias'][$this->_sections['i']['index']]['nome']; ?>
</a></li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>
            </div>

            <div id="conteudo">

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['content'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            </div>

            <div class="clearfix"></div>

        </div>
        <div id="footer">
            <p>Livraria SON - Todos os direitos reservados</p></div>
    </body>
</html>
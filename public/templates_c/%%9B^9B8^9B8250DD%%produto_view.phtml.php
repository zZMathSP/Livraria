<?php /* Smarty version 2.6.26, created on 2010-08-27 12:34:42
         compiled from default/produto_view.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'default/produto_view.phtml', 16, false),)), $this); ?>
<h3><?php echo $this->_tpl_vars['produto']['nome']; ?>
</h3>
<div id="product-view">
    <div id="product-image">

        <img src="images/produtos/<?php echo $this->_tpl_vars['produto']['id']; ?>
.jpg">

    </div>

    <div id="produtct-description">
        <?php echo $this->_tpl_vars['produto']['descricao']; ?>


    </div>
    <div class="content-line clearfix"></div>
    <div class="valor">

        Somente por: R$ <?php echo ((is_array($_tmp=$this->_tpl_vars['produto']['valor'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>

    </div>
    <div class="carrinho">
        <a href="comprar.php?produto_id=<?php echo $this->_tpl_vars['produto']['id']; ?>
">Comprar</a>
    </div>
</div>
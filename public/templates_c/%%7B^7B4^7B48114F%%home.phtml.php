<?php /* Smarty version 2.6.26, created on 2010-08-27 12:17:53
         compiled from default/home.phtml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'default/home.phtml', 16, false),)), $this); ?>
<h3><?php if ($this->_tpl_vars['titulo']['nome']): ?><?php echo $this->_tpl_vars['titulo']['nome']; ?>
<?php else: ?>Home<?php endif; ?></h3>

<div id="list-products">
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['produtos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <dl>
        <dd>
            <a href="produto_view.php?id=<?php echo $this->_tpl_vars['produtos'][$this->_sections['i']['index']]['id']; ?>
">
                <img src="images/produtos/<?php echo $this->_tpl_vars['produtos'][$this->_sections['i']['index']]['id']; ?>
.jpg">
            </a>
        </dd>
        <dt>
            <a href="produto_view.php?id=<?php echo $this->_tpl_vars['produtos'][$this->_sections['i']['index']]['id']; ?>
">
                <?php echo $this->_tpl_vars['produtos'][$this->_sections['i']['index']]['nome']; ?>

            </a>
        <div class="valor">
            Somente por: R$ <?php echo ((is_array($_tmp=$this->_tpl_vars['produtos'][$this->_sections['i']['index']]['valor'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>

        </div>
        </dt>
    </dl>
    <?php endfor; else: ?>
        Nenhum produto localizado
    <?php endif; ?>
    <div class="clearfix"></div>
</div>
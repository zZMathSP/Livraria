<?php /* Smarty version 2.6.26, created on 2010-08-24 16:14:56
         compiled from admin/categorias.phtml */ ?>
<h3>Categorias</h3>

<p><a href="?edit=0">Adicionar</a><br></p>

<?php if ($this->_tpl_vars['edit'] >= 0): ?>
<form method="post">
    <label>Nome: <input type="text" name="data[nome]" value="<?php echo $this->_tpl_vars['categoria']['nome']; ?>
"></label>
    <label><input type="submit" name="submit" value="Salvar" style="width: 60px;"></label>
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['edit']; ?>
">
</form>

<div class="clearfix"></div>

<?php endif; ?>

<table>
    <thead>
        <tr>
            <th style="width: 5%;">ID</th>
            <th>Nome</th>
            <th style="width: 100px;">Ação</th>
        </tr>
    </thead>
    <tbody>
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
        <tr>
            <td><?php echo $this->_tpl_vars['categorias'][$this->_sections['i']['index']]['id']; ?>
</td>
            <td><?php echo $this->_tpl_vars['categorias'][$this->_sections['i']['index']]['nome']; ?>
</td>
            <td>
                <a href="?edit=<?php echo $this->_tpl_vars['categorias'][$this->_sections['i']['index']]['id']; ?>
"><img src="images/icons/edit.png"></a>
                &nbsp;
                <a href="?delete=<?php echo $this->_tpl_vars['categorias'][$this->_sections['i']['index']]['id']; ?>
"><img src="images/icons/delete.png"></a>
            </td>
        </tr>
        <?php endfor; endif; ?>
    </tbody>
</table>
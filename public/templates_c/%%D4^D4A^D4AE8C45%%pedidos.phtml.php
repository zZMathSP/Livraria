<?php /* Smarty version 2.6.26, created on 2010-08-27 18:38:58
         compiled from admin/pedidos.phtml */ ?>
<h3>Pedidos</h3>

<table>
    <thead>
        <tr>
            <th style="width: 5%;">ID</th>
            <th>Produto</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['pedidos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td><?php echo $this->_tpl_vars['pedidos'][$this->_sections['i']['index']]['id']; ?>
</td>
            <td><?php echo $this->_tpl_vars['pedidos'][$this->_sections['i']['index']]['produto']; ?>
</td>
            <td><?php echo $this->_tpl_vars['pedidos'][$this->_sections['i']['index']]['nome']; ?>
</td>
            <td><?php echo $this->_tpl_vars['pedidos'][$this->_sections['i']['index']]['email']; ?>
</td>
            <td><?php if ($this->_tpl_vars['pedidos'][$this->_sections['i']['index']]['status']): ?><?php echo $this->_tpl_vars['pedidos'][$this->_sections['i']['index']]['status']; ?>
<?php else: ?>Pendente<?php endif; ?></td>
        </tr>
        <?php endfor; endif; ?>
    </tbody>
</table>
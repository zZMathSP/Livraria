<?php /* Smarty version 2.6.26, created on 2010-08-27 19:23:22
         compiled from default/comprar.phtml */ ?>
<?php if (! $this->_tpl_vars['pedido_id']): ?>
<h3>Efetuar compra</h3>
<br>
<p><b>Produto: </b> <?php echo $this->_tpl_vars['produto']['nome']; ?>
</p>
<br>
<img src="https://www.moip.com.br/moiplabs/logo_moip.png">
<form method="post">
    <label>Nome: <input type="text" name="data[nome]"></label>
    <label>Email: <input type="text" name="data[email]"></label>
    <input type="hidden" name="data[produto_id]" value="<?php echo $this->_tpl_vars['produto']['id']; ?>
">
    <label><input type="submit" name="submit" value="Continuar"></label>
    
</form>

<div class="clearfix"></div>
<?php else: ?>

<form id="frm" action="https://www.moip.com.br/PagamentoMoIP.do" method="post" target="_blank">
    <input type="hidden" name="id_carteira" value="schoolofnet">
    <input type="hidden" name="valor" value="<?php echo $this->_tpl_vars['data']['valor']; ?>
">
    <input type="hidden" name="nome" value="<?php echo $this->_tpl_vars['data']['nome']; ?>
">
    <input type="hidden" name="descricao" value="<?php echo $this->_tpl_vars['data']['produto']; ?>
">
    <input type="hidden" name="id_transacao" value="<?php echo $this->_tpl_vars['pedido_id']; ?>
">
    <input type="hidden" name="pagador_email" value="<?php echo $this->_tpl_vars['data']['email']; ?>
">
</form>
<script>document.getElementById("frm").submit();</script>

<?php endif; ?>
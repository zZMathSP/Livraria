<?php /* Smarty version 2.6.26, created on 2010-08-26 17:11:39
         compiled from admin/auth.phtml */ ?>
<h3>Autenticação</h3>
<br>
<b><?php echo $this->_tpl_vars['error']; ?>
</b>

<form method="post">
    <label>Email: <input type="text" name="data[email]" value="<?php echo $this->_tpl_vars['data']['email']; ?>
"></label>
    <label>Senha: <input type="password" name="data[password]" ></label>
    <label><input type="submit" value="Autenticar" name="submit"></label>
</form>
<?php

class Livraria_Categoria extends Livraria_Db_Abstract {

    protected $_table = "categorias";
    
    private $nome = null;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    protected function _insert() {
        $db = $this->getDb();
        $stm = $db->prepare('Insert into ' . $this->_table . '(nome) Values(:nome)');
        $stm->bindValue(':nome', $this->getNome());
        $stm->execute();
    }

    protected function _update() {
        $db = $this->getDb();
        $stm = $db->prepare('update ' . $this->_table . ' set nome=:nome where id=:id');
        $stm->bindValue(':id', $this->getId());
        $stm->bindValue(':nome', $this->getNome());
        $stm->execute();
    }

}
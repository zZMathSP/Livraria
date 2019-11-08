<?php

class Livraria_Produto extends Livraria_Db_Abstract {

    protected $_table = "produtos";
    private $categoria_id = null;
    private $nome = null;
    private $autor = null;
    private $editora = null;
    private $descricao = null;
    private $valor = null;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCategoria_id() {
        return $this->categoria_id;
    }

    public function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    protected function _insert() {
        $db = $this->getDb();
        $stm = $db->prepare('Insert into ' . $this->_table . '(categoria_id,nome,autor,editora,descricao,valor)
            Values(:categoria_id,:nome,:autor,:editora,:descricao,:valor)');

        $stm->bindValue(':categoria_id', $this->getCategoria_id());
        $stm->bindValue(':nome', $this->getNome());
        $stm->bindValue(':autor', $this->getAutor());
        $stm->bindValue(':editora', $this->getEditora());
        $stm->bindValue(':descricao', $this->getDescricao());
        $stm->bindValue(':valor', $this->getValor());

        return $stm->execute();
    }

    protected function _update() {
        $db = $this->getDb();
        $stm = $db->prepare('update ' . $this->_table . ' 
            set categoria_id=:categoria_id, nome=:nome,autor=:autor,editora=:editora,
            descricao=:descricao,valor=:valor where id=:id');

        $stm->bindValue(':id', $this->getId());
        $stm->bindValue(':categoria_id', $this->getCategoria_id());
        $stm->bindValue(':nome', $this->getNome());
        $stm->bindValue(':autor', $this->getAutor());
        $stm->bindValue(':editora', $this->getEditora());
        $stm->bindValue(':descricao', $this->getDescricao());
        $stm->bindValue(':valor', $this->getValor());

        return $stm->execute();
    }

    public function getByCategoriaId($categoria_id) {
        $db = $this->getDb();
        $stm = $db->prepare('select * from '.$this->_table.' where categoria_id=:categoria_id');
        $stm->bindValue(':categoria_id',$categoria_id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    public function delete() {
        parent::delete();
        if (file_exists("images/produtos/" . $this->getId() . ".jpg"))
            unlink("images/produtos/" . $this->getId() . ".jpg");
    }

}
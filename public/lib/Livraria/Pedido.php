<?php

class Livraria_Pedido extends Livraria_Db_Abstract {

    protected $_table = "pedidos";
    private $produto_id = null;
    private $valor = null;
    private $nome = null;
    private $email = null;
    private $status = null;
    private $transacao = null;

    public function getProduto_id() {
        return $this->produto_id;
    }

    public function setProduto_id($produto_id) {
        $this->produto_id = $produto_id;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getTransacao() {
        return $this->transacao;
    }

    public function setTransacao($transacao) {
        $this->transacao = $transacao;
    }

    protected function _insert() {
        $db = $this->getDb();
        try {
            $stm = $db->prepare('Insert into ' . $this->_table .
                            '(produto_id,valor,nome,email) Values(:produto_id,:valor,:nome,:email)');
            $stm->bindValue(':produto_id', $this->getProduto_id());
            $stm->bindValue(':valor', $this->getValor());
            $stm->bindValue(':nome', $this->getNome());
            $stm->bindValue(':email', $this->getEmail());
            $stm->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    protected function _update() {
        $db = $this->getDb();
        $stm = $db->prepare('update ' . $this->_table .
                        ' set status=:status, transacao=:transacao where id=:id');
        $stm->bindValue(':id', $this->getId());
        $stm->bindValue(':status', $this->getStatus());
        $stm->bindValue(':transacao', $this->getTransacao());
        $stm->execute();
    }

    public function fetchAll() {
        $db = $this->getDb();
        $stm = $db->prepare("select * from " . $this->_table);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        $i = 0;
        foreach ($result as $v) {
            if ($v['produto_id']) {
                $produto = new Livraria_Produto();
                $produto->setId($v['produto_id']);
                $p = $produto->find();
                $result[$i]['produto'] = $p['nome'];
            }
            $i++;
        }
        
        return $result;
    }

}
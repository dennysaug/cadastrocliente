<?php


class Cliente
{
    public $nome;
    public $cpf;
    public $data_nascimento;
    public $email;
    public $telefone;


    public function geraDezClientes()
    {

        for($i=1;$i<=10;$i++) {
            $zero = ($i>9) ? '' : '0';
            $obj['nome'] = 'Cliente - ' . $i;
            $obj['cpf'] = '999.888.777-' . $zero . $i;
            $obj['data_nascimento'] = $zero . "{$i}/0" . rand(1,9) . '/1945';
            $obj['email'] = "user{$i}@mail.com.br";
            $obj['telefone'] = "32".rand(1,9)."4-".rand(1,9).rand(1,9).rand(1,9).rand(1,9);

            $voCliente[] = (object) $obj;
            unset($obj);
        }

        if(isset($voCliente))
            return $voCliente;

        return array();
    }




}
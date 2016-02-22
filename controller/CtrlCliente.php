<?php

class CtrlCliente {
    public function valida(Cliente $cliente){
        $erros = "";
        if ($cliente->getNome() == ""){
            $erros .= "Nome em branco. <br>";
        }

        if ($cliente->getEmail() == ""){
            $erros .= "E-mail em branco. <br>";
        }

        if ($cliente->getCpf() == ""){
            $erros .= "CPF em branco. <br>";
        } else if (strlen($cliente->getCpf())!=14){
                $erros.="CPF curto ou longo. verifique a quantidade atual(". strlen($cliente->getCpf()).")<br>";
        }

        if ($cliente->getDataNasc() == ""){
            $erros .= "Data de Nascimento em branco. <br>";
        }

        if ($cliente->getPw1() == ""){
            $erros .= "Senha em branco. <br>";
        }

        return $erros;
    }
}

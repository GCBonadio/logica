<?php

$dados = array(
    "nome" => "João",
    "nasc" => "1990-01-01",
    "documentos" => array(
        "rg" => "123456",
        "cpf" => "123.456.789-00",
        "cnh" => "123456789"
    ),
    "endereço" => array(
        "tipo" => "Residencial",
        "logradouro" => "Rua 1",
        "num" => "123",
        "complemento" => "Casa",
        "bairro" => "Centro",
        "cidade" => "São Paulo",
        "uf" => "SP",
        "cep" => "12345-678"
    ),
    "filiacao" => array(
        "nome_pai" => "José",
        "nome_mae" => "Maria"
    ),
    "contatos" => array(
        "celular" => "11 9 1234-5678",
        "fixo" => "11 1234-5678",
        "email" => "joao@email.com"
    )

);


echo "Ficha de cadastro de " . $dados['nome'] . "<br>";
echo "Nascimento: " . $dados['nasc'] . "<br>";
echo "Documentos: <br>";
echo "  RG: " . $dados['documentos']['rg'] . "<br>";
echo "  CPF: " . $dados['documentos']['cpf'] . "<br>";
echo "  CNH: " . $dados['documentos']['cnh'] . "<br>";
echo "Endereço: <br>";
echo "  Tipo: " . $dados['endereço']['tipo'] . "<br>";
echo "  Logradouro: " . $dados['endereço']['logradouro'] . "<br>";
echo "  Número: " . $dados['endereço']['num'] . "<br>";
echo "  Complemento: " . $dados['endereço']['complemento'] . "<br>";
echo "  Bairro: " . $dados['endereço']['bairro'] . "<br>";
echo "  Cidade: " . $dados['endereço']['cidade'] . "<br>";
echo "  UF: " . $dados['endereço']['uf'] . "<br>";
echo "  CEP: " . $dados['endereço']['cep'] . "<br>";
echo "Filiação: <br>";
echo "  Pai: " . $dados['filiacao']['nome_pai'] . "<br>";
echo "  Mãe: " . $dados['filiacao']['nome_mae'] . "<br>";
echo "Contatos: <br>";
echo "  Celular: " . $dados['contatos']['celular'] . "<br>";
echo "  Fixo: " . $dados['contatos']['fixo'] . "<br>";
echo "  Email: " . $dados['contatos']['email'] . "<br>";




?>
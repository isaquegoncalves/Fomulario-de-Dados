<?php
require_once "conexao.php";

###### APAGAR REGISTROS DA TABELA #####
function apagar_dados($conn){
    $instrucaoSQL = 'TRUNCATE TABLE cadastro';
    $resultado = mysqli_query($conn, $instrucaoSQL);
}
#######################################

//==========TRATAMENTO DOS DADOS RECEBIDOS(START)==========
//-------------CONTATO(start)-------------
    if ($_POST['nome'] != null){
        $nome = $_POST['nome'];
    } else {
        echo 'O nome não foi informado.<br>';
    }

    if ($_POST['email'] != null){
        $email = $_POST['email'];
    } else {
        echo 'O email não foi informado.<br>';
    }

    if ($_POST['tel'] != null){
        $tel = $_POST['tel'];
    } else {
        echo 'O número de telefone não foi informado.<br>';
    }
//--------------CONTATO(end)--------------


//-------------ENDEREÇO(start)------------------
    if($_POST['cep'] != null){
        $cep = $_POST['cep'];
    } else {
        echo 'O CEP não foi informado.';
    }

    if($_POST['pais'] != null){
        $pais = $_POST['pais'];
    } else {
        echo 'O País não foi informado.';
    }

    if($_POST['estado'] != null){
        $estado = $_POST['estado'];
    } else {
        echo 'O Estado não foi informado.';
    }

    if($_POST['cidade'] != null){
        $cidade = $_POST['cidade'];
    } else {
        echo 'A Cidade não foi informada.';
    }

    if($_POST['bairro'] != null){
        $bairro = $_POST['bairro'];
    } else {
        echo 'O Bairro não foi informado.';
    }

    if($_POST['rua'] != null){
        $rua = $_POST['rua'];
    } else {
        echo 'A Rua não foi informada.';
    }
//-------------ENDEREÇO(end)------------------

//-------------IDENTIFICAÇÃO(start)------------------
    if($_POST['rg'] != null){
        $rg = $_POST['rg'];
    } else {
        echo 'O RG não foi informado.';
    }

    if($_POST['cpf'] != null){
        $cpf = $_POST['cpf'];
    } else {
        echo 'O CPF não foi informado.';
    }

    if($_POST['nasc'] != null){
        $nasc = $_POST['nasc'];
    } else {
        echo 'A Data de Nascimento não foi informada.';
    }

    if($_POST['genero'] != null){
        $genero = $_POST['genero'];
    } else {
        echo 'O Gênero não foi informado.';
    }
//-------------IDENTIFICAÇÃO(end)------------------

//-------------PROFISSIONAIS(start)------------------
    if($_POST['cargo'] != null){
        $cargo = $_POST['cargo'];
    } else {
        echo 'O Cargo não foi informado.';
    }

    if($_POST['empresa'] != null){
        $empresa = $_POST['empresa'];
    } else {
        echo 'A Empresa não foi informada.';
    }

    if($_POST['setor'] != null){
        $setor = $_POST['setor'];
    } else {
        echo 'O Setor não foi informado.';
    }
//-------------PROFISSIONAIS(end)------------------

//==========TRATAMENTO DOS DADOS RECEBIDOS(END)===========


if(isset($_POST['apagar'])){//Limpar Banco
    apagar_dados($conn);
    echo 'Dados Excluídos!<br>';
} else {
    echo '<strong>Erro ao Excluir Dados!</strong><br>';
}

//========================ENVIO DE DADOS============================
$instrucaoSQL = "INSERT INTO cadastro (nome, email, tel, pais, estado, cidade, cep, bairro, rua, rg, cpf, nasc, genero, cargo, empresa, setor) VALUES ('$nome', '$email', '$tel', '$pais', '$estado', '$cidade', '$cep', '$bairro', '$rua', '$rg', '$cpf', '$nasc', '$genero', '$cargo', '$empresa', '$setor')";
$resultado = mysqli_query($conn, $instrucaoSQL);

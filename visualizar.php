<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once "conexao.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Online</title>
    <link rel="stylesheet" href="Design/tabela.css">
</head>
<body>
    <main>
        <h1>Registros
            <p>
                Abaixo podemos conferir todos os dados registrados no banco até o momento.
            </p>
        </h1>
        
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>País</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Bairro</th>
                    <th>Rua</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Nascimento</th>
                    <th>Gênero</th>
                    <th>Cargo</th>
                    <th>Empresa</th>
                    <th>Setor</th>
                </tr>
                </thead>
            
            <tbody>
                <?php #--Construtor de Linhas--
                $instrucaoSQL = "SELECT * FROM cadastro";
                $resultadoSQL =  mysqli_query($conn, $instrucaoSQL);

                while ($linha = mysqli_fetch_assoc($resultadoSQL)){
                    echo "<tr>";
                    echo "<td>" . $linha['id'] . "</td>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . $linha['tel'] . "</td>";
                    echo "<td>" . $linha['pais'] . "</td>";
                    echo "<td>" . $linha['estado'] . "</td>";
                    echo "<td>" . $linha['cidade'] . "</td>";
                    echo "<td>" . $linha['cep'] . "</td>";
                    echo "<td>" . $linha['bairro'] . "</td>";
                    echo "<td>" . $linha['rua'] . "</td>";
                    echo "<td>" . $linha['rg'] . "</td>";
                    echo "<td>" . $linha['cpf'] . "</td>";
                    echo "<td>" . $linha['nasc'] . "</td>";
                    echo "<td>" . $linha['genero'] . "</td>";
                    echo "<td>" . $linha['cargo'] . "</td>";
                    echo "<td>" . $linha['empresa'] . "</td>";
                    echo "<td>" . $linha['setor'] . "</td>";
                    echo "</tr>";
                } 
                ?>
            </tbody> 
        </table>
        <a href="index.html">Retornar ao Formulário</a>
    </main>
</body>
</html>
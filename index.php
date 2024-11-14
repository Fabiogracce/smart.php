<?php
    namespace PHP\Modelo;

?>

<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página Principal</title>
    </head>
    <body>

        <img src="imagem/smartCapa2.jpg"/>

        <form method="POST">
            <label>Código: </label>
            <input type="number" name="codigo" id="codigo"><br><br>
 
            <label>Nome: </label>
            <input type="text" name="nome" id="nome"><br><br>
 
            <label>Endereço: </label>
            <input type="text" name="endereco" id="endereco"><br><br>
 
            <label>Telefone: </label>
            <input type="text" name="telefone" id="telefone"><br><br>

            <label>CPF: </label>
            <input type="text" name="cpf" id="cpf"><br><br>

            <label>Carterinha: </label>
            <input type="text" name="carterinha" id="carterinha"><br><br>
 
            <button type="submit">Cadastrar  
            <?php

                $conexao = new conexao();//conectando bco

                //pegar dados do formulario
                $codigo = $_POST['codigo'];
                $nome   = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $CPF = $_POST['cpf'];
                $Carterinha = $_POST['carterinha']

                //chamar classe inserir
                
            ?>
            </button>  
        </form><!-- Fim do formulário -->

        <br><br>
        <a href="menu.php"><button>Voltar</button></a>
    </body>
</html>
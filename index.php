<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Pokemons</title>
    <link rel="icon" href="IMG/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Listagem Pokemons</h1>
    </header>
    <section>
        <div>
        <?php
        include "PHP/conexao.php";
        $query = mysqli_query($sql,"select * from pokemons")
        ?>
            <table border = "2" class="tabela" bordercolor=#ffffff>
                <tr>
                    <td align = "center"><font color = 'white'>Treinador</td>
                    <td align = "center"><font color = 'white'>Pokemons_Capturados</td>
                    <td align = "center"><font color = 'white'>Pokemons_Guardados</td>
                    <td align = "center"><font color = 'white'>Pokemons_Em_Uso</td>
                    <td align = "center"><font color = 'white'>Porcentagem_Em_Uso</td>
                </tr>
        </div>
        <div>

        </div>
    </section>
    <footer>
        <p>&copy; Nathan Ferreira</p>
    </footer>
    <?php 
        while($linha = mysqli_fetch_array($query)){

            $treinador = $linha['treinador'];
            $pokecap = $linha['pokemons_capturados'];
            $pokeguard = $linha['pokemons_guardados'];
            $pokeuso = $linha['poke_em_uso'];
            $porcenuso = $linha['porcentagem_em_uso'];


            echo "
                <tr> 
                    <td><font color=white> $treinador</td>
                    <td><font color=white> $pokecap</td>
                    <td><font color=white> $pokeguard</td>
                    <td><font color=white> $pokeuso</td>
                    <td><font color=white> $porcenuso</td>

                </tr>
            ";
        
        }
    ?>
</body>
</html>
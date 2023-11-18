<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar senha</title>
</head>
<body>
<h1>Página Inicial</h1>
    <?php
        $nome = $_POST["nome"];
        $senha = $_POST["senha"]; 

        if($nome == "debora" and $senha == "123"){
            header("Location: "."trabsim.php");
        }elseif($nome == "bernardo" and $senha == "123"){
            header("Location: "."trabsim.php");
        }elseif($nome == "maria" and $senha == "123"){
            header("Location: "."trabmedio.php");
        }else{
            header("Location: "."trabnao.php");
        }
    ?>
</body>
</html>
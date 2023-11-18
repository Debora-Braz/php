<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        body{
            box-sizing: border-box;
            margin: 20px;
        }
        form{
            background-color: rgba(80,80,80,70%);
            padding: 10px;
            margin: 5px;
            width: 50%;
    
        }
        label,input[type="text"], input[type="password"]{
            /* backgroud-color: rgba(100,100,100,30%)*/
            padding: 7px; /*area de escrita no forms*/
            margin: 3px; /*margem cinza*/
            width: 90%; /*largura do espaço da escrita*/
        }
    </style>

</head>
<body>
    <h1>PHP</h1>
    <h2>Exemplo 3</h2>
    <h3>Utilizando formulários<h3>
    <form action="trabrevist.php" method="POST">
        <label for="nome">Nome:</label>
        <input id="nome" type="text" name="nome"> <br>
        <label for="senha">Senha:</label>
        <input id="senha" type="password" name="senha"> <br>
        <input type="submit"> 
        

    </form>
</body>
</html>
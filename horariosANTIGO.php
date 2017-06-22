<html>
<?php
session_start();
?>
<head>
    <style>
    .letras{
        color: green;
        text-align: center;
        font-size: 40px;
        margin-top: 50px;
    }

    .letras1{
        color: red;
        text-align: center;
        font-size: 40px;
        margin-top: 20px;
    }

    .letras3{
        color: green;
        text-align: center;
        font-size: 40px;
        margin-top: 20px;
    }

        .botao {
    background-color: #008CBA; /* Blue */
    border-radius: 8px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }

    .button{
        text-align: center;
        margin-top: 150px;
    }
    </style>
</head>
<body>
<div class="letras">
<?php
date_default_timezone_set('America/Sao_Paulo');
$hora = date('H');
$minuto = date('i');
echo "A caixa foi aberta as: ". $_SESSION["hora"] .":". $_SESSION["minuto"] ."<br>";?>
</div>

<div class="letras1">
<?php echo "A caixa abriu novamente as: ". $_SESSION["hora1"] .":". $_SESSION["minuto1"] ."<br>";?>
</div>

<div class="letras3">
<?php echo "A caixa abriu novamente as: ". $_SESSION["hora2"] .":". $_SESSION["minuto2"] ."<br>";?>
</div>

<div class="button">

<form method="POST" action="index.php">
<input type="submit" class="botao" value="voltar">
</form>

</div>

</body>
</html>
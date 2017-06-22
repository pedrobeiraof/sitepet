<html>
<head>
    <style>
    input[type=text] {
    width: 200px;
    padding: 10px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

    input[type=text]:focus {
    border: 3px solid #555;
}    

    .letras{
        color: green;
        margin-left: 400px;
        font-size: 30px;
        margin-top: 50px;
    }
    .letras1{
        color: red;
        margin-left: 400px;
        font-size: 30px;
        margin-top: 50px;
    }
    .letras2{
        color: green;
        margin-left: 400px;
        font-size: 30px;
        margin-top: 50px;
    }


    .botao1{
        margin-left: 900px;
        margin-top: 40px;
    }

    .botao2{
        margin-left: 450px;
        margin-top: -45px;
    }

    .button1 {
    background-color: #008CBA; /* Green */
    border-radius: 8px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }

    .button2 {
    background-color: #4CAF50; /* Green */
    border-radius: 8px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }


        
    </style>
</head>
<div class="letras">
<form method="POST" action="salvar.php">
    <label>1ª Digite a hora que a caixa vai abrir:</label>
    <input type="text" name="hora" id="hora"><br>
    <label>1ª Digite o minuto que a caixa vai abrir:</label>
    <input type="text" name="minuto" id="minuto"><br><br>
</div>    
<div class="letras1">
    <label>2ª Digite a hora que a caixa vai abrir:</label>
    <input type="text" name="hora1" id="hora1"><br>
    <label>2ª Digite o minuto que a caixa vai abrir:</label>
    <input type="text" name="minuto1" id="minuto1"><br>
</div>
<div class="letras2">
    <label>2ª Digite a hora que a caixa vai abrir:</label>
    <input type="text" name="hora2" id="hora2"><br>
    <label>2ª Digite o minuto que a caixa vai abrir:</label>
    <input type="text" name="minuto2" id="minuto2"><br>
</div>
<div class="botao1">
    <input type="submit" class="button1" value="Alterar">
</div>
</form>
<div class="botao2">
<form method="POST" action="index.php">
    <input type="submit" class="button2" value="Voltar">    
</form>
</div>
</html>
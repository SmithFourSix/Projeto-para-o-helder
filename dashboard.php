<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.html';</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginal inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <nav>
        <div class="logo">
            Sistema ERP
        </div>

        <div class="menu-btn">
            <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
        </div>

        <ul>
            <li><a href="dashboard.php" class="active">Pagina inicial</a></li>
            <li><a href="inserir.html" >Inserir produtos</a></li>
            <li><a href="#" >Remover produto</a></li>
            <li><a href="#" >Estoque</a></li>
        </ul>
    </nav>
    <script src="./js/main.js"></script>
    


</body>
</html>
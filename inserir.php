<?php

session_start();
include('config.php');

$nome = $_POST["nome"];
$qtd = $_POST["qtd"];

$query = "INSERT INTO produtos (nome_produto, qtd_produto, data_cadastrado) VALUES ('{$nome}', '{$qtd}', now())";

$conn->query($query);//faz a consulta no banco de dados com a variavel $query
echo"<script type='text/javascript'>alert('Cadastro de produto realizado com sucesso.');window.location.href='dashboard.php';</script>";




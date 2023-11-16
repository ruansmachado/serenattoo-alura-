<<<<<<< HEAD
<?php 

    require "src/conexao-bd.php";
    require "src/Modelo/Produto.php";   
    require "src/Repositorio/ProdutoRepositorio.php"; 

    $produtoRepositorio = new ProdutoRepositorio($pdo);
    $produtoRepositorio->deletar($_POST['id']);

=======
<?php

require "src/conexao-bd.php";
require "src/Modelo/Produto.php";
require "src/Repositorio/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST['id']);

>>>>>>> 93ebc0107b0fa02b1ea99d8d04e3b233f7e83e2b
header("Location: admin.php");
<?php 
$nome = $_GET["nome"]; 
$preco = $_GET["preco"];

if (isset($nome) && isset($preco)) { //(isset) Essa variável foi definida e possui algum valor diferente de null
    echo $nome, $preco;
}else {
    echo  "Informe o nome e preço do produto" ;
}
?>
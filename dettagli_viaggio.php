<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Dettagli viaggio</title>
</head>
<body>
    <h1>Dettagli viaggio</h1>
<?php 
session_start();
$nome =$_POST["nome"];
$cognome =$_POST["cognome"];
$destinazione =$_POST["destinazione"];
$tipo =$_POST["tipo_viaggio"];

$_SESSION["nome"]=$nome;
$_SESSION["cognome"]=$cognome;
$_SESSION["destinazione"]=$destinazione;
$_SESSION["tipo_viaggio"]=$tipo;

if($tipo_viaggio == 'affari'){
    print("Buongiorno $nome $cognome");
    echo("Azienda : <input type='text' name='nome_azienda'>");
    echo("Durata_viaggio : <input type='text' name='durata_viaggio'>");
    echo("Budget :  <input type='text' name='budget'>");
    
}else {}
?>



</body>
</html>

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
$tipo_viaggio =$_POST["tipo_viaggio"];


setcookie("nome",$nome,time()+120);
setcookie("cognome",$cognome,time()+120);
setcookie("destinazione",$destinazione,time()+120);
setcookie("tipo_viaggio",$tipo_viaggio,time()+120);


echo("<form method='post' action='riepilogo_prenotazione.php'>");

if($tipo_viaggio == 'affari'){
    print("Buongiorno $nome $cognome <br><br>");
    echo("Azienda : <input type='text' name='nome_azienda'> <br><br>");
    echo("Durata viaggio : <input type='number' name='durata_viaggio'> <br><br>");
    echo("Budget :  <input type='number' name='budget'> <br><br>");
    echo ("<input type='submit'>");

}else if($tipo_viaggio == 'vacanze') {
    print("Buongiorno $nome $cognome <br><br>");
    echo("Numero persone :<input type='number' name='numero_persone'> <br><br>");
    echo("Tipo Allogio : <input type='text' name='tipo_allogio'> <br><br>");
    echo ("Inserisci l'attività prescelta: <br>");
    echo ("<input type='checkbox' name='attivita' value='turismo'>");
    echo ("<label for='attivita'> Turismo </label><br>");
    echo ("<input type='checkbox' name='attivita' value='sport'>");
    echo ("<label for='attivita'> Fare sport </label><br>");
    echo ("<input type='checkbox' name='attivita' value='musei'>");
    echo ("<label for='attivita'> Visitare museo </label><br><br>");
    echo ("<input type='submit'>"); 
}
echo ("</form>");
?>



</body>
</html>

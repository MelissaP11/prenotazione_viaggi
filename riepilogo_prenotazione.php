<DOCTYPE html>
    <html>
        <head>
        <title>Riepilogo prenotazione</title> 
        </head>
            <body>
            <h1>Riepilogo prenotazione</h1>

<?php
session_start();
$nome = $_COOKIE["nome"];
$cognome = $_COOKIE["cognome"];
$destinazione = $_COOKIE["destinazione"];
$tipo_viaggio = $_COOKIE["tipo_viaggio"];






if($tipo_viaggio == 'affari'){
    $azienda = $_POST["nome_azienda"];
    $durata_viaggio = $_POST["durata_viaggio"];
    $budget = $_POST["budget"];
    //$_SESSION["nome_azienda"]=$azienda;
    //$_SESSION["durata_viaggio"]=$durata_viaggio;
    //$_SESSION["budget"]=$budget;
    echo("Buongiorno $nome $cognome <br><br> 
    La tua destinazione è $destinazione e hai scelto 
    come tipo di viaggio hai scelto: $tipo_viaggio.
    L'azienda che hai scelto è $azienda e la durata del viaggio sarà $durata_viaggio.
    Il budget prescelto è $budget.");
}else if($tipo_viaggio == 'vacanze'){
    $n_persone = $_POST["numero_persone"];
    $tipo_allogio = $_POST["tipo_allogio"];
    $attivita = $_POST["attivita"];
    //$_SESSION["numero_persone"]=$n_persone;
    //$_SESSION["tipo_allogio"]=$tipo_allogio;
    //$_SESSION["attivita"]=$attivita;
    echo("Buongiorno $nome $cognome <br><br> 
    La tua destinazione è $destinazione e hai scelto 
    come tipo di viaggio hai scelto: $tipo_viaggio.
    Il numero di persone è $n_persone e come allogio hai scelto:$tipo_allogio. 
    Come attività da svolgere hai scelto: $attivita ");
}


?>
            </body>
            </html>
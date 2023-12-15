<DOCTYPE html>
    <html>
        <head>
        <title>Riepilogo prenotazione</title> 
        </head>
            <body>
            <h1>Riepilogo prenotazione</h1>

<?php
session_start();
$nome = $_SESSION["nome"];
$cognome = $_SESSION["cognome"];
$destinazione = $_SESSION["destinazione"];
$tipo_viaggio = $_SESSION["tipo_viaggio"];






if($tipo_viaggio == 'affari'){
    $azienda = $_POST["nome_azienda"];
    $durata_viaggio = $_POST["durata_viaggio"];
    $budget = $_POST["budget"];
    //$_SESSION["nome_azienda"]=$azienda;
    //$_SESSION["durata_viaggio"]=$durata_viaggio;
    //$_SESSION["budget"]=$budget;
    echo("Buongiorno $nome $cognome <br><br> 
    La tua destinazione è $destinazione e hai scelto 
    come tipo di viaggio : $tipo_viaggio.<br>
    L'azienda che hai scelto è $azienda e la durata del viaggio sarà $durata_viaggio.
    Il budget prescelto è $budget.");
}else if($tipo_viaggio == 'vacanze'){
    $n_persone = $_POST["numero_persone"];
    $tipo_alloggio = $_POST["tipo_alloggio"];
    $attivita = $_POST["attivita"];
    //$_SESSION["numero_persone"]=$n_persone;
    //$_SESSION["tipo_allogio"]=$tipo_allogio;
    //$_SESSION["attivita"]=$attivita;
    echo("Buongiorno $nome $cognome <br><br> 
    La tua destinazione è $destinazione e hai scelto 
    come tipo di viaggio :  $tipo_viaggio. <br>
    Il numero di persone è $n_persone e come allogio hai scelto : $tipo_alloggio. 
    Come attività da svolgere hai scelto: $attivita ");
}


?>
            </body>
            </html>
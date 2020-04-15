<?php
require_once('../db/initialize.php');

$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$wachtwoord = $_POST["wachtwoord"];
$telefoonnummer = $_POST["telefoonnummer"];
$straatnaam = $_POST["straatnaam"];
$huisnummer = $_POST["huisnummer"];
$postcode= $_POST["postcode"];
$woonplaats= $_POST["woonplaats"];


?>

<?php $pageTitle = "registratie pagina"; ?>



<?php if (!empty($voornaam) && 
    !empty($achternaam) && 
    !empty($email) && 
    !empty($wachtwoord) && 
    !empty($telefoonnummer) && 
    !empty($straatnaam) && 
    !empty($huisnummer) && 
    !empty($postcode) && 
    !empty($woonplaats)) {
    
   
    $sql = "INSERT INTO gebruiker SET Voornaam = '$voornaam', Achternaam = '$achternaam', Tussenvoegsel = '$tussenvoegsel',
    Email = '$email', Wachtwoord = '$wachtwoord', Telefoonnummer = '$telefoonnummer'
    , Straatnaam = '$straatnaam', Huisnummer  = '$huisnummer', Postcode = '$postcode', Woonplaats = '$woonplaats'"; 
    
    mysqli_query($db, $sql);

if(mysqli_affected_rows($db) === 1){

    ?>

    <div id="contentRegristratie">
        <p>Bedankt voor uw registratie</p>

        <p>Keer terug naar <a href="../../index.php">home</a></p>
    </div>
    <?php
    }
    // $tussenvoegsel $mysqli_query  
    
} else {
    header("Location: ../../registratie.php");
}


?>


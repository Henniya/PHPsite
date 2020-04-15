<?php
require_once('../../private/initialize.php');
require_once ("../../private/functions.php");
$ticketid = $_POST["ticketid"];
$naam = $_POST["naam"];
$ticketOmschrijving = $_POST["ticketOmschrijving"];
$prijs = $_POST["prijs"];
?>

<?php $pageTitle = "bevestigings pagina "; ?>



<div id="bevestigingContainer">
    <h2>Bevestigings pagina</h2>

    <div class="persoonsGegevens">
        <table>
            <tr>
                <td>ticketsid:</td>
                <td><?php echo $ticketid["ticketid"]; ?></td>
            </tr>
            <tr>
                <td>naam:</td>
                <td><?php echo $naam; ?></td>
            </tr>
            <tr>
                <td>ticketOmschrijving</td>
                <td><?php echo $ticketOmschrijving["ticketOmschrijving"]; ?></td>
            </tr>
            <tr>
                <td>prijs:</td>
                <td>&euro; <?php echo $prijs["prijs"] * $aantal; ?></td>
            </tr>
        </table>

        <p>Ga naar <a href="profile.php">profiel</a> voor een overzicht.</p>


    </div>
</div>
















<?php if (!empty($klantid) && !empty($aantal) && !empty($kaartenType)) {

    if ($db->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO bestellingen (KlantID, Aantal, TicketID, Totaal)
            VALUES ('$klantid', '$aantal', '$kaartenType', '$prijs')";

    $query = mysqli_query($db, $sql);


} else {
    header("Location: ../../public/index.php");
}
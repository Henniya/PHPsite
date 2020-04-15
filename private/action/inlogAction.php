<?php
require_once('../db/initialize.php');
$email = $_POST["Email"];
$wachtwoord = $_POST["Wachtwoord"]; ?>


<?php $pageTitle = "inlogpagina"; ?>

<div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>

                    <?php if(!empty($_POST["Email"]) && !empty($_POST["Wachtwoord"])){ //als velden niet leeg zijn voer het uit
                        $email = $_POST["Email"];
                        $wachtwoord = $_POST["Wachtwoord"];

                        $sql = "SELECT * FROM gebruikers WHERE Email = '$email' and Wachtwoord = '$wachtwoord'";

                        $query = mysqli_query($db, $sql);
                        $result = mysqli_num_rows($query);

                        if($result === 1){ //als $result 1 (ja/overeenkomt met het data in het db) is dan direct hij naar profiel.php
                            header("Location: ../../index.php"); //redirect naar index.html
                            $_SESSION["login"] = true;
                            $_SESSION["username"] = $email;
                            }
                        }
                    ?>
                </form>

?>
   


<!DOCTYPE HTML>
<html>
<?php require_once("private/db/initialize.php");?>
<head>
  <title>night_sky_2 - examples</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>


<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="../public/index.html">night<span class="logo_colour">_sky_2</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="Inloggen.php">Inloggen</a></li>
          <li><a href="Tickets.php">Tickets</a></li>
          <li><a href="profiel.php">Profiel</a></li>

        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <h1>Inloggen</h1>
        <form action="private/action/registratieAction.php" method="post">
          <div class="form_settings">                               
            <p><span>Voornaam</span><input class="name" type="text" name="voornaam" value="" /></p>
            <p><span>Tussenvoegsel</span><input class="name" type="text" name="tussenvoegsel" value="" /></p>
            <p><span>Achternaam</span><input class="name" type="text" name="achternaam" value="" /></p>
            <p><span>Email</span><input class="Email" type="text" name="email" value="" /></p>
            <p><span>Wachtwoord</span><input class="Wachtwoord" type="text" name="wachtwoord" value="" /></p>
            <p><span>Telefoonnummer</span><input class="Name" type="text" name="telefoonnummer" value="" /></p>
            <p><span>Straatnaam</span><input class="Name" type="text" name="straatnaam" value="" /></p>
            <p><span>Huisnummer</span><input class="Number" type="text" name="huisnummer" value="" /></p>
            <p><span>Postcode</span><input class="Name" type="text" name="postcode" value="" /></p>
            <p><span>Woonplaats</span><input class="Name" type="text" name="woonplaats" value="" /></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
          </form>
        </form>
        <p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an email address.</p>
      </div>
    </div>
    <div id="footer">
      <p><a href="public/index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; night_sky_2 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
</body>
</html>
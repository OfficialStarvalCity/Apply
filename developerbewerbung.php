<?php
include_once("inc/config.inc.php");
include_once("inc/header.inc.php");

use inc\PHPMailer\PHPMailer;
use inc\PHPMailer\SMTP;
use inc\PHPMailer\Exception;

require 'inc/PHPMailer/src/Exception.php';
require 'inc/PHPMailer/src/PHPMailer.php';
require 'inc/PHPMailer/src/SMTP.php';

if(!empty($_GET['name'])){
    $name 		    	= $_POST['name'];
    $mcname   			= $_POST['mcname'];
    $email	 			= $_POST['email'];
    $geb 		    	= $_POST['geb'];
    $geschlecht 		= $_POST['geschlecht'];
    $stunden 	        = $_POST['stunden'];
    $sprache	     	= $_POST['sprachen'];
    $vorstellung	    = $_POST['vorstellung'];
    $stark	            = $_POST['stark'];
    $team    			= $_POST['team'];
    $schluss       	    = $_POST['schluss'];
} else{
    $name 		    	= "";
    $mcname   			= "";
    $email	 			= "";
    $geb 		    	= "";
    $geschlecht 		= "";
    $stunden 	        = "";
    $sprache	     	= "";
    $vorstellung	    = "";
    $stark	            = "";
    $team    			= "";
    $schluss       	    = "";
}
?>
<div class="text-center container">
<div class="Schrift1">
    <i class="fa fa-paper-plane" aria-hidden="true"></i> Developer Bewerbungsformular
</div>
<br>
<form role="form" class="well" method="post" action="supporterbewerbung.php">
    <input type="text" id="name" name="name" placeholder="Name:">
    <input type="text" id="mcname" name="mcname" placeholder="Minecraftname:">
    <input type="email" id="email" name="email" placeholder="E-Mail:">
    <input type="text" id="geb" name="geb" placeholder="Geburtstag:">
    <select type="pickup_place" id="geschlecht" name="geschlecht">
        <option value="" selected="selected">Geschlecht: Bitte auswählen</option>
        <option value="Männlich">Männlich</option>
        <option value="Weiblich">Weiblich</option>
    </select>
    <input type="text" id="stunden" name="stunden" placeholder="Verfügbare Zeit in Studen pro Woche:">
    <input type="text" id="sprachen" name="sprachen" placeholder="Welche Sprachen beherrscht du:">
    <textarea id="vorstellung" name="vorstellung" rows="5" cols="20" placeholder="Bitte stelle dich kurz vor !"></textarea>
    <textarea id="stark" name="stark" rows="5" cols="20" placeholder="Was sind deine Stärken und Schwächen ?"></textarea>
    <textarea id="team" name="team" rows="5" cols="20" placeholder="Warum sollen wir dich nehmen?"></textarea>
    <textarea id="schluss" name="schluss" rows="5" cols="20" placeholder="Schlusswort"></textarea>
    <br>
    <input type="submit" name="send"  value="ABSCHICKEN">
    <br>
    <br>
</form>
</div>
<?php
require_once("inc/footer.inc.php");
?>

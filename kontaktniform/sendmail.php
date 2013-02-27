<?php
$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$telefon = $_POST["telephone"];
$mesto = $_POST["mesto"];
$kdy = $_POST["kdy"];
$email =$_POST["email"];
 
$to = "theplakovka@gmail.com";
$subject = "umimehubnout.cz - " .$jmeno . " " . $prijmeni . " - "  . $telefon . " - "  . $mesto."";
$msg = "jmeno: ".$jmeno."\nprijmeni: ".$prijmeni."\ntelefon:".$telefon."\nMesto: ".$mesto."\nkdy: ".$kdy."\nemail: ".$email."";
 
if (!mail($to, $subject, $msg))
{
  die("Error: Chyba pri odesilani");
}
?>

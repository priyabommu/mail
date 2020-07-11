<?php
// the message
$msg =$_POST['name'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("shanmugapriyabs06@gmail.com","My subject",$msg);
?>

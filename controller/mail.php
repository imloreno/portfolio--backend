<?php
if (
   isset($_POST['name']) and
   isset($_POST['email']) and
   isset($_POST['message'])
) {

   include_once "controller/validation.php";
   $mail = new Validation($_POST['name'], $_POST['email'], $_POST['message']);
   print_r($mail->send_email());
}

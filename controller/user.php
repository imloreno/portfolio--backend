<?php
$url = explode("/", $_GET['url']);

switch ($url[1]) {

   case "insert":
      if (
         isset($_POST['fullname']) and
         isset($_POST['username']) and
         isset($_POST['pass'])
      ) {
         $image = $_FILES['image'] >= 0 ? $_FILES['image'] : null;
         $fullname = $_POST['fullname'];
         $username = $_POST['username'];
         $pass = $_POST['pass'];
         echo $fullname . $username . $pass;
      }
      break;

      //Default value
   default:
      http_response_code(404);
      break;
}

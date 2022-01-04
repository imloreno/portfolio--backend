<?php
date_default_timezone_set('America/La_Paz');
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');

//------------------------------
// GET URL PARAMS
//------------------------------
if (isset($_GET['url'])) {

   $url = explode("/", $_GET['url']);

   //METHOD [POST]
   if ($_SERVER['REQUEST_METHOD'] == "POST") {

      switch ($url[0]) {

            //Session options
         case "login":
            if (count($url) > 0) {
               include_once "controller/user.php";
            } else {
               http_response_code(404);
            }
            break;

            //Posts
         case "mail":
            include_once "controller/mail.php";
            break;

         default:
            http_response_code(404);
            break;
      }

      //METHOD [GET]
   } else if ($_SERVER['REQUEST_METHOD'] == "GET") {
      switch ($url[0]) {

            //Projects list
         case "projects":
            if (count($url) > 0) {
               require_once "controller/client/project_list.php";
               http_response_code(200);
            } else {
               http_response_code(404);
            }
            break;
      }
   }
} else {
   echo "Bienvenidos a mi api :)";
}

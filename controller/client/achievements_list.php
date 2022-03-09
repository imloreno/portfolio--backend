<?php
$url = explode("/", $_GET['url']);

switch ($url[1]) {
      //Get projects list
   case "get":

      $workList = [
         [
            "title" => "Winner of science fair",
            "img" => "view/img/achievements/scient.jpg",
            "description" => "Participation for 3 years in science fairs held at the university.",
            "tasks" => [
               "2016 - Participation certificate",
               "2017 - 2nd place at college level ",
               "2018 - 1st place at college level",
               "2018 - 1st place at departamental level (Santa Cruz - Bolivia)",
            ],
            "reference" => [
               // [
               //    "type" => "github",
               //    "url" => "https://github.com/SoySanty/gourmand"
               // ]
            ]
         ],
      ];

      print_r(json_encode($workList));
      http_response_code(200);
      break;

   default:
      http_response_code(404);
      break;
}

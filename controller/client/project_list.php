<?php
$url = explode("/", $_GET['url']);

switch ($url[1]) {
      //Get projects list
   case "get":

      $workList = [
         [
            "title" => "Gourmand",
            "img" => "view/img/projects/gourmand.jpg",
            "description" => "Development of a managment system for a restaurant, aplying HTML, Javascript, PHP POO (MVC) , Mysql.",
            "tasks" => [
               "Development of the frontend and backend of a managment system",
               "Using API REST to connect with the backend",
            ],
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/SoySanty/gourmand"
               ]
            ]
         ],
         [
            "title" => "Tucandera Tours",
            "img" => "view/img/projects/tucandera.jpg",
            "description" => "Development of a managment system for a tourism agency, in addintion to the development the frontend of an website for the toursism managment, applying React",
            "tasks" => [
               "Modifying a free template with HMTL, CSS y Javascript",
               "Design and development web with HTML, CSS, Javascript (API REST), PHP POO (MVC), Mysql",
               "Refactorizing vanilla Javscript to React js",
               "Frontend developmentof a touristic managment system",
            ],
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/SoySanty/tucandera_tours_react"
               ],
               [
                  "type" => "web",
                  "url" => "https://www.tucanderatours.com/"
               ]
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

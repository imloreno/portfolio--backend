<?php
$url = explode("/", $_GET['url']);

switch ($url[1]) {
      //Get projects list
   case "get":


      $workList = [

         [
            "title" => "Tucandera Tours v1.0",
            "img" => "view/img/projects/tucandera_1.jpg",
            "description" => "A partir de una platilla gratuita, modifiqué el HMTL, CSS y Javascript de una página web estática",
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/aurearias/tucanderasite"
               ]
            ]
         ],
         [
            "title" => "Tucandera Tours v2.0",
            "img" => "view/img/projects/tucandera_2.jpg",
            "description" => "Diseño y desarrollo de una página web con HTML, CSS, Javascript nativo, PHP POO (MVC) y mysql.",
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/SoySanty/tucanderawebsite"
               ]
            ]
         ],
         [
            "title" => "Tucandera Tours v3.0",
            "img" => "view/img/projects/tucandera_3.jpg",
            "description" => "Refactorizacion del código de Javscript nativo a React js, además de ajustes en el diseño.",
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
         [
            "title" => "COSMON",
            "img" => "view/img/projects/cosmon.jpg",
            "description" => "Desarrollo de un sistema de elecciones internas para una cooperativa. Applicando HTML, CSS, React js, PHP POO (MVC) y MYSQL.",
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/SoySanty/sistema_votacion_cosmon_front"
               ]
            ]
         ],
         [
            "title" => "Gourmand",
            "img" => "view/img/projects/gourmand.jpg",
            "description" => "Desarrollo de un sistema de gestion para un restaurante, aplicando HTML, Javascript, PHP (MVC) , Mysql.",
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/SoySanty/gourmand"
               ]
            ]
         ]

      ];

      print_r(json_encode($workList));
      http_response_code(200);
      break;

   default:
      http_response_code(404);
      break;
}

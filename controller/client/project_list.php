<?php
$url = explode("/", $_GET['url']);

switch ($url[1]) {
      //Get projects list
   case "get":

      $workList = [
         [
            "title" => "Winner of science fair",
            "img" => "view/img/projects/scient.jpg",
            "description" => "Participación durante 3 años seguidos en las ferias de ciencias celebradas en la universidad",
            "tasks" => [
               "2016 - Certificado de participación",
               "2017 - 2do lugar a nivel facultativo",
               "2018 - 1mer lugar a nivel facultativo",
               "2018 - 1mer lugar a nivel departamental (Santa Cruz - Bolivia)",
            ],
            "reference" => [
               // [
               //    "type" => "github",
               //    "url" => "https://github.com/SoySanty/gourmand"
               // ]
            ]
         ],
         [
            "title" => "Gourmand",
            "img" => "view/img/projects/gourmand.jpg",
            "description" => "Desarrollo de un sistema de gestion para un restaurante, aplicando HTML, Javascript, PHP POO (MVC) , Mysql.",
            "tasks" => [
               "Desarrollo del frontend y backend de un sistema de ventas",
               "Uso de API REST para la conexión con el backend",
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
            "description" => "Refactorizacion del código de Javscript nativo a React js, además de ajustes en el diseño.",
            "tasks" => [
               "Modificación de una plantilla gratuita con HMTL, CSS y Javascript",
               "Diseño y desarrollo de la web con HTML, CSS, Javascript (API REST), PHP POO (MVC), Mysql",
               "Refactorización de código de Javscript nativo a React js",
               "Desarrollo del frontend de una plataforma de registros turísticos",
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
         [
            "title" => "COSMON",
            "img" => "view/img/projects/cosmon.jpg",
            "description" => "Desarrollo de un sistema de elecciones internas para una cooperativa. Applicando HTML, CSS, React js, PHP POO (MVC) y MYSQL.",
            "tasks" => [
               "Desarrollo del frontend de la plataforma, conectando su base de datos propia con otra existente mediante API REST",
               "Desarollo del backend escencial para la conexión de la base de datos propia con la de la cooperativa",
               "Análisis gráfico de los resultados de las elecciones",
            ],
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/SoySanty/sistema_votacion_cosmon_front"
               ],
               [
                  "type" => "prueba",
                  "url" => "http://sistema-elecciones.atwebpages.com/"
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

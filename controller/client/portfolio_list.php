<?php
$url = explode("/", $_GET['url']);

switch ($url[1]) {
      //Get projects list
   case "get":

      $workList = [
         [
            "title" => "COSMON",
            "img" => "view/img/projects/cosmon.jpg",
            "description" => "Development authories elections system for a cooperative. Applying HTML, CSS, React js, PHP POO (MVC) y MYSQL.",
            "tasks" => [
               "Development of the platform frontend, connecting it's own data base with another existing via API REST",
               "Development of escencial backend, for the connection between data bases",
               "Elections data graph analytics",
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
         ],
         [
            "title" => "Weather App",
            "img" => "view/img/portfolio/weather_app.png",
            "description" => "Frontend weather web made with React, Redux, extracting API REST data from two web platforms: Openweathermap and Mapbox.",
            "tasks" => [
               "Get a free template from a UK creator.",
               "Convert HTML, CSS code to React JSX structure.",
               "Get connection width both two API REST.",
               "Parsing information in the correct fields.",
               "Get the API REST data and structure the website with those information.",
            ],
            "reference" => [
               [
                  "type" => "github",
                  "url" => "https://github.com/SoySanty/portfolio--weather_app"
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

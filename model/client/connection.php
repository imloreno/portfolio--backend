<?php

class Connection
{

   private $host = "localhost";
   private $user = "root";
   private $pass = "";
   private $db = "db_portfolio";
   private $connection;

   //--------------------------------
   // Constructor
   //--------------------------------

   protected function __construct()
   {
      $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
      if ($this->connection->connect_errno) {
         die($this->connection->error);
      } else {
         $this->connection->set_charset("utf8");
      }
   }


   //--------------------------------
   // Static functions
   //--------------------------------

   //Insert, update & delete
   protected function non_query($query, &$connection = null)
   {
      include_once "model/client/connection.php";
      if (!$connection) global $connection;
      $result = $connection->query($query);
      return $result->affected_rows > 0 ? true : false;
   }

   //Select
   protected function get_data($query, &$connection = null)
   {
      if (!$connection) global $connection;
      $result = $connection->query($query);
      $res = [];
      foreach ($result as $row) {
         $res[] = $row;
      }
      return json_encode($res);
   }
}

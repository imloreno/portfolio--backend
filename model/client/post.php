<?php

include_once "model/client/connection.php";

class Post extends Connection
{

   protected $id_post;
   protected $title_post;
   protected $text_post;
   protected $status_post;


   //--------------------------------
   // Insert 
   //--------------------------------
   function add_post()
   {
      $query = "INSERT INTO post 
      (
         title_post,
         text_post,
         status_post
      ) VALUES (
         '{$this->title_post}',
         '{$this->text_post}',
         1
      )";

      return $this->non_query($query);
   }


   //--------------------------------
   // GETTERS & SETTERS
   //--------------------------------

   //Setters
   function set_id_post($x)
   {
      $this->id_post = $x;
   }
   function set_title_post($x)
   {
      $this->title_post = $x;
   }
   function set_text_post($x)
   {
      $this->text_post = $x;
   }
   function set_status_post($x)
   {
      $this->status_post = $x;
   }
}

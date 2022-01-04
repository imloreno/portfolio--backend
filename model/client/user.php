<?php

require_once "model/client/connection.php";

class User extends Connection
{
   protected $fullname;
   protected $name;
   protected $pass;
   protected $token;

   //Verify if is logged
   function isLogin()
   {
      return [];
   }

   //Authentication
   function authentication()
   {
      $query = "SELECT 
      fullname_user AS 'fullname',
      user_user AS 'username',
      pass AS 'password' 
      FROM user 
      WHERE 
      user_user='{$this->name}' AND 
      password_user={$this->pass}";

      $res = $this->get_data($query);
      return $res;
   }

   //Create user
   function create_user()
   {
      $query = "INSERT INTO user
      (fullname_user, user_user, password_user, status_user)
      VALUES
      (
         '{$this->fullname}',
         '{$this->name}',
         '{$this->pass}',
         1
      )
      ";

      $res = $this->non_query($query);
      return $res;
   }

   //--------------------------GETTERS & SETTERS
   //Setters
   function set_fullname($x)
   {
      $this->fullname = $x;
   }
   function set_name($x)
   {
      $this->name = $x;
   }
   function set_pass($x)
   {
      $this->pass = $x;
   }
   function set_token($x)
   {
      $this->token = $x;
   }
}

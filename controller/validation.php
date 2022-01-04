<?php

class Validation
{
   protected $text;
   protected $email;
   protected $message;
   protected $subject = "Mensaje web";
   protected $regExp = array(";", ":", ",", "(", "", "[", "]", "?", "¡", "¿", "!", "~", "}", "{", "#", "=");


   //CONSTRUCT
   function __construct($name, $email, $message)
   {
      $this->name = str_replace($this->regExp, ".", $name);
      $this->email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : str_replace($this->regExp, ".", $email);
      $this->message = str_replace($this->regExp, ".", $message);
   }

   //---------------------------GETTERS & SETTERS
   function send_email()
   {
      if (mail(
         "sanc7us@gmail.com",
         $this->subject,
         "{$this->name} - {$this->email} dice: {$this->message}"
      )) {
         return json_encode(true);
      }
      return json_encode(false);
   }
}

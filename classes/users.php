<?php 

 class Users {
   public $username;
   public $password;
   public $email;
   public $img_avatar;
   public $description;

  public function __construct(string $username, string $password, string $email, string $img_avatar, string $description)
  {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->img_avatar = $img_avatar;
    $this->description = $description;
  }
   

   /**
    * Get the value of username
    */ 
   public function getUsername()
   {
      return $this->username;
   }

   /**
    * Set the value of username
    *
    * @return  self
    */ 
   public function setUsername($username)
   {
      $this->username = $username;

      return $this;
   }

   /**
    * Get the value of password
    */ 
   public function getPassword()
   {
      return $this->password;
   }

   /**
    * Set the value of password
    *
    * @return  self
    */ 
   public function setPassword($password)
   {
      $this->password = $password;

      return $this;
   }

   /**
    * Get the value of email
    */ 
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * Set the value of email
    *
    * @return  self
    */ 
   public function setEmail($email)
   {
      $this->email = $email;

      return $this;
   }

   /**
    * Get the value of img_avatar
    */ 
   public function getImg_avatar()
   {
      return $this->img_avatar;
   }

   /**
    * Set the value of img_avatar
    *
    * @return  self
    */ 
   public function setImg_avatar($img_avatar)
   {
      $this->img_avatar = $img_avatar;

      return $this;
   }

   /**
    * Get the value of description
    */ 
   public function getDescription()
   {
      return $this->description;
   }

   /**
    * Set the value of description
    *
    * @return  self
    */ 
   public function setDescription($description)
   {
      $this->description = $description;

      return $this;
   }

   public function logIn () {}

   public function logOut() {}

 }

?>
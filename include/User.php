<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Piotrek
 */
class User {
    private $isLogged;
    private $login;
    //put your code here
    public function __construct(){
        
        if(isset($_SESSION['active'])){
            $this->isLogged=$_SESSION['active'];
        }
    }
    
    public function logIn($login,$password){
      require 'base/connectDB.php';
      $query="SELECT count(*) FROM users WHERE login = '$login' and password='$password' ;";
      echo $query;
      foreach($userConnection->query($query)as $row){
          if($row['count(*)']){
              $_SESSION['logged']=true;
          }
           
      }
    
     }
    
   
    
}

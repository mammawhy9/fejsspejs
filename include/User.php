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
    public function __construct($login='spiety'){
        $this->login=$login;
        if(isset($_SESSION['active'])){
            $this->isLogged=$_SESSION['active'];
        }
    }
    public function logIn(){
      require 'base/connectDB.php';
      $query="SELECT * FROM users WHERE login = '$this->login';";
      
      foreach($userConnection->query("Select * from users;")as $row){
           echo $row['login']." ".$row['password'];
          
           
      }
    
     }
    
    public function setSession(){
        if(!isset($_SESSION['active'])){
            $_SESSION['active']=1;
            $_SESSION['logged']=false;
            
        }
    }
    
}

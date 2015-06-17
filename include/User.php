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
    //put your code here
    public function __construct(){
        if(isset($_SESSION['zalogowany'])){
            $this->isLogged=$_SESSION['zalogowany'];
        }
    }
    public function logIn(){
      require 'base/connectDB.php';
        
            
    }
    
    
}

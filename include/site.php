<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of site
 *
 * @author Piotrek
 */
session_start();
class site {
    public $title;
    public $user;
    
    public function writeHead(){
      echo "<html>    <head>        <meta charset='ISO-8859-2'>        <title></title>    </head>  <body>";
    }
    
    public function writeTop(){
        
    }
    
    public function writeMid(){
        
    }
    public function writeBottom(){
        echo "   </body> </html>";

    }
    
    public function setSession(){
        if(!isset($_SESSION['active'])){
            $_SESSION['active']=1;
            
        }
    }
    public function addSession(){
        if(isset($_SESSION['active'])){
            $_SESSION['active']++;
        }
    }
    //put your code here
}

<?php
session_start();
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

require 'include/Content.php';
class Site {
    private $title;
    public $user;
    private $siteContent;
    
    public function __construct($content){
        $this->siteContent= new Content();
       if(count($content) ==  4){ 
        $this->siteContent->head = $content['head'];
        $this->siteContent->top = $content['top'];
        $this->siteContent->mid = $content['mid'];
        $this->siteContent->bottom = $content['bottom'];
        }else{
            echo "Brak zawarto�ci  cz�ci strony!"; exit;
        }
    
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function writeHead(){
     echo $this->siteContent->head;
    }
    
    public function writeTop(){
     echo $this->siteContent->top;   
    }
    
    public function writeMid(){
        echo $this->siteContent->mid;
    }
    public function writeBottom(){
        echo $this->siteContent->bottom;

    }
    public function writeLoginForm(){
        echo "<form method='post' action='index.php'>"
        . "<input type='text' name='login'/><br/>"
        ."<input type='password' name='password'/><br/>"
                ."<input type='submit'/></form>";
        

    }
    
     public function setSession(){
        if(!isset($_SESSION['active'])){
            $_SESSION['active']=1;
            $_SESSION['logged']=false;
            
        }
    }
    public function endSession(){
         session_destroy();
    }
    public function addSession(){
        if(isset($_SESSION['active'])){
            $_SESSION['active']++;
        }
    }
    //put your code here
}

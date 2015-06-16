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

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        try{
            $userConnection= new PDO("mysql:dbname=fejsspejs;host=localhost",'spiety','kowal');
        } catch (PDOException $e) {
                echo $e->getMessage();
        }  

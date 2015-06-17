<?php
    
$tablica= array('head' =>'k','top'=>'l','bottom' => 'o', 'mid' => 'm');
       require 'include/site.php';
       require 'include/User.php';
        if(!isset($site)){
            $site= new site($tablica);
            $site->user= new User;
            $site->user->setSession();
        } 
       if($_SESSION['logged']){
        $site->user->logIn();    
       }
          
       
        
        
        
        $site->writeHead();
        $site->writeTop();
        $site->writeMid();
        
        if (!isset($_SESSION)) { 
        
        
        echo $_SESSION['active'];
        echo "<form action='login.php'>                     <button type='submit'/>            </form>";
        } else {
        echo "jest sesja!";
        $site->writeBottom();
}       
?>
 
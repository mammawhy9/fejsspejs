<?php
$tablica= array('head' =>'k','top'=>'l','bottom' => 'o', 'mid' => 'm');
       require 'include/site.php';
        $site= new site($tablica);
        $site->writeHead();
        $site->writeTop();
        $site->writeMid();
        $site->writeBottom();
        if (!isset($_SESSION)) { 
        $site->setSession();
        $site->addSession();
        echo $_SESSION['active'];
        echo "<form action='login.php'>                     <button type='submit'/>            </form>";
        } else {
        echo "jest sesja!";
}
?>
 
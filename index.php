<?php
//       kod testowy, przyk³adowy0    
$tablica= array('head' =>'<html><head><title></title></head>','top'=>'<div class="top">To jest top</div>','bottom' => '
</script><div class="bottom">To jest bottom</div>', 'mid' => '<div class="mid">To jest mid</div>');
// koniec kodu przykladowego

        require 'include/site.php';
        
        if(!isset($site)){
            $site= new site($tablica);
            $site->setSession();
        } 
        
        $site->writeHead();
        $site->writeTop();
        $site->writeMid();
        
        echo var_dump($_SESSION);
        
        if(!$_SESSION['logged']){
                require('include/USer.php');
                $site->user= new User;
                $site->writeLoginForm();
                if(isset($_POST['login'])&&isset($_POST['password'])){
                        $site->user->logIn($_POST['login'],$_POST['password']);
                        header("Location: index.php");
                }
        } else {
            echo "zalogowany\n";            
            // przerobic na metode $site
            echo "<form action='index.php' method='post'> <input type='hidden' value='true' name='logout'/>                    <button type='submit'>Wyloguj</button>            </form>";
        }
        echo $_SESSION['logged'];
        
        if(isset($_POST['logout'])){
            if($_POST['logout']==true){
                    $site->endSession();
                     header("Location: index.php");
            }
        }
        if (!isset($_SESSION)) {       
                echo $_SESSION['active'];
                // do zamiany na funkcjê
                echo "<form action='login.php' >                     <button type='submit'/>            </form>";
        } else {
            $site->writeBottom();  
        }       

 
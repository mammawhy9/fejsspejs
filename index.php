<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        require 'include/site.php';
        $site= new site();
        $site->writeHead()
        if (!isset($_SESSION)) {
    $site->setSession();
    $site->addSession();
    echo $_SESSION['active'];
    echo "<form action='login.php'>                    <button type='submit'/>            </form>";
    } else {
        echo "jest sesja!";
}
?>
 
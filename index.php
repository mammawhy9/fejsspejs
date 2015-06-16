<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-2">
        <title></title>
    </head>
    <body>
        <?php
        require 'include/site.php';
        $site= new site();
        if (!isset($_SESSION)) {
    $site->setSession();
    $site->addSession();
    echo $_SESSION['active'];
    echo "<form action='login.php'>
                    <button type='submit'/>
            </form>";
} else {
    echo "jest sesja!";
}
?>
    </body>
</html>

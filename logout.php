<?php
    include($_SERVER['DOCUMENT_ROOT'].'/include/dbinfo.php');
    session_destroy();
    if(empty($_SESSION['loginid'])){
        // var_dump($_SESSION['loginid']);
        header("Location: login.html");

    }
    

?>
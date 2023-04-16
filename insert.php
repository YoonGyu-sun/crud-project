<?php
    include($_SERVER['DOCUMENT_ROOT'].'/include/dbinfo.php');


    $stmt = $mysqli->prepare("INSERT INTO usert (id, pwd) VALUES (?,?)");

    $stmt->bind_param("ss",$var1, $var2);
    $var1 = $_POST['newid'];
    $var2 = $_POST['newpwd'];
    
    
    $stmt->execute();

    
    echo "<script>alert('가입을 성공했습니다.')</script>";
    echo "<script>location.href='login.html'</script>";
  

?>
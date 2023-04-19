<?php

    include($_SERVER['DOCUMENT_ROOT'].'/include/dbinfo.php');
    include($_SERVER['DOCUMENT_ROOT'].'/include/ss.php');
    $stmt=$mysqli->stmt_init();
    $var1 = $_GET['udtitle'];
    $var2 = $_GET['udtext'];
    $var3 = $_GET['idx'];
    $sql = "UPDATE boardt SET titlet = ?, textt=? WHERE idx = $var3";
    
    $stmt->prepare($sql);
    $stmt->bind_param("ss", $var1, $var2);
    $stmt->execute();
?>

<script>
alert("수정되었습니다.");
location.href="index.php";
</script>
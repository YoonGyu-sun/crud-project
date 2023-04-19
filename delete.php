<?php
    
    include($_SERVER['DOCUMENT_ROOT'].'/include/dbinfo.php');

    $stmt = $mysqli->stmt_init();
    $sql = "DELETE FROM boardt WHERE idx = ?";
    $stmt->prepare($sql);
    $stmt->bind_param("s", $_GET['idx']);
    $stmt->execute();    


    
?>
<script>
alert("삭제되었습니다.");
location.href="index.php";
</script>


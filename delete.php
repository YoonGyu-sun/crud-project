<?php
    $stmt = $mysqli->stmt_init();
    $sql = "DELETE FROM boardt WHERE idx = ?";
    $stmt->prepare($sql);
    $stmt->bind_param("ss" )

?>
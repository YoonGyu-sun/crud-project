<?php
include($_SERVER['DOCUMENT_ROOT'].'/include/dbinfo.php');
        $stmt = $mysqli->stmt_init();
        $sql = "SELECT * FROM boardt WHERE idx={$_GET['idx']}";

        $result = $mysqli->query($sql);
        $row=$result->fetch_array();

?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            float:left;
            font-size : 14px;
        }
      
        h2 {
            border-top:3px solid gray;
            

            width:900px;
           position: relative;
           word-break:break-all;
        }
        div h3{
            width:900px;
           position: relative;
           word-break:break-all;
        }
    </style>

    <title> 글 </title>
</head>
<body>

    <h1> 자유게시판 <h1>
    
        <div>작성자: <?php echo $row['namet'];?>&nbsp;&nbsp;</div> 
        <div><?php echo $row['dayt'];?>&nbsp;&nbsp;</div>
        <div id ="static">조회: <?php echo $row['lookt'];?>&nbsp;&nbsp;</div>
    
    <br>
    
    <h2><?php echo $row['titlet'];?></h2>
    <div><h3><?php echo $row['textt'];?></h3></div>
    

    <tr onclick="location.href='/look.php?idx=<?php echo $row['idx'];?>'">

    
    <button type="button" onclick="location.href='index.php'">목록</button>
    <button type="button" onclick="location.href='update.php'">수정</button>
    <button type="button" onclick="location.href='delete.php'">삭제</button>
   


</body>
</html>
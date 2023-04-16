<?php 
include($_SERVER['DOCUMENT_ROOT'].'/include/dbinfo.php');
include($_SERVER['DOCUMENT_ROOT'].'/include/ss.php');



?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/css/index_style.css"> -->
    <title>게시판</title>
<style>
    table, th, td {
        border : 3px solid grey;
    }
    table {
        border-collapse:collapse; 
    }
    td { text-align: center; height:45px;}
    th {height:28px;}
    div h3 {
        float: right;
        padding: 50px;
    }
    div button{
        float: right;
    }
    form button{
        float: right;
    }
    </style>
 



</head>
<body>
    <div><h3><?php echo "".$_SESSION['loginid']."님"; ?></h3>
    <h1>게시판입니다.</h1></div>
    <form action="logout.php" method="GET">

    <button type="submit" formaction="logout.php">Logout</button>
    </form> 
    <h4>글을 자유롭게 작성해보세요</h4>
    

<table>
    <thead>
        <tr>
            <th width="70">번호</th>
            <th width="130">제목</th>
            <th width="400">내용</th>
            <th width="120">글쓴이</th>
            <th width="100">작성일</th>
            <th width="100">조회수</th>
        </tr>
    </thead>

<?php
    $stmt = $mysqli->stmt_init();
    $sql = "SELECT idx, titlet, textt, namet, dayt, lookt FROM boardt ORDER BY idx DESC limit 0,10";

    $result = $mysqli->query($sql);
    while($row=$result->fetch_array()){


?>


<tbody>
        <tr onclick="location.href='/look.php?idx=<?php echo $row['idx'];?>'">
          <td width="70"><?php echo $row['idx']; ?></td>
          <td width="130"><?php echo $row['titlet']; ?></td>
          <td width="400"><?php echo $row['textt']; ?></td>
          <td width="120"><?php echo $row['namet']; ?></td>
          <td width="100"><?php echo $row['dayt']; ?></td>
          <td width="100"><?php echo $row['lookt']; ?></td>
        </tr>
      </tbody>
      <?php }?>


</table>
<button type="button" onClick="location.href='create.php'">글쓰기</button>


</body>
</html>
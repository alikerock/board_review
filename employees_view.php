<?php  
require_once('db.php');
$emp_no = $_GET[ 'emp_no' ];
$sql = "SELECT * FROM employees where emp_no = '{$emp_no}'";
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사원 정보</title>
</head>
<body>
    <h1>사원정보</h1>
    <h2>사원번호 : <?= $row['emp_no'] ?> </h2>
    <h2>사원명 : <?= $row['name'] ?> </h2>
    <h2>입사일 : <?= $row['hire_date'] ?> </h2>
    <hr>
    <p> 
        <a href="employees_list.php">목록</a>
        <a href="employees_edit.php?emp_no=<?= $row['emp_no'];?>">수정</a>
        <a href="employees_del.php?emp_no=<?= $row['emp_no'];?>">삭제</a>
    </p>

</body>
</html>
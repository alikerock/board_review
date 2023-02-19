<?php  
require_once('db.php');

$sql = "SELECT * FROM employees order by emp_no desc limit 0,5";
$result = $mysqli -> query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사원명부</title>
</head>
<body>
    <h1>사원명부</h1>
    <table>
        <thead>
            <tr>
                <th>사원번호</th>
                <th>사원명</th>
                <th>입사일</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($row = $result -> fetch_assoc()){
            ?>
            <tr>
                <td><?= $row['emp_no'] ?></td>
                <td><a href="employees_view.php?emp_no=<?= $row['emp_no'] ?>"><?= $row['name'] ?></a></td>
                <td><?= $row['hire_date'] ?></td>
            </tr>
            <?php } 
            $mysqli -> close();
            ?>
        </tbody>
    </table>
    <hr>
    <p>
        <a href="employees_add.php">사원 정보 입력하기</a>
    </p>
</body>
</html>
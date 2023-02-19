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
    <title>사원정보 수정</title>
</head>
<body>
    <h1>사원정보 수정하기</h1>
    <form action="employees_edit_insert.php" method="POST">
      <p>
        <label for="emp_no">사원번호 NO : <?= $row['emp_no'] ?></label>
        <input type="hidden" name="emp_no" id="emp_no" value="<?= $row['emp_no'] ?>">
      </p>      
      <p>
        <label for="name">사원명 :</label>
        <input type="text" name="name" id="name" value="<?= $row['name'] ?>" placeholder="이름을 입력하세요." required>
      </p>
      <p>
        <label for="hire_date">입사일 :</label>
        <input type="date" name="hire_date" id="hire_date" value="<?= $row['hire_date'] ?>"placeholder="입사일" required>
      </p>     
      <button>EDIT</button>
    </form>
</body>
</html>
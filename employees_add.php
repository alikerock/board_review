<?php  
require_once('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사원정보 입력</title>
</head>
<body>
    <h1>데이터 입력하기</h1>
    <form action="employees_insert.php" method="POST">
      <p>
        <label for="emp_no">사원번호 NO :</label>
        <input type="number" name="emp_no" id="emp_no" placeholder="****" required>
      </p>      
      <p>
        <label for="name">사원명 :</label>
        <input type="text" name="name" id="name" placeholder="이름을 입력하세요." required>
      </p>
      <p>
        <label for="hire_date">입사일 :</label>
        <input type="date" name="hire_date" id="hire_date" placeholder="입사일" required>
      </p>     
      <button>ADD</button>
    </form>
</body>
</html>
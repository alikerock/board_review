<?php  
require_once('db.php');

$emp_no = $_POST[ 'emp_no' ];
$name = $_POST[ 'name' ];
$hire_date = $_POST[ 'hire_date' ];


$sql = "UPDATE employees set
emp_no='{$emp_no}',name='{$name }',hire_date='{$hire_date}'
where emp_no='{$emp_no}'";


if ($mysqli->query($sql) === TRUE) {
    echo "<script>
    alert('수정되었습니다.');
    location.href='employees_list.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}


// $mysqli->close();

?>
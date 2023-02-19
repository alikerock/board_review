<?php  
require_once('db.php');

$emp_no = $_POST[ 'emp_no' ];
$name = $_POST[ 'name' ];
$hire_date = $_POST[ 'hire_date' ];

$sql = "INSERT INTO employees (emp_no, name, hire_date) VALUES ('{$emp_no}', '{$name}', '{$hire_date}')";


if ($mysqli->query($sql) === TRUE) {
    echo "<script>
    alert('저장되었습니다.');
    location.href='employees_list.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}


$mysqli->close();

?>
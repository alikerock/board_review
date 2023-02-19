<?php  
require_once('db.php');

$emp_no = $_GET[ 'emp_no' ];

$sql = "DELETE from employees where emp_no = '$emp_no'";


if ($mysqli->query($sql) === TRUE) {
    echo "<script>
    alert('삭제되었습니다.');
    location.href='employees_list.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}


$mysqli->close();

?>
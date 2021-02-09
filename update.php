<?php

include "db_connect.php";

$student_id = $_GET['student_id'];

$name = $_POST['name'];

$course_name = $_POST['course_name'];

$sql = "UPDATE student SET name='$name', course_name='$course_name' " . "WHERE student_id = '$student_id'";

$query = $connection->query($sql)or

die ("Problem in updating the student data");

if($query)

{

?>

<script language="JavaScript">document.location="index.php"</script> <?php

}

?>

<?php

include "db_connect.php";

$student_id = $_GET['student_id'];

$sql = "DELETE FROM student WHERE student_id = $student_id";

$query = $connection->query($sql)or

die ("Problem in deleting the student data");

if($query)

{

?>

<script language="JavaScript">document.location="index.php"</script> <?php

}

?>

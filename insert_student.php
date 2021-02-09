<?php

include "db_connect.php";

$name = $_POST["name"];

$course_name = $_POST['course_name'];

$sql = "INSERT INTO student(name, course_name) " .

"VALUES ('$name', '$course_name')";

$query = $connection->query($sql)or

die ("Problem in storing the new student");

if($query)

{

?>

<script language="JavaScript">document.location="index.php"</script> <?php

}

?>

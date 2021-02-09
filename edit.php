<?php
include "db_connect.php";
$student_id = $_GET['student_id'];

$sql = "SELECT * FROM student WHERE student_id = '$student_id'"; $query = $connection->query ($sql); if ($row = $query->fetch_array())

{
$name = $row['Name'];
$course_name = $row['course_Name'];
}

?>

<html>
<body>
<h1>Update Database</h1>
<form method="post"
action="update.php?student_id=<?php echo $student_id ?>">
<br>
<table>
<tr>
<td>Name</td><td>:</td>
<td><input type="text" name="name"
value="<?php echo $name?>" size='30'>&nbsp;</td>

</tr>
<tr>
<td>Course Name</td>
<td>:</td>
<td><input type="text" name="course_name"
value="<?php echo $course_name?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td></td><td></td>

<td><input type="submit" name="submit" value="Update"/></td> </tr>
</table>
<form>
</body>

</html>

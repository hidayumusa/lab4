<?php

include "db_connect.php";

?>

	<html>

	 <head>

	    <title>Database Access</title>
	    <link rel="stylesheet" href="mystyle.css">
           </head>

    <body>

	<center><h1>Example of Database Application</h1>

    <a href="add.php">Add New</a>

    <br><br>

     <table border="1">

     <tr>

	<th>No.</th>

	<th>Student ID</th>

	<th>Name</th>

	<th>Course Name</th>

	<th>Action</th>

      </tr></center>

<?php

	$j = 0;

	$result = $connection->query("SELECT * FROM student ORDER BY name");

	 if ($result->num_rows > 0)

         {

	while ($row = $result->fetch_array())

	{

echo "<tr><td>";

echo $j+1;

echo "</td>";

echo "<td>";

echo $row["student_id"];

echo "</td>";

echo "<td>";

echo $row["Name"];

echo "</td>";

echo "<td>";

echo $row["course_Name"];

echo "</td>";

echo"<td>";

echo "<a href=\"delete.php?student_id=" . $row['student_id'] .

"\"" .

">Delete</a>";

echo "/";

echo "<a href =\"edit.php?student_id=" . $row['student_id'] ."\""

.

">Edit</a>";

echo "</td></tr>\n";

$j++;

}

}

$connection->close();

?>

</table>

</body>

</html>



<html>
	<head>
		<title>MatchBOX Membership Applications</title>
		<style type="text/css" media=screen>
   			th {padding: 3;
   				border-bottom: 3px solid #000;}
   			td {padding: 3;
   				border-bottom: 1px solid #ccc;}
		</style>

	</head>
	<body>
<?php

ini_set('display_errors', 1);
require_once '../config/build.php';

$username = $MBX_CONF['db_username'];
$password = $MBX_CONF['db_password'];
$dsn = $MBX_CONF['db_source'];
$dbh = new PDO($dsn, $username, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM applications ORDER BY SubmissionDateTime DESC";

echo "<h1>MatchBOX Membership Applications</h1>";
echo "<table border='0'><tr>";

echo "<th>#</th>";
echo "<th>Full Name</th>";
echo "<th>Membership Type</th>";
echo "<th>Email</th>";
echo "<th>Submission</th>";

echo "</tr>\n";

$rowCount = 0;

// printing table rows
foreach($dbh->query($sql) as $row)
{
    $rowCount = $rowCount + 1;
	
    echo "<tr>";
    
    echo "<td>$rowCount</td>";
    echo "<td><a href='app.php?id=$row[0]'>$row[1]</a></td>";
    echo "<td>$row[4]</td>";
    echo "<td><a href='mailto:$row[10]'>$row[10]</a></td>";
    echo "<td>$row[18]</td>";
    echo "</tr>\n";
}

echo "</table>";
?>
</body></html>

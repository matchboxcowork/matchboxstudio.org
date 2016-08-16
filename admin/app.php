<html>
	<head>
		<title>MatchBOX Membership Applications</title>
		<style type="text/css" media=screen>
   			th {padding: 3;
   				text-align: right;
   				border-bottom: 1px solid #ccc;}
   			td {padding: 3;
   				text-align: left;
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
    
// sending query
$appid = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$sql = "SELECT * FROM applications WHERE ApplicationID = {$appid}";

echo "<h1>MatchBOX Membership Application Details</h1>";
echo "<table border='0'>";

// printing table rows
$row = $dbh->query($sql)->fetch();

echo "<tr>";
echo "<th>Full Name</th>";
echo "<td>$row[1]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Job</th>";
echo "<td>$row[2]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Work</th>";
echo "<td>$row[3]</a></td>";
echo "</tr>";

echo "<tr>";
echo "<th>Membership Type</th>";
echo "<td>$row[4]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Address</th>";
echo "<td>$row[5]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Email</th>";
echo "<td><a href='mailto:$row[10]'>$row[10]</a></td>";
echo "</tr>";

echo "<tr>";
echo "<th>Hear</th>";
echo "<td>$row[14]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Offer</th>";
echo "<td>$row[16]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Relationship</th>";
echo "<td>$row[17]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Submission Date</th>";
echo "<td>$row[18]</td>";
echo "</tr>";

echo "</table>";


?>
</body></html>

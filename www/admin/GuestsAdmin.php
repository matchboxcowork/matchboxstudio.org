<html>
	<head>
		<title>MatchBOX Guests</title>
		<style type="text/css" media=screen>
   			th {padding: 3;
   				border-bottom: 3px solid #000;}
   			td {padding: 3;
   				border-bottom: 1px solid #ccc;}
		</style>

	</head>
	<body>
<?php
require_once '../config/build.php';

$db_host = $MBX_CONF['mysql_host'];
$db_user = $MBX_CONF['mysql_username'];
$db_pwd = $MBX_CONF['mysql_password'];

$database = 'mbx';
$table = 'mbxguests';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
    
// sending query
$result = mysql_query("SELECT * FROM {$table} ORDER BY SignInDateTime DESC");
if (!$result) {
    die("Query to show fields from table failed");
}

echo "<h1>MatchBOX Guests</h1>";
echo "<table border='0'><tr>";

echo "<th>#</th>";
echo "<th>Guest Name</th>";
echo "<th>Member Name</th>";
echo "<th>Submission</th>";

echo "</tr>\n";

$rowCount = 0;

// printing table rows
while($row = mysql_fetch_row($result))
{
	$rowCount = $rowCount + 1;
	
    echo "<tr>";
    
	echo "<td>$rowCount</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "</tr>\n";
}

echo "</table>";

mysql_free_result($result);
?>
</body></html>

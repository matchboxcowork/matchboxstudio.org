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
$db_host = 'localhost';
$db_user = 'mbx_user';
$db_pwd = 'redacted';

$database = 'mbx';
$table = 'applications';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
    
// sending query
$result = mysql_query("SELECT * FROM {$table} ORDER BY SubmissionDateTime DESC");
if (!$result) {
    die("Query to show fields from table failed");
}

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
while($row = mysql_fetch_row($result))
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

mysql_free_result($result);
?>
</body></html>
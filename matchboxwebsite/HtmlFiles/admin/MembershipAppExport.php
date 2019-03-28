<?php

// A script to query the database similar to how MembershipAppAdmin.php does.
// The key difference is that it exports csv-formatted data using php's
// fputcsv() function.

ini_set('display_errors', 1);
require_once '../config/build.php';

// Initialize DB connection.
$username = $MBX_CONF['db_username'];
$password = $MBX_CONF['db_password'];
$dsn = $MBX_CONF['db_source'];
$dbh = new PDO($dsn, $username, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare and perform query.
$cols = ['ApplicationID', 'FullName', 'MembershipType', 'Email', 'SubmissionDateTime'];
$sql = 'SELECT ' . implode(',', $cols) . ' FROM applications ORDER BY SubmissionDateTime DESC';
$query = $dbh->query($sql);

// Prepare for output.
$stream = fopen('php://output', 'w');
$now = date('Ymd-His');
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="mbx-membershipapp-' . $now . '"');

// Output header row.
fputcsv($stream, $cols);

// Fetch rows and output.
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    fputcsv($stream, $row);
}

?>

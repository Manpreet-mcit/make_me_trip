<?php 
// DB credentials.

define('DB_HOST','bvslcqkwvbklzvumvlqq-mysql.services.clever-cloud.com');
define('DB_USER','upekkkczu1avfv83');
define('DB_PASS','nCVU3kMp4rj220Cppkkc');
define('DB_NAME','bvslcqkwvbklzvumvlqq');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
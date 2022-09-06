<?

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli('localhost', 'root', 'root');

$mysqli->set_charset('utf8mb4');

printf("Успешно... %s\n", $mysqli->host_info);

$mysqli->query("CREATE DATABASE inline");
printf("База данных успешно создана.\n");
?>
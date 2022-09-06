<?

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connect = mysqli_connect('localhost', 'root', '', 'inline');
if (!$connect) {
  die("Ошибка: " . mysqli_connect_error());
}

?>

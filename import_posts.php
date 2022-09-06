<?
$connect = mysqli_connect('localhost', 'root', '', 'inline');

$filename = 'posts.json';

$data = file_get_contents($filename);
$array = json_decode($data, true);

foreach($array as $value){
    $query = "INSERT INTO `posts` (`id`, `userId`, `title`, `body`) VALUES ('".$value['id']."', '".$value['userId']."','".$value['title']."','".$value['body']."')";

 mysqli_query($connect,$query);
}
$countPost = count($array);?>

<?
$filenameComm = 'comments.json';

$data = file_get_contents($filenameComm);
$arrayComm = json_decode($data, true);
//$table = 'comments';

foreach($arrayComm as $value){
     $queryComm = "INSERT INTO `comments` (`id`, `postId`, `name`, `email`, `body`) 
                VALUES ('".$value['id']."', '".$value['postId']."','".$value['name']."', '".$value['email']."','".$value['body']."')";
 mysqli_query($connect,$queryComm);
var_dump($queryComm);
}
$countComm = count($arrayComm);

?>
 <script>
     console.log("импорт <?=$countPost?> записей и<?=$countComm?> комментариев")
 </script>
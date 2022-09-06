<!DOCTYPE html>
<html lang='ru'>
    
    <?
require_once 'pdo.php';

?>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Inline</title>  
</head>


    <div class="row">
    <div class="col-md-12">
        <h1>Записи</h1>
        <form name="search" method="post" action="">
            <input type="search" name="query" placeholder="Поиск">
            <button type="submit">Найти</button> 
        </form>
        
 <?   
if($_POST["query"] !=""){
    $query = $_POST["query"];

    $query = htmlspecialchars($query);
    if (strlen($query) < 3) {
        $text = "Слишком короткий поисковый запрос";
    } else if (strlen($query) > 100) {
        $text = '<p>Слишком длинный поисковый запрос.</p>';
    }else { 
              $posts = $connect->query(
                "SELECT 
                P.title,
                C.body
                FROM comments C
                LEFT JOIN posts P ON P.id = C.postId
                WHERE C.body LIKE '%$query%'");
    }

        if(strlen($query) < 3 || strlen($query) > 100){
            echo $text;
        }else{
 
 
?>
    <table class="table table-responsive">
        <thead>
            <tr>
                <td>title</td>
                <td>body</td>          
            </tr>
        </thead>
        <tbody>
            <?

                foreach($posts as $post){
                    ?>
                    <tr>
                        <td><?=$post['title']?></td>
                        <td><?=$post['body']?></td>    
                    </tr>
<?            
                }
    }
}?>
</body>
</div>
</div>
</html>
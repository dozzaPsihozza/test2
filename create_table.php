<?
$connect = mysqli_connect('localhost', 'root', 'root', 'inline');

 $tablePosts =   "CREATE TABLE posts(
        id INT NOT NULL PRIMARY KEY ,
        userId INTEGER NOT NULL,
        title VARCHAR(70) NOT NULL,
        body VARCHAR(70) NOT NULL 
    )";
$tableComments =  "CREATE TABLE comments(
    id INT NOT NULL PRIMARY KEY ,
    postId INTEGER NOT NULL,
    name VARCHAR(70) NOT NULL,
    email VARCHAR(70) NOT NULL,
    body VARCHAR(100) NOT NULL 
)";
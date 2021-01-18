<?php
$pdo = new PDO (
    'mysql:host=localhost;dbname=blog;charset=utf8',
    'root',
    ''
);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//get all posts
function fetch_posts(){
    global $pdo;
    return $pdo->query("SELECT * FROM `posts`");
}

//get one post based on id
function fetch_post($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE `id` = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
    
}


?>
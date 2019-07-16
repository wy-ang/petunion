<?php
include '../db.php';
include '../model/response.php';

$title = $content = $path = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (!empty($title)){
        $sql = "INSERT INTO pet_article (title,content) VALUES ('$title','$content')";  //插入语句
        $selectSql = "SELECT id,title FROM pet_article";
        $con->query($sql);
        $con->close();
        returnRes(array("code" => 200, "data" => [], "msg" => "发布成功"));
    }
}
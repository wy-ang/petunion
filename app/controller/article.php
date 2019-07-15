<?php
include '../db.php';
include '../model/response.php';

$title = $content = $path = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO pet_article (title,content) VALUES ('$title','$content')";  //插入语句
    $con->query($sql);
    $con->close();
    returnRes(array("code" => 200, "data" => [], "msg" => "发布成功"));
}

$selectSql = "SELECT id,title FROM pet_article";
$result = $con->query($selectSql);
if ($result->num_rows > 0) {
    $allArr = array();
    while ($row = $result->fetch_assoc()) {
        $fileArr["title"] = $row['title'];
        $fileArr["id"] = $row['id'];
        $fileArr["path"] = "/app/view/article.php?id=" . $row['id'];
        $allArr[] = $fileArr;
    }
    returnRes(array("code" => 200, "data" => $allArr, "msg" => "查询成功"));
}
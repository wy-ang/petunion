<?php
/**
 * Created by PhpStorm.
 * User: wyang
 * Date: 2019/7/16
 * Time: 15:35
 */

include '../db.php';
include '../model/response.php';

$sql = "SELECT id, title, content FROM pet_article LIMIT 0, 9";
$articles = array();
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $articleArr["id"] = $row['id'];
        $articleArr["title"] = $row['title'];
        $articleArr["content"] = $row['content'];
        $articleArr["path"] = "/app/view/viewArticle.php?id=" . $row['id'];
        $articles[] = $articleArr;
    }
}
returnRes(array("code" => 200, "data" => $articles, "msg" => "查询成功"));
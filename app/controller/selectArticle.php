<?php
include '../db.php';
include '../model/response.php';
$id = $_POST['id'];
$selectSql = "SELECT * FROM pet_article WHERE id=$id";
$result = $con->query($selectSql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fileArr["content"] = $row['content'];
    }
    returnRes(array("code" => 200, "data" => $fileArr, "msg" => "查询成功"));
}

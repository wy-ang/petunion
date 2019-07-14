<?php

include '../db.php';
include '../model/response.php';

$sql = "SELECT title FROM pet_article";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $allArr = array();
    while ($row = $result->fetch_assoc()) {
        $fileArr["title"] = $row['title'];
        $allArr[] = $fileArr;
    }
    returnRes(array("code" => 200, "data" => $allArr, "msg" => "查询成功"));
}

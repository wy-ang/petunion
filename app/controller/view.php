<?php

include '../db.php';
include '../model/response.php';

$sql = "SELECT file_name, file_path FROM pet_photo";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $allArr = array();
    while ($row = $result->fetch_assoc()) {
        $fileArr["fileName"] = $row['file_name'];
        $fileArr["filePath"] = $row['file_path'];
        $allArr[] = $fileArr;
    }
    returnRes(array("code" => 200, "data" => $allArr, "msg" => "查询成功"));
}

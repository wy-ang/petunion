<?php
/**
 * Created by PhpStorm.
 * User: wyang
 * Date: 2019/7/16
 * Time: 14:37
 */

include '../db.php';
include '../model/response.php';

$sql = "SELECT file_name, file_path FROM pet_photo LIMIT 0, 9";
$files = array();
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fileArr["fileName"] = $row['file_name'];
        $fileArr["filePath"] = $row['file_path'];
        $files[] = $fileArr;
    }
}
returnRes(array("code" => 200, "data" => $files, "msg" => "查询成功"));




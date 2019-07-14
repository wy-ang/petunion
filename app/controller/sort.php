<?php

include '../db.php';
include '../model/response.php';

$sql = "SELECT big_sort, small_sort FROM pet_sort";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $allArr = array();
    while ($row = $result->fetch_assoc()) {
        $fileArr["bigSort"] = $row['big_sort'];
        $fileArr["smallSort"] = explode(",",$row['small_sort']);
        $allArr[] = $fileArr;
    }
    returnRes(array("code" => 200, "data" => $allArr, "msg" => "查询成功"));
}

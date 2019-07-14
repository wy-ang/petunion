<?php
include '../db.php';
include '../model/response.php';

$sql = "SELECT menu_name, menu_path FROM pet_menu";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $menus = array();
    while ($row = $result->fetch_assoc()) {
        $menuArr["menuName"] = $row["menu_name"];
        $menuArr["menuPath"] = $row["menu_path"];
        $menus[] = $menuArr;
    };
    returnRes(array("code" => 200, "data" => $menus, "msg" => "查询成功"));
}
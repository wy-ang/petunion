<?php
/**
 * Created by PhpStorm.
 * User: wangyang
 * Date: 2019/7/13
 * Time: 00:18
 */
include '../db.php';
include '../model/response.php';

date_default_timezone_set('PRC');   //设置东八区
$accept = $_FILES['file']['type'] == 'image/gif' || $_FILES['file']['type'] == 'image/jpeg' || $_FILES['file']['type'] == 'image/pjpeg' || $_FILES['file']['type'] == 'image/png';
$path = '../upload/' . date('Y-m') . '/';    // 文件存放路径
// 如果文件存放目录不存在则创建目录
if (!is_dir($path)) {
    mkdir($path);
}
if ($accept) {
    if ($_FILES['file']['error'] > 0) {
        exit(json_encode(array("code" => 0, "msg" => "上传失败", "fileName" => $_FILES['name']['error'])));
    } else {
        $petName = $_FILES['file']['name'];
        $petType = $_FILES['file']['type'];
        $petSize = $_FILES['file']['size'];
        $petTmpName = $_FILES['file']['tmp_name'];
        if (!is_file($path . $petName)) {
            move_uploaded_file($petTmpName, $path . $petName);  //将临时文件移动到指定目录
            $sql = "INSERT INTO pet_photo (file_name,file_path) VALUES ('$petName','$path$petName')";  //插入语句
            $con->query($sql);
            $con->close();
        }
        returnRes(array("code" => 0, "msg" => "上传成功", "data" => array("fileName" => $petName, "filePath" => $path . $petName)));
    }
}


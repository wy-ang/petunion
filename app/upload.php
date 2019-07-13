<?php
/**
 * Created by PhpStorm.
 * User: wangyang
 * Date: 2019/7/13
 * Time: 00:18
 */
$name = $_POST['name'];
$petName = $_FILES['file']['name'];
$petType = $_FILES['file']['type'];
$petSize = $_FILES['file']['size'];
$petTmpName = $_FILES['file']['tmp_name'];

echo $name;
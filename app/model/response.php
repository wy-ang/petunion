<?php
/**
 * @param $arrRet
 */
function returnRes($arrRet){
    header("Content-type: application/json ; charset=utf-8");
    exit(json_encode($arrRet));
}

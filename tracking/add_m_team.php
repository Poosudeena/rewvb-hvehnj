<?php

include 'db_connect.php';

extract($_POST);
$res=array();
$sql = "UPDATE `persons` SET `status`=$state where id=$id";

if (mysqli_query($conn, $sql)) {
    $res['success']=true;
    echo json_encode($res);
}
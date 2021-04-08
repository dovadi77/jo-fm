<?php
function showData($con, $table)
{
    $stmt = $con->prepare("SELECT * FROM $table ORDER BY `id` ASC");
    $stmt->execute();
    $data = $stmt->get_result();
    if ($data->num_rows === 0) exit('No Rows');
    return $data;
}

function checkContact($con)
{
    $stmt = $con->prepare("SELECT * FROM `contact`");
    $stmt->execute();
    $data = $stmt->get_result();
    $row = $data->fetch_assoc();
    return $row;
}

function checkZone($con)
{
    $stmt = $con->prepare("SELECT * FROM `zone`");
    $stmt->execute();
    $data = $stmt->get_result();
    $row = $data->fetch_assoc();
    return $row;
}

function liveChat($con)
{
    $stmt = $con->prepare("SELECT * FROM `zone`");
    $stmt->execute();
    $data = $stmt->get_result();
    $row = $data->fetch_assoc();
    return $row;
}

<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
  include "conn.php";
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = mysqli_query($con, "SELECT * FROM `imgs` WHERE $id=id");
    $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    
    $json_response = json_encode($data, JSON_UNESCAPED_SLASHES);
    header("Content-Type: JSON");
    echo $json_response;
  } else {
    $sql = mysqli_query($con, "SELECT * FROM imgs");
    
    $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    
    
    
    $json_response = json_encode($data, JSON_UNESCAPED_SLASHES);
    
    header("Content-Type: JSON");
    echo $json_response;
  }
}

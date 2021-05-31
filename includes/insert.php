<?php

include('db_connect.php');



$action = $_GET['action'];

if( $action == "insert" ) {
    extract($_POST);

    $level_name = mysqli_real_escape_string($con, $level_name);
    $description = mysqli_real_escape_string($con, $description);

    $sql = "INSERT INTO levels VALUES(null, '$level_name', '$description')";
    $resultSet = mysqli_query($con, $sql);
    if( $resultSet ){
        echo '<div class="alert alert-success"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a> Operation Done Successfully. </div>';
    }else{
        echo '<div class="alert alert-danger"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a> Query failed. </div>';
    }
    // echo $level_name . " " . $description;
}else if( $action == "update" ) {
    extract($_POST);

    $level_name = mysqli_real_escape_string($con, $level_name);
    $description = mysqli_real_escape_string($con, $description);

    $sql = "UPDATE levels SET name = '$level_name', description = '$description' WHERE id = 
    $resultSet = mysqli_query($con, $sql);
    if( $resultSet ){
        echo '<div class="alert alert-success"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a> Operation Done Successfully. </div>';
    }else{
        echo '<div class="alert alert-danger"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a> Query failed. </div>';
    }
    // echo $level_name . " " . $description;
}

// echo $action;



?>

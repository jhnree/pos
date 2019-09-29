<?php
    require_once('../../db.php');

    $sql = "UPDATE tbl_menu SET
                menu = '".$_POST['menu']."',
                description = '".$_POST['desc']."',
                qty = ".$_POST['qty'].",
                modified_at = (SELECT CURRENT_TIMESTAMP())
            WHERE
                id = ".$_POST['id']."
                ";
    // print_r($sql);

    if($conn->query($sql) === TRUE){
        header('location: ../menu-list.php');
    }
    else{
        $conn->error;
    }
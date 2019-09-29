<?php
    require_once('../../db.php');

    $sql = "INSERT INTO tbl_menu 
                (menu,
                description,
                qty) 
            values 
                ('".$_POST['menu']."',
                '".$_POST['desc']."',
                '".$_POST['qty']."'
                )";

    // print_r($_POST);

    if($conn->query($sql) === TRUE){
        header('location: ../menu-list.php');
    }
    else{
        echo $conn->error;
    }
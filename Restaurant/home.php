<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="../css/font.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>POS</title>
</head>
<?php 
    require_once('../db.php');

    $sql = "SELECT menu, description FROM tbl_menu where qty > 0 and active = 1";

    $arr = [];
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $arr[] = $row;
    }
    // print_r($arr);
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="text-center segoe-semilight pt-2">
                    <h1>CHOOSE YOUR ORDER</h2>
                    <hr>
                </div>
                <div class="row">
                    <?php foreach($arr as $val): ?>
                        <div class="col-lg-4 mb-4">
                            <div class="card mx-auto shadow card-menu text-center py-4">
                                    <h3 class="h3-height"><?= $val['description']?></h3>
                                    <h2 class=""><?= $val['menu']?></h2>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-lg-3 shadow outputs text-white">
                
            </div>
        </div>
    </div>
</body>
</html>
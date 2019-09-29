<?php
    require_once('header.php'); 

    $sql = 'Select * from tbl_menu where active=1';

    $arr = [];
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $arr[] = $row;
    }
?>

<div class="clearfix mb-2">
    <div class="float-left">
        <h4>Menu List</h4>
    </div>
    <div class="float-right">
        <a class="btn btn-info" href="menu-add.php">Add Menu</a>
    </div>
</div>
<hr>
<div class="table-responsive">
    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th>Menu</th>
                <th>Description</th>
                <th>Quantity</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $val): ?>
                <tr>
                    <td><?= $val['menu'] ?></td>
                    <td><?= $val['description'] ?></td>
                    <td><?= $val['qty'] ?></td>
                    <td class="text-center">
                        <a href="menu-update.php?id=<?= $val['id'] ?>" class="btn btn-info btn-sm">Update</a>
                        <a href="actions/menu-remove.php?id=<?= $val['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php'); ?>
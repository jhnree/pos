<?php
    require_once('header.php'); 

    $sql = "Select * from tbl_user where user_type != 'superadmin' and active=1";

    $arr = [];
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $arr[] = $row;
    }
    // print_r($sql);
?>

<div class="clearfix mb-2">
    <div class="float-left">
        <h4>Account List</h4>
    </div>
    <div class="float-right">
        <a class="btn btn-info" href="add-user.php">Add User</a>
    </div>
</div>
<hr>
<div class="table-responsive">
    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>User Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $val): ?>
                <tr>
                    <td><?= $val['username'] ?></td>
                    <td><?= $val['password'] ?></td>
                    <td><?= $val['user_type'] ?></td>
                    <td class="text-center">
                        <a href="user-update.php?id=<?= $val['id'] ?>" class="btn btn-info btn-sm">Update</a>
                        <a href="actions/user-remove.php?id=<?= $val['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php'); ?>
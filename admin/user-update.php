<?php 
    require_once('header.php'); 
    
    $sql = "SELECT * FROM tbl_user WHERE id = ".$_GET['id'];
    
    $arr = [];
    $res = $conn->query($sql);
    while($row = $res->fetch_assoc()){
        $arr = $row;
    }
    // print_r($arr);
    $option = array('admin', 'customer');
?>

<div class="card shadow">
    <div class="card-body">
        <div class="clearfix">
            <div class="float-left">
                <h2>Update Account</h2>
            </div>
            <div class="float-right">
                
            </div>
        </div>
        <form method="post" action="actions/user-update-action.php">
            <input class="form-control" type="hidden" name="id" value=<?= $arr['id'] ?>>
            <div class="form-group">
                <label for="username">Username</label>
                <input id="username" class="form-control" type="text" name="username" required value="<?= $arr['username'] ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" required value="<?= $arr['password'] ?>">
            </div>
            <div class="form-group">
                <label for="usertype">User Type</label>
                <select id="usertype" class="form-control mdb-select md-form colorful-select dropdown-dark" name="usertype" value="<?= $arr['user_type'] ?>">
                    <option value="" disabled>Select User Type</option>
                    <?php foreach($option as $val): 
                        if($val == $arr['user_type']){?>
                            <option value="<?= $val; ?>" selected><?= $val;?></option>
                        <?php } else{?>
                            <option value="<?= $val; ?>"><?= $val;?></option>
                    <?php } endforeach; ?>
                </select>
            </div>
            <button class="btn btn-success px-4 float-right" type="submit">Submit</button>
        </form>
    </div>
</div>


<?php require_once('footer.php'); ?>
<?php 
    require_once('header.php'); 
    
    $sql = "SELECT * FROM tbl_menu where id=".$_GET['id'];

    $arr = [];
    $res = $conn->query($sql);
    while($row = $res->fetch_assoc()){
        $arr = $row;
    }
    // print_r($arr);
?>

<div class="clearfix">
    <div class="float-left">
        <h4>Menu Add</h4>
    </div>
    <div class="float-right">
        
    </div>
</div>
<hr>
<form method="post" action="actions/menu-update-action.php">
    <input id="id" class="form-control" type="hidden" name="id" value="<?= $arr['id']?>">
    <div class="form-group">
        <label for="menu">Menu</label>
        <input id="menu" class="form-control" type="text" name="menu" value="<?= $arr['menu']?>">
    </div>
    <div class="form-group">
        <label for="desc">Description</label>
        <input id="desc" class="form-control" type="text" name="desc" value="<?= $arr['description']?>">
    </div>
    <div class="form-group">
        <label for="qty">Quantity</label>
        <input id="qty" class="form-control" type="text" name="qty" value="<?= $arr['qty']?>">
    </div>
    <button class="btn btn-success px-4 float-right" type="submit">Update</button>
</form>

<?php require_once('footer.php'); ?>
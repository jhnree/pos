<?php require_once('header.php'); ?>

<div class="clearfix">
    <div class="float-left">
        <h4>Menu Add</h4>
    </div>
    <div class="float-right">
        
    </div>
</div>
<hr>
<form method="post" action="actions/menu-add-action.php">
    <div class="form-group">
        <label for="menu">Menu</label>
        <input id="menu" class="form-control" type="text" name="menu">
    </div>
    <div class="form-group">
        <label for="desc">Description</label>
        <input id="desc" class="form-control" type="text" name="desc">
    </div>
    <div class="form-group">
        <label for="qty">Quantity</label>
        <input id="qty" class="form-control" type="text" name="qty">
    </div>
    <button class="btn btn-success px-4 float-right" type="submit">Add</button>
</form>

<?php require_once('footer.php'); ?>
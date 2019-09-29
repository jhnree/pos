<?php require_once('header.php'); ?>

<div class="card shadow">
    <div class="card-body">
        <div class="clearfix">
            <div class="float-left">
                <h2>Add User</h2>
            </div>
            <div class="float-right">
                
            </div>
        </div>
        <form method="post" action="actions/add-user-action.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input id="username" class="form-control" type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="usertype">User Type</label>
                <select id="usertype" class="form-control mdb-select md-form colorful-select dropdown-dark" name="usertype">
                    <option value="" disabled selected>Select User Type</option>
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                </select>
            </div>
            <button class="btn btn-success px-4 float-right" type="submit">Submit</button>
        </form>
    </div>
</div>


<?php require_once('footer.php'); ?>
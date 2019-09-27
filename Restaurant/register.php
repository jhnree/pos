<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>POS - Sign up</title>
</head>
<?php require_once 'db.php'?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-5">
                <div class="card shadow py-4 mt-5 px-5 mx-5">
                    <form method="post" action="register-user.php">
                        <h5>Register</h5>
                        <hr>
                        <div class="form-group mt-5 pt-5">
                            <input type="text" name="uname" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pword" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
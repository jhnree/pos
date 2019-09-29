<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>POS</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-5">
                <div class="card shadow py-4 mt-5">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="img/pos.png" alt="">
                        </div>
                        <div class="col-md-7 px-2 mt-4">
                            <form method="post" action="login-successfully.php">
                                <h5>Login</h5>
                                <hr>
                                <div class="form-group mt-5 pt-5">
                                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                                </div>
                                <button class="btn btn-success form-control mx-auto" type="submit">Submit</button>
                                <a href="register.php" type="button" class="btn btn-info form-control mt-2">Sign Up</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
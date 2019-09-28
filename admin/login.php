<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="../Restaurant/css/font.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Login - Admin</title>
</head>
<body>
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-4 mx-auto pt-4">
                <div class="card pt-4 shadow">
                    <div class="card-body text-center">
                        <div class="mb-5">
                            <img src="img/admin.png" alt="">
                            <h3>Administrator</h2>
                        </div>
                        <form method="post" action="actions/login-action.php">
                            <div class="form-group mt-5 pt-5">
                                <input id="username" class="form-control segoe-semilight" type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-5">
                                <input id="password" class="form-control segoe-semilight" type="password" name="password" placeholder="Password" required>
                            </div>
                            <button class="btn btn-success form-control" type="submit">Login</button>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
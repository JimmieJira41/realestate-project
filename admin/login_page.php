<?php
session_start();
$title = 'Login';
?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/stylesheet_admin.css">


</head>

<body class="bg-light" style="background: url(./src/img/bg-login.jpg) center center; background-size:auto; background-repeat:no-repeat;">
    <div class="container position-relativee row">
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10 position-absolute" style="left:50%; top:50%; transform: translate(-50%, -50%);">
            <div class="card">
                <h3 class="text-center p-3 m-0">HP Real Estate</h3>
                <div class="card-body">
                    <?php
                    if (!empty($_SESSION['alert']) != '') {
                    ?>
                        <div class="alert alert-warning text-center">
                            <?php
                            echo $_SESSION['alert'];
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <form class="" action="./src/model/login.php" method="POST">
                        <div class="form-group w-80">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username"></input>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"></input>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info w-100">login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
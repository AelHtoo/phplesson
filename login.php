<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <?php 
            session_start();
            if (isset($_SESSION["name"])) {  
        ?>
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <h1 class="text-center">Welcome <?php echo $_SESSION["name"]; ?></h1>
                </div>
                <a href="logout.php" ><center>Log out</center></a>
            </div>
        <?php 
            }else{    
        ?>
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <h3 class="text-center my-3">Login Form</h3>
                <form action="login_action.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
        }
    ?>
    
    <script src="bootstrap/js/bootstap.bundle.min.js"></script>
</body>
</html>
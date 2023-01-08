<?php 
   $name = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
    }
    
?>


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
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <h3 class="text-center my-3">Login Form</h3>
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>

                <h1>Name is <?php echo $name ?></h1>
            </div>
        </div>
    </div>
    
    <script src="bootstrap/js/bootstap.bundle.min.js"></script>
</body>
</html>
<?php
    
    setcookie('username', $_GET['name']);
    $_COOKIE['username'] = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="">
        <div class="mb-3">
            <input type="text" name="name" value="<?php echo $_COOKIE['username'] ?? "" ?>">
            <button>GET</button>
        </div>
    </form>
    <a href="hello.php" class="btn btn-primary">Submit</a>
</body>

</html>
<?php

require "config.php";

if($_POST) {
    $title = $_POST["title"];
$des = $_POST["description"];

$pdostatement = $pdo -> prepare("INSERT INTO todo(title, description)VAlUES(:title, :description)");
$result = $pdostatement -> execute(
    array(
        ':title' => $title,
        ':description' => $des
    )
);

if($result) {
    echo "<script>alert('New ToDo is added.');window.location.href='index.php';</script>";
}

}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
    <div class="card">
        <div class="card-body">

            <h1>Create ToDo List</h1>

            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-primary">
                    <a href="index.php" class="btn btn-secondary">Back</a>
                </div>
            </form>


        </div>
    </div>
    </div>
</body>
</html>
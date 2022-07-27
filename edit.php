<?php
    require "config.php";
    if($_POST) {
        
        $title = $_POST["title"];
        $des = $_POST["description"];
        $id = $_POST["id"];

        $pdostatement = $pdo -> prepare("UPDATE todo SET title = '$title', description = '$des' WHERE id ='$id'");
        $result =$pdostatement->execute();

        print_r($result);

        if($result) {
            echo "<script>alert('New ToDo is updated ');window.location.href='index.php';</script>";
        }
        
    } else {
        $pdostatement = $pdo -> prepare("SELECT * FROM todo WHERE id=".$_GET['id']);
        $pdostatement -> execute();
        $result = $pdostatement -> fetchAll();

        // print "<pre>";
        //     print_r($result[0]);
        // print "</pre>";
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
</head>
<body>
    <div class="container mt-5">
    <div class="card">
        <div class="card-body">

            <h1>Create ToDo List</h1>

            <form action="" method="post">

                <input type="hidden" name="id" value="<?php echo $result[0]["id"] ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $result[0]["title"] ?>" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="10" rows="5">
                         <?php echo $result[0]["description"]; ?>
                    </textarea>
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
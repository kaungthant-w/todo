<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
</head>
<body>
    <div class="container mt-5">
    <div class="card">
        <div class="card-body">

        <?php
            include_once "config.php";
            $pdostatement = $pdo -> prepare("SELECT * FROM todo ORDER BY id DESC");
            $pdostatement -> execute();
            $result = $pdostatement -> fetchAll();
        ?>

            <h1>Todo List Application</h1>
            <a href="add.php" class="btn btn-success my-3"> <i class="fas fa-plus"></i> Create New</a>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                
                    $i = 1;
                    if($result) {
                        foreach( $result as $value) {
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td><?php echo date('Y-m-d', strtotime($value['created_at'])) ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-warning"> <i class="far fa-edit"></i> Edit</a>
                                <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> Delete</a>
                            </td>
                        </tr>
                    <?php 
                    
                    $i++;

                        }
                    }
                ?>
                </tbody>
            </table>

        </div>
    </div>
    </div>
</body>
</html>
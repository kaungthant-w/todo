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
                    <tr>
                        <td>1</td>
                        <td>Cash</td>
                        <td>to send group</td>
                        <td>27.6.2022</td>
                        <td>
                            <a href="#" class="btn btn-warning"> <i class="far fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Credit</td>
                        <td>to send group</td>
                        <td>27.6.2022</td>
                        <td>
                            <a href="#" class="btn btn-warning"> <i class="far fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    </div>
</body>
</html>
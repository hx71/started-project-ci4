<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>Page Users </h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('users') ?>">Users</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container mt-5">

        <div class="jumbotron">
            <h4 class="display-5">Edit</h4>
            <hr class="my-2">
            <div class="container mt-3">


                <form role="form" action="<?= base_url('/users/update'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id" required value="<?= $data['id']; ?>">

                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required value="<?= $data['name']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required value="<?= $data['username']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required value="<?= $data['password']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="pwd" class="form-label">Roles:</label>
                        <select class="form-select" name="role_id" id="role_id">
                            <option <?= $data['role_id'] == 1 ? 'selected="selected" ' : ''; ?> value="1">Admin</option>
                            <option <?= $data['role_id'] == 2 ? 'selected="selected" ' : ''; ?> value="1">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>

    </div>



</body>

</html>
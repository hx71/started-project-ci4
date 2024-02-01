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
        <h1>Web Application </h1>
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
            <h1 class="display-4">Welcome -> <?= getenv('database.default.hostname'); ?> </h1>
            <hr class="my-4">
            <p>

            </p>
        </div>

    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>©2024 Copyright</p>
    </div>

</body>

</html>
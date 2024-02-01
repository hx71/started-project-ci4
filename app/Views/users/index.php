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
            <h4 class="display-5">Data</h4>
            <hr class="my-2">
            <div class="card-header">
                <h3 class="card-title">
                    <a href="<?= base_url('users/create'); ?>" class="btn float-right btn-xs btn btn-primary">Add Users
                    </a>
            </div>
            <br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="7%">No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data as $i => $row) : ?>
                        <tr>
                            <td><?= ++$i; ?></td>
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td>
                                <a href="<?= base_url('users/edit/' . $row['id']); ?>">Edit</a>
                                <a href="<?= base_url('users/delete/' . $row['id']); ?>" onclick="return confirm('Delete data?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>



</body>

</html>
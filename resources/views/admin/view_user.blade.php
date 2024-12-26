<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        @include('components.sidebar_admin')
        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h1>Teachers</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>123 Main St, Cityville</td>
                        <td>1980-05-15</td>
                        <td><img src="https://via.placeholder.com/50" alt="Avatar" class="img-thumbnail"></td>
                        <td>Playlist 1</td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Update</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>456 Elm St, Townsville</td>
                        <td>1990-11-22</td>
                        <td><img src="https://via.placeholder.com/50" alt="Avatar" class="img-thumbnail"></td>
                        <td>Playlist 2</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Update</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

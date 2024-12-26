<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        @include('components.sidebar_admin')

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h1>Courses</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Teacher</th>
                        <th>Description</th>
                        <th>Playlist</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Course 1</td>
                        <td>John Doe</td>
                        <td>Introduction to Course 1</td>
                        <td>Playlist A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Update</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Course 2</td>
                        <td>Jane Smith</td>
                        <td>Deep dive into Course 2</td>
                        <td>Playlist B</td>
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

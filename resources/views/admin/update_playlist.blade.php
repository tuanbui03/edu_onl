<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Playlist</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        @include('components.sidebar_admin')

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h1>Update Playlist</h1>
            <form>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter playlist title">
                </div>
                <div class="mb-3">
                    <label for="createdAt" class="form-label">Created At</label>
                    <input type="date" class="form-control" id="createdAt">
                </div>
                <div class="mb-3">
                    <label for="updatedAt" class="form-label">Updated At</label>
                    <input type="date" class="form-control" id="updatedAt">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

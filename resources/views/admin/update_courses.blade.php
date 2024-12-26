<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('components.sidebar_admin')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Update Course</h1>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="courseTitle" class="form-label">Course Title</label>
                <input type="text" class="form-control" id="courseTitle" name="title" placeholder="Enter course title" value="Sample Course Title" required>
            </div>
            <div class="mb-3">
                <label for="courseDescription" class="form-label">Description</label>
                <textarea class="form-control" id="courseDescription" name="description" placeholder="Enter course description" rows="3" required>Sample course description</textarea>
            </div>
            <div class="mb-3">
                <label for="teacherName" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="teacherName" name="teacher" placeholder="Enter teacher name" value="Sample Teacher Name" required>
            </div>
            <div class="mb-3">
                <label for="createdAt" class="form-label">Created At</label>
                <input type="datetime-local" class="form-control" id="createdAt" name="created_at" value="2024-01-01T12:00" required>
            </div>
            <div class="mb-3">
                <label for="updatedAt" class="form-label">Updated At</label>
                <input type="datetime-local" class="form-control" id="updatedAt" name="updated_at" value="2024-01-15T12:00" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Update Course</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

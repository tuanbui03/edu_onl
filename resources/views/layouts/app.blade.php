<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('components.header')
    @include('components.sidebar')

    <main>
        @yield('content') <!-- Phần này sẽ được thay bằng nội dung trang cụ thể -->
    </main>

    @include('components.footer')

    <!-- custom js file link -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <section class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>register now</h3>
            <p>your name <span>*</span></p>
            <input type="text" name="name" placeholder="enter your name" required maxlength="50" class="box">
            <p>your email <span>*</span></p>
            <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
            <p>your password <span>*</span></p>
            <input type="password" name="pass" placeholder="enter your password" required maxlength="20"
                class="box">
            <p>confirm password <span>*</span></p>
            <input type="password" name="c_pass" placeholder="confirm your password" required maxlength="20"
                class="box">
            <p>select profile <span>*</span></p>
            <input type="file" accept="image/*" required class="box">
            <input type="submit" value="register new" name="submit" class="btn">
        </form>

    </section>
    <!-- custom js file link  -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
